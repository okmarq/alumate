<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Optix\Media\HasMedia;

class Group extends Model
{

    use HasMedia;
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['totalMembers'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany(User::class)
            ->as('member')
            ->withPivot('admin')
            ->withTimestamps();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function school()
    {
        return $this->belongsTo(School::class);
    }

    /**
     * Member count
     * @return int
     */
    public function getTotalMembersAttribute()
    {
        return $this->users()->count('users.id');
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function events()
    {
        return $this->hasMany(Event::class, 'event_id');
    }


}
