<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pgroup extends Model
{
    //  protected $table = 'alumates.memberships';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'abbv', 'photo'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function school()
    {
        return $this->belongsTo(School::class);
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany(User::class)
            ->as('member')
            ->withPivot('membership_id')
            ->withTimestamps();
    }
}