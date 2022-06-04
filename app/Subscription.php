<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function user(){
        return $this->belongsTo(User::class);
    }


     /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function topic(){
        return $this->belongsTo(Topic::class);
    }
}
