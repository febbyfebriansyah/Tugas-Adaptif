<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;

class AuthenticationController extends Controller
{
    public function getLogin(){
    	if(Auth::guard('web')->check()){
    		return redirect('/');
    	}
    	else{
    		return view('auth.login');
    	}
    }

    public function submitLogin(Request $request){
    	if(Auth::guard('web')->attempt(['email' => $request['email'], 'password' => $request['password']])){
    		return redirect('/login');
    	} else {
			flash("email atau password yang diinputkan salah")->error();
    		return redirect('/login');
    	}
    }

	public function getRegister(){
		if(Auth::guard('web')->check()){
			return redirect('/user');
		}else{
			return view('auth.register');
		}
	}

	public function register(Request $request){
		if(Auth::guard('web')->check()){
			return redirect('/user');
		}else{
			$user = new User();
			$user->noKtp = $request->input('noKtp');
			$user->name = $request->input('name');
			$user->email = $request->input('email');
			$user->password = Hash::make($request->input('password'));
			$user->save();

			return redirect('/');
		}
	}

	public function logout(){
		Auth::guard('web')->logout();
		return redirect('/');
	}
}
