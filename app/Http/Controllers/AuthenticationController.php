<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Penduduk;

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

			return redirect('/login');
		}
	}

	public function logout(){
		Auth::guard('web')->logout();
		return redirect('/');
	}

    public function getActivation(){
        if(Auth::guard('web')->check()){
            return view('/');
        }else{
            return view('auth.account_activation');
        }
    }

    public function postActivation(Request $request){
        // if(Auth::guard('web')->attempt(['noKtp' => $request['noKtp'], 'email' => $request['email']])){
        //     return redirect('/account_activation');
        // } else {
        //     flash("email atau nip yang diinputkan salah")->error();
        //     return redirect('/account_activation');
        // }
        $password = $request->input('password');
        $password_confirmation = $request->input('password_confirmation');
        $email = $request->input('email');
        $noKtp = $request->input('noKtp');

        if(Penduduk::where('noKtp', $noKtp)->first() || Penduduk::where('email', $email)->first()){
            if($password == $password_confirmation){
                if(User::where('noKtp', $noKtp)->first() || User::where('email', $email)->first()){
                    flash("Proses aktifasi sudah dilakukan")->error();
                    return redirect('/account_activation');
                }
                else{
                    $user = new User();
                    $user->noKtp = $noKtp;
                    $user->name = Penduduk::where('noKtp', $noKtp)->first()->nama;
                    $user->email = $email;
                    $user->password = Hash::make($password);
                    $user->save();

                    return redirect('/login');
                }
            }
            else{
                flash("Konfirmasi password salah")->error();
                return redirect('/account_activation');
            }
        }
        else{
            flash("NIP atau email tidak ditemukan")->error();
            return redirect('/account_activation');
        }

    }

    public function getForgetPassword(){
        if(Auth::guard('web')->check()){
            return redirect('/login');
        } else {
            return view('auth.passwords.forget_password');
        }
    }

    public function getForgetPassword2(){
        if(Auth::guard('web')->check()){
            return redirect('/login');
        } else {
            return view('auth.passwords.forget_password2');
        }
    }

    public function postForgetPassword(Request $request){
        if(Auth::guard('web')->attempt(['email' => $request['email']])){
            return redirect('/login');
        } else {
            flash('silahkan cek e-mail anda')->success();
            return view('auth.passwords.forget_password');
        }
    }

    public function postForgetPassword2(){
        if(Auth::guard('web')->check()){
            return redirect('/login');
        } else {
            return view('auth.passwords.new_password');
        }
    }

    /**
     * belum selesai
     */
    public function postNewPassword(Request $request){
        if(Auth::guard('web')->check()){
            return redirect('/login');
        }else{
            //$search = $request->input('search');
            //$penduduks = Penduduk::where('email','=',$search)
            //$search->password = Hash::make($request->input('password'));
            //$search->save();
            flash('password berhasil diganti')->success();
            flash('maaf, password tidak cocok')->error();
            return view('auth.passwords.new_password');
        }
    }
}
