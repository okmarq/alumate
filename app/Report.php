<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    /**
     * 
     * @var array
     */
    protected $fillable = [
        'post_id', 'reason'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
    
}
