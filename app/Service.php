<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
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
    public function business()
    {
        return $this->belongsTo(Business::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function serviceImage()
    {
        return $this->hasMany(ServiceImage::class, 'service_id');
    }

}
