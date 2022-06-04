<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceImage extends Model
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
    public function service()
    {
        return $this->belongsTo(Service::class);
    }

}
