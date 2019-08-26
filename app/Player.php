<?php

namespace App;
use User;
use Country;


use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
   	protected $fillable =['cname','postiton'];
   	protected $primaryKey = 'Slug';


}
