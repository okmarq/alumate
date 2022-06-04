<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postlike extends Model
{


     /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
    */
    public function post(){
        return $this->belongsToMany(Post::class, 'postlikes')->withPivot('is_dislike')->withTimestamps();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
    */
    public function user(){
        return $this->belongsToMany(User::class, 'postlikes')->withPivot('is_dislike')->withTimestamps();
    }
}
