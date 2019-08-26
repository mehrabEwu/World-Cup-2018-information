<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
class adminLoginController extends Controller
{
    function index()
    {
    	return view('adminLogin');
    }

    function checklogin(Request $request)
    {
    	$this->validate($request,[

    		'email'		=>	'required|email',
    		'password'	=>	'required|alphaNum|min:3'



       	]);

       	$admin_data = array(

       		'email'		=>	$request->get('email'),
       		'password'	=>	$request->get('password')

       	);


       	if(Auth::attempt($admin_data))
       	{

       		return redirect ('admin/adminDashboard');


       	}
       	else
       	{

       		return back()->with('error', 'Credentials does not match');

       	}

    }

    function adminDashboard()
    {
    	if (Auth::User()) {
    	return view('adminDashboard');
    }
    }

    function logout()

    {
    	Auth::logout();
    	return redirect ('admin');
    }



}
