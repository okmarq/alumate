<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Business extends Model
{
     /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongTo
     */

     public function user(){
         return $this->belongsTo(User::class, 'user_id');
     }

        /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function state()
    {
        return $this->belongsTo(State::class);
    }

      /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongTo
     */

    public function category(){
        return $this->belongsTo(Category::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function service()
    {
        return $this->hasMany(Service::class, 'business_id');
    }

         /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongTo
     */

    public function group(){
        return $this->belongsTo(Group::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */

     public function bay(){
         return $this->hasOne(Bay::class);
     }

}
