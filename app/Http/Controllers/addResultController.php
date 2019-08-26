<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\Score;
use Auth;
use Validator;



class addResultController extends Controller
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
         $teams=Country::all();
         return view('addResult',compact('teams'));

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

           $this->validate($request, [
            'cname' => 'required',
            'played' => 'required',
            'wins' => 'required',
            'draws' => 'required',
            'loses' => 'required',
            'points' => 'required',


        ]);
        // Handle File Upload
              // Create Post
        $score = new Score;
        $score->cname = $request->input('cname');
        $score->played = $request->input('played');
        $score->wins =$request->input('wins');
           $score->draws =$request->input('draws');
              $score->loses =$request->input('loses');
                       $score->points =$request->input('points');


        $score->save();

        return redirect('/adminDashboard/addResult')->with('status', 'Score has been uploaded!');
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
