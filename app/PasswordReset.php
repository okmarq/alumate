<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PasswordReset extends Model
{
    protected $fillable = ['id','reference','user_id','expiry'];

    public $timestamps = false;

    protected $table = 'password_resets';

}
