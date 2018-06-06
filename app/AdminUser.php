<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

class AdminUser extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';


//    protected $fillable = [
//        'name', 'email', 'avatar', 'email', 'password', 'remmeber_token', 'created_at', 'updated_at'
//    ];

    protected $fillable = [
        'first_name', 'last_name', 'subscription', 'email', 'password', 'role_id', 'verified'
    ];
}
