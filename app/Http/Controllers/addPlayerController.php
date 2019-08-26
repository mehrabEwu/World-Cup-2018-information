<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\Player;
use Auth;
use Validator;


class addPlayerController extends Controller
{
   public function index()
    {
    	if (Auth::User()) {
    		$teams=Country::all();
    	 return view('addPlayer',compact('teams'));
    }
    }


  public  function store(Request $request)
    {

    	 $this->validate($request, [
            
            'pname' => 'required',
            'position'=> 'required',
            'pimage' => 'image|nullable',
             'cimage' => 'image|nullable',
            'clubname' => 'required',
            'rating'   => 'nullable',
            'goal' 	=> 'nullable',
            'award' => 'nullable',
            'description' =>'nullable',
            'cname'=>'required',
            'jersey'=>'required',
            'age'=>'required',
            'height'=>'required',
            'weight'=>'required',



        ]);
        // Handle File Upload
        if($request->hasFile('pimage')){
            // Get filename with the extension
            $filenameWithExt = $request->file('pimage')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('pimage')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('pimage')->storeAs('public/squad', $fileNameToStore);
        } 
        else {
            $fileNameToStore = 'noimage.jpg';
        }


        if($request->hasFile('cimage')){
            // Get filename with the extension
            $filenameWithExtt = $request->file('cimage')->getClientOriginalName();
            // Get just filename
            $filenamee = pathinfo($filenameWithExtt, PATHINFO_FILENAME);
            // Get just ext
            $extensionn = $request->file('cimage')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStoree= $filenamee.'_'.time().'.'.$extensionn;
            // Upload Image
            $path = $request->file('cimage')->storeAs('public/squad/cover', $fileNameToStoree);
        }

        else {
            $fileNameToStoree= 'noimage.jpg';
        }

        // Create Post
       
        $player = new Player;
        $player->cname = $request->input('cname');
        $player->pname = $request->input('pname');
        $player->position = $request->input('position');
        $player->pimage = $fileNameToStore;
          $player->cimage = $fileNameToStoree;
           $player->jersey = $request->input('jersey');
           $player->age = $request->input('age');
           $player->height = $request->input('height');
           $player->weight = $request->input('weight');
           $player->clubname= $request->input('clubname');
              $player->rating = $request->input('rating');
                 $player->goal = $request->input('goal');
                    $player->award = $request->input('award');
                       $player->description = $request->input('description');
                        $player->slug = uniqid();




                   


        $player->save();

        return redirect('/adminDashboard/addPlayer')->with('status', 'Squad has been uploaded!');

    }
}
