<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fixtureController extends Controller
{
    function index()
    {
    	return view('fixture');
    }
}
