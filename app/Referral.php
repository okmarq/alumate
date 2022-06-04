<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Referral extends Model
{
    protected $fillable = [
        'id',
        'referrer_id',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }





}
