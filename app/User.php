<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Overtrue\LaravelFollow\Followable;
use Multicaret\Acquaintances\Traits\CanFavorite;
use Multicaret\Acquaintances\Traits\CanSubscribe;
use Tymon\JWTAuth\Contracts\JWTSubject;


class User extends Authenticatable
{
    use Notifiable, Followable, CanSubscribe;

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
//    public function getJWTIdentifier()
//    {
//        return $this->getKey();
//    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
//    public function getJWTCustomClaims()
//    {
//        return [];
//    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
//    protected $fillable = [
//        'name', 'email', 'password', 'player_id', 'photo', 'status', 'country_of_residence', 'country_of_origin', 'state_of_residence', 'state_of_origin', 'profession', 'phone', 'date_of_birth', 'gender', 'marital', 'hobbies'
    // protected $fillable = [
    //     'name', 'email', 'password', 'player_id', 'photo', 'status', 'country_of_residence', 'country_of_origin', 'state_of_residence', 'state_of_origin', 'profession', 'phone', 'date_of_birth', 'gender', 'marital', 'hobbies'
    // ];

     protected $fillable = [
        'name', 'email', 'password', 'player_id', 'photo', 'status', 'country_of_residence', 'country_of_origin', 'state_of_residence', 'state_of_origin', 'profession', 'phone', 'date_of_birth', 'gender', 'marital', 'hobbies',
        'type', 'verify', 'graduate','level', 'global','groupid','groupschoolid','groupphoto','groupname','referral_code','referrer_id',
        'groupcertificate','grouptype','groupyear','grouptotalmember','groupdescription','groupschoolstatus','groupschoolname'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'email_verified_at'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function groups()
    {
        return $this->belongsToMany(Group::class)
            ->as('member')
            ->withTimestamps();
    }

     /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function pgroups()
    {
        return $this->belongsToMany(Pgroup::class)
            ->as('member')
            ->withTimestamps();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function attendEvent()
    {
        return $this->hasMany(attendEvent::class, 'user_id');
    }

    public function referrals(){
        return $this->hasMany(Referral::class);
    }

    protected $appends = [
        'link',
    ];

    public function getLinkAttribute()
    {
        return url('/register') . '?ref=' . $this->referral_code;
    }

}
