<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\Score;

class showScoresController extends Controller
{
    public function show()
    {
    	$scores=Score::all();
    	return view('showScores',compact('scores'));

    }
}
