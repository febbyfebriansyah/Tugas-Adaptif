<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Penduduk;
use App\Modification;
use Alert;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        /*if(Auth::user()->privilege == 99){
            return view('dashboard');
        }else{
            return view('pegawai.dashboard');
        }*/
        return view('dashboard');
    }
    
    public function showEmployees(Request $request) {
        if(Auth::user()->privilege == 99){
            $search = $request->input('search');
            $penduduks = Penduduk::all();
            $nips = DB::table('penduduk')->select('noKtp')->get();
            return view('admin.list_pegawai',['penduduks' => $penduduks, 'nips' => $nips]);
        }else{
            return view('dashboard');
        }
    }
    
    public function declineRequest($id, $alasan) {
        if(Auth::user()->privilege == 99){
            $request = Modification::find($id);
            $request->accepted = -1;
            $request->alasan = $alasan;
            $request->save();
            return redirect('/request_list')->with('flash_notif.message', ('Request '.$id.' berhasil ditolak karena '.$alasan));
        }else{
            return view('dashboard');
        }
    }
    
    public function acceptRequest(Request $request) {
        if(Auth::user()->privilege == 99){
            $id = $request->input('var_mod_req');
            $mod_req = Modification::find($id);
            $this->editData($mod_req);
            $mod_req->accepted = 1;
            $mod_req->save();
            return redirect('/request_list')->with('flash_notif.message', ('Request '.$mod_req->id.' berhasil diterima.'));
        }else{
            return view('dashboard');
        }
    }
    
    private function editData($mod_req) {
        if(Auth::user()->privilege == 99){
            $penduduk = Penduduk::find($mod_req->penduduk_id);
            $penduduk->noKtp = $mod_req->noKtp;
            $penduduk->nama = $mod_req->nama;
            $penduduk->tglLahir = $mod_req->tglLahir;
            $penduduk->tmptLahir = $mod_req->tmptLahir;
            $penduduk->jk = $mod_req->jk;
            $penduduk->agama = $mod_req->agama;
            $penduduk->alamat = $mod_req->alamat;
            $penduduk->no_telp = $mod_req->no_telp;
            $penduduk->save();
        }else{
            return view('dashboard');
        }        
    }
    
    public function showRequests() {
        if(Auth::user()->privilege == 99){
            $mod_requests = Modification::where('accepted', 0)->get();
            return view('admin.daftar_pengajuan', ['mod_requests' => $mod_requests]);
        }else{
            return view('dashboard');
        }
    }
    
    public function detail($id) 
    {
        $penduduk = Penduduk::find($id);
        if($penduduk->image_url != null) $image = "http://localhost:8000/storage/".$penduduk->image_url;
        else $image = asset('img/profile2.png');
        // return response()->json(storage_path($penduduk->image_url));
        return view('admin.detail_pegawai', ['penduduk' => $penduduk, 'image' => $image]);
    }

    public function showProfil(){
        return view('pegawai.profil_diri');
    }

    public function status(){
        if(Auth::user()->privilege == 99){
            $mod_requests = Modification::all();
            return view('status_pengajuan', ['mod_requests' => $mod_requests]);
        }else{
            $user_id = Auth::user()->id;
            $mod_requests = Modification::where('user_id', $user_id)->get();
            return view('status_pengajuan', ['mod_requests' => $mod_requests]);
        }
        //return view('admin.list_pegawai',['penduduks' => $penduduks, 'search' => $search, 'nips' => $nips]);
    }

    public function create(Request $request){
        $penduduk = new Penduduk();
        $penduduk->noKtp = $request->noKtp;
        $penduduk->nama = $request->nama;
        $penduduk->tglLahir = $request->tglLahir;
		$penduduk->tmptLahir = $request->tmptLahir;
        $penduduk->jk = $request->jk;
        $penduduk->agama = $request->agama;
        $penduduk->alamat = $request->alamat;
		$penduduk->no_telp = $request->no_telp;
        $penduduk->save();

        $image_url = $request->file('image_url');
        $path_img = "";
        
        if($image_url != null){
            $path_img = $image_url->storeAs('storage/image_upload/'.$request->input('penduduk_id'), $image_url->getClientOriginalName(), 'public');            
        }
        
        $penduduk->image_url = $path_img;
        $penduduk->save();

        flash('Penduduk berhasil ditambahkan');
        return back();
    }
    
    public function editProfil(Request $request){
        $edit = new Modification();
        $edit->penduduk_id = $request->penduduk_id;
        $edit->user_id = $request->user_id;
        $edit->noKtp = $request->noKtp;
        $edit->nama = $request->nama;
        $edit->tmptLahir = $request->tmptLahir;
        $edit->tglLahir = $request->tglLahir;
        $edit->jk = $request->jk;
        $edit->agama = $request->agama;
        $edit->alamat = $request->alamat;
		$edit->no_telp = $request->no_telp;
        $edit->save();

        return redirect('/profil')->with('success', 'Anda berhasil mengirimkan request edit profil');
    }

    public function edit(Request $request){
        $penduduk_id = $request->input('penduduk_id');
        $noKtp = $request->input('noKtp');
        $nama = $request->input('nama');
        $tglLahir = $request->input('tglLahir');
		$tmptLahir = $request->input('tmptLahir');
        $jk = $request->input('jk');
        $agama = $request->input('agama');
        $alamat = $request->input('alamat');
		$no_telp = $request->input('no_telp');

        $penduduk = Penduduk::find($penduduk_id);
        $penduduk->noKtp = $noKtp;
        $penduduk->nama = $nama;
        $penduduk->tglLahir = $tglLahir;
		$penduduk->tmptLahir = $tmptLahir;
        $penduduk->jk = $jk;
        $penduduk->agama = $agama;
        $penduduk->alamat = $alamat;
		$penduduk->no_telp = $no_telp;
        $penduduk->save();

        // return response()->json($request);
        flash('Penduduk berhasil diupdate');
        return redirect('/home/employees');
    }


    public function delete($id){
        $penduduk = Penduduk::find($id);
        $image = $penduduk->image_url;
        if($image != null){
            File::deleteDirectory('storage/storage/image_upload/'.$penduduk->id);
        }
        Penduduk::destroy($id);
        flash('Penduduk berhasil dihapus');
        return back();
    }

    public function download(){
        $penduduks = Penduduk::all();
        return response()->download($penduduks);
    }
    
    public function upload(Request $request){
        $image_url = $request->file('image_url');
        $path_img = "";
        
        if($image_url != null){
            $path_img = $image_url->storeAs('storage/image_upload/'.$request->input('penduduk_id'), $image_url->getClientOriginalName(), 'public');            
        }
        
        $penduduk = Penduduk::find($request->input('penduduk_id'));
        $penduduk->image_url = $path_img;
        $penduduk->save();

        flash('Upload berhasil');
        return redirect('/');
    }

    public function postImage(Request $request){
        $this->validate($request, [
            'image_url' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);
        $imageName = time().'.'.$request->image_url->getClientOriginalExtension();
        $request->image_file->move(public_path('images'), $imageName);
        return back()
            ->with('success','Image berhasil di upload.')
            ->with('image',$imageName);
    }
}
