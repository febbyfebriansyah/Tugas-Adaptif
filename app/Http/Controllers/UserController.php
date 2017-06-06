<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Penduduk;
use App\User;

class UserController extends Controller
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
        return view('user-view');
//        return response()->json($user);
    }
    
    public function showProfil(Request $request){
        //$user = Penduduk::where('nama','like',Auth::user()->name);
        $user = Auth::user()->getData();
        return view('profil', ['user' => $user]);
    }
    
    public function getProfil(){
        $user = Penduduk::where('nama','like',Auth::user()->name);
    }
}
