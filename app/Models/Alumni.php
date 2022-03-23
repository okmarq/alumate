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
        'graduation_year',
        'admission_year',
        'graduation_year',
        'school_id',
        'user_id'
    ];

    /**
     * Get the school that owns the alumni.
     */
    public function school()
    {
        return $this->belongsTo(School::class);
    }

    /**
     * Get the user that owns the alumni.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function schools()
    {
        return $this->hasMany(School::class);
        // , 'school_id'
    }

    public function users()
    {
        return $this->hasMany(User::class);
        // , 'user_id'
    }
}
