<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'admission_year',
        'graduation_year',
        'school_id',
        'user_id',
        'group_id'
    ];

    // /**
    //  * The schools that belongs the alumni.
    //  */
    // public function schools()
    // {
    //     return $this->belongsToMany(School::class);
    // }

    // /**
    //  * The users that belongs to the alumni.
    //  */
    // public function users()
    // {
    //     return $this->belongsToMany(User::class);
    // }

    /**
     * Get the group that owns the alumni.
     */
    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}
