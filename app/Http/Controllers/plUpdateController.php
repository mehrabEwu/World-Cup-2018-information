<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Country;
use App\Player;
use Auth;
use Validator;


class plUpdateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::User())
        {
            {
         $teams=Country::all();
         return view('updatePlayer',compact('teams'));

        }
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($cname)
    {
          $players=Player::whereCname($cname)->get();
          $cnty=$cname;
       
      //    $persons = Player::order_by('position', 'ASC')->get();
        return view('listPlayer',compact('players','cnty'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $players = Player::whereSlug($slug)->firstOrFail();
        $teams = Country::all();

        return view('edit', compact('players','teams'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        
         $this->validate($request, [
            
            'pname' => 'required',
            'position'=> 'required',
            'pimage' => 'required',
             'cimage' => 'required',
            'clubname' => 'required',
            'rating'   => 'nullable',
            'goal'  => 'nullable',
            'award' => 'nullable',
            'description' =>'nullable',
            'cname'=>'required',
            'jersey'=>'required',
            'age'=>'required',
            'height'=>'required',
            'weight'=>'required',

        ]);

         $player = Player::whereSlug($slug)->firstOrFail();

          $player->cname = $request->get('cname');
        $player->pname = $request->get('pname');
        $player->position = $request->get('position');
        $player->pimage = $request->get('pimage');
  
          $player->cimage = $request->get('cimage');
           $player->jersey = $request->get('jersey');
           $player->age = $request->get('age');
           $player->height = $request->get('height');
           $player->weight = $request->get('weight');
           $player->clubname= $request->get('clubname');
              $player->rating = $request->get('rating');
                 $player->goal = $request->get('goal');
                    $player->award = $request->get('award');
                       $player->description = $request->get('description');


                       $player->save();

                       return redirect(action('plUpdateController@edit', $player->slug))->with('status', 'The player '.$slug.' has been updated!');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
