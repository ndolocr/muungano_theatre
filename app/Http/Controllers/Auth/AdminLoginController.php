<?php

namespace App\Http\Controllers\Auth;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminLoginController extends Controller
{
	public function __construct() {
		$this->middleware('guest:admin');
	}

    public function showLoginForm(){
    	return view('auth.admin-login');
    }

    public function login(Request $request){
    	//Validate form data
    	$this->validate($request, [
    		'email' => 'required|email',
    		'password' =>'required|min:5',
    	]);

    	//Declare and initialize credentials variable
    	$remember = $request->remember;
    	$credentials = ['email'=>$request->email, 'password'=>$request->password];

    	//Attempt to login user
    	if(Auth::guard('admin')->attempt($credentials, $remember)){
    		//If credentials are correct
    		return redirect()->intended(route('admin-dashboard'));
    	}

    	//If credentials are not correct
    	return redirect()->back()->withInput($request->only('email', 'remember'));
    }
}
