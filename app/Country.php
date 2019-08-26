<?php

namespace App;
use User;
use Player;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{


	protected $fillable =['cname','tname','wcwin'] ;
        

	 
    public function getinfo()
    {
    	return $this->cname;
    }

   public function Player()
    {
    	return $this->hasMany('App\Player');
 }
}
