<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
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
        'name',
        // 'abbr',
        'city_id',
        'school_type_id'
        // 'year_founded'
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function faculties()
    {
        return $this->hasMany(Faculty::class, 'school_id');
    }

    /**
     * The alumni that belong to the school.
     */
    public function alumni()
    {
        return $this->hasMany(Alumni::class);
    }

    /**
     * Get the image associated with the school.
     */
    public function image()
    {
        return $this->belongsTo(Image::class);
    }

    /**
     * Get the school type associated with the school.
     */
    public function schoolType()
    {
        return $this->belongsTo(schoolType::class);
    }
}