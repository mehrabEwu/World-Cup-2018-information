<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\Player;

class squadController extends Controller
{


    public function index()
    {
       
        $teams=Country::all();
      
        return view('squad', compact('teams'));

    }


    public function show($cname)
    {
        $players=Player::whereCname($cname)->get();
      //    $persons = Player::order_by('position', 'ASC')->get();
        return view('showSquad',compact('players'));
    }


}
