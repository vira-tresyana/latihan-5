<?php 

namespace App\Http\Controllers;
use Auth;
use App\Models\User;

class AuthController extends Controller
{
	function showLogin(){
		return view('login');

	}

	function prosesLogin(){
		if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
			return redirect('admin/beranda')->with('success', 'Login berhasil');
		} else {
			return back()->with('danger', 'Login anda gagal, mohon periksa email atau password anda!');
		}
	}

	function logout(){

	}

	function registration(){

	}

	function forgotPassword(){

	}
}













 ?>