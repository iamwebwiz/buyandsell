<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{

	public function getDashboard(){
		$user = Auth::User();
		return view('dashboard')->with('user', $user);
	}

	public function postRegister(Request $request){
		$this->validate($request, [
			'username' => 'required|unique:users',
			'email' => 'required|email|unique:users',
			'firstname' => 'required|min:3|max:100',
			'password' => 'required|min:3'
		]);

		$username = $request['username'];
		$email = $request['email'];
		$firstname = $request['firstname'];
		$password = bcrypt($request['password']);

		$user = new User();

		$user->username = $username;
		$user->email = $email;
		$user->firstname = $firstname;
		$user->password = $password;

		if ($user->save()){
			Auth::login($user);
			return redirect()->route('dashboard');
		}
	}

	public function postLogin(Request $request){
		$this->validate($request, [
			'username' => 'required',
			'password' => 'required'
		]);

		if (Auth::attempt(['username' => $request['username'], 'password' => $request['password']])){
			return redirect()->route('dashboard');
		}
		return redirect()->back();
	}

	public function getLogout(){
		Auth::logout();
		return redirect()->route('home');
	}
}
