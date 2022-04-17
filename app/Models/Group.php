<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
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
        'description',
        'image_id'
    ];

    /**
     * Get the alumni for the group.
     */
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function alumni()
    {
        return $this->hasMany(Alumni::class);
    }
}
