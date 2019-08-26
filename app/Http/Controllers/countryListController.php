<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use Validator;

class countryListController extends Controller
{
     function index()
    {
    	$teams=Country::all();
    
      return view('countryList', compact('teams'));
    }
    

  
}
