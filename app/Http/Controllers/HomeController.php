<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $search = $request->input('search');
        $penduduks = Penduduk::where('noKtp','=',$search)
                        ->orWhere('nama','like','%'.$search.'%')
                        ->paginate(10);
        return view('home',['penduduks' => $penduduks, 'search' => $search]);
    }

    public function create(Request $request){
        $penduduk = new Penduduk();
        $penduduk->noKtp = $request->noKtp;
        $penduduk->nama = $request->nama;
        $penduduk->tglLahir = $request->tglLahir;
        $penduduk->jk = $request->jk;
        $penduduk->agama = $request->agama;
        $penduduk->alamat = $request->alamat;
        $penduduk->save();

        flash('Penduduk berhasil ditambahkan')->success();
        return redirect('/home');
    }

    public function edit(Request $request){
        $penduduk_id = $request->input('penduduk_id');
        $noKtp = $request->input('noKtp');
        $nama = $request->input('nama');
        $tglLahir = $request->input('tglLahir');
        $jk = $request->input('jk');
        $agama = $request->input('agama');
        $alamat = $request->input('alamat');

        $penduduk = Penduduk::find($penduduk_id);
        $penduduk->noKtp = $noKtp;
        $penduduk->nama = $nama;
        $penduduk->tglLahir = $tglLahir;
        $penduduk->jk = $jk;
        $penduduk->agama = $agama;
        $penduduk->alamat = $alamat;
        $penduduk->save();

        // return response()->json($request);
        flash('Penduduk berhasil di update')->success();
        return redirect('/home');
    }


    public function delete($id){
        Penduduk::destroy($id);
        flash('Penduduk berhasil dihapus')->success();
        return redirect('/home');
    }

    public function download(){
        $penduduks = Penduduk::all();
        return response()->download($penduduks);
    }

    public function upload(Request $request, $id){
        $file = $request->file('file_url');
        
        $penduduk = Penduduk::find($id);
        $penduduk->file_url = "";
        $penduduk->save();

        $path = $file->storeAs('storage/file_upload'.$penduduk->id, $file->getClientOriginalName(), 'public');
        $penduduk->file_url = $path;
        $penduduk->save();        

        return redirect('/home');
    }
}
