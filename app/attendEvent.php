<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class attendEvent extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];


    /*
    * @var array
    */
   protected $fillable = [
       'event_id', 'user_id'
   ];

   
}
