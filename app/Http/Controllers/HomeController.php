<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Penduduk;
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
        return view('pegawai.dashboard');
    }
    
    public function showEmployees(Request $request) 
    {
        $search = $request->input('search');
        $penduduks = Penduduk::where('noKtp','=',$search)
                        ->orWhere('nama','like','%'.$search.'%')
                        ->paginate(10);
        return view('pegawai.list_pegawai',['penduduks' => $penduduks, 'search' => $search]);
    }

    public function showProfil(){
        return view('pegawai.profil_diri');
    }

    public function status(){
        return view('pegawai.status_pengajuan');
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
		$penduduk->noTelp = $request->noTelp;
        $penduduk->save();

        flash('Penduduk berhasil ditambahkan')->success();
        return redirect('/');
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
		$noTelp = $request->input('noTelp');

        $penduduk = Penduduk::find($penduduk_id);
        $penduduk->noKtp = $noKtp;
        $penduduk->nama = $nama;
        $penduduk->tglLahir = $tglLahir;
		$penduduk->tmptLahir = $tmptLahir;
        $penduduk->jk = $jk;
        $penduduk->agama = $agama;
        $penduduk->alamat = $alamat;
		$penduduk->noTelp = $noTelp;
        $penduduk->save();

        // return response()->json($request);
        flash('Penduduk berhasil di update')->success();
        return redirect('/');
    }


    public function delete($id){
        Penduduk::destroy($id);
        flash('Penduduk berhasil dihapus')->success();
        return redirect('/');
    }

    public function download(){
        $penduduks = Penduduk::all();
        return response()->download($penduduks);
    }
    // public function upload(Request $request, $id){
    //     $file = $request->file('file_url');
        
    //     $penduduk = Penduduk::find($id);
    //     $penduduk->file_url = "";
    //     $penduduk->save();

    //     $path = $file->storeAs('storage/file_upload'.$penduduk->id, $file->getClientOriginalName(), 'public');
    //     $penduduk->file_url = $path;
    //     $penduduk->save();        

    //     return redirect('/home');
    // }
    public function upload(Request $request){
        $image_url = $request->file('image_url');
        $file_url = $request->file('file_url');
        $path_img = "";
        $path_file = "";

        if($image_url != null){
            $path_img = $image_url->storeAs('storage/image_upload/'.$request->input('penduduk_id'), $image_url->getClientOriginalName(), 'public');            
        }else if ($file_url != null){
            $path_file = $file_url->storeAs('storage/file_upload/'.$request->input('penduduk_id'), $file_url->getClientOriginalName(), 'public');   
        }else if($image_url != null && $file_url != null){
            $path_img = $image_url->storeAs('storage/image_upload/'.$request->input('penduduk_id'), $image_url->getClientOriginalName(), 'public');
            $path_file = $file_url->storeAs('storage/file_upload/'.$request->input('penduduk_id'), $file_url->getClientOriginalName(), 'public');
        }

        $penduduk = Penduduk::find($request->input('penduduk_id'));
        $penduduk->image_url = $path_img;
        $penduduk->file_url = $path_file;
        $penduduk->save();

        flash('Upload Berhasil')->success();
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
