<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    protected $table = 'pgroup_user';
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    // /**
    //  * The accessors to append to the model's array form.
    //  *
    //  * @var array
    //  */
    // protected $appends = ['totalMembers'];

    // /**
    //  * @return \Illuminate\Database\Eloquent\Relations\HasMany
    //  */
    public function users()
    {
        return $this->hasMany(User::class, 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function pgroup()
    {
        return $this->belongsTo(Pgroup::class);
    }
}