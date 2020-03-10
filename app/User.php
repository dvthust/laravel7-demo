<?php

namespace App;

use App\Casts\Hash;
use App\Casts\Json;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    const GENDER_MALE   = 1;
    const GENDER_FEMALE = 2;
    const GENDER_OTHER  = 3;

    const GENDER_ARR    = [
        self::GENDER_MALE   => 'backend/table.user.gender.male',
        self::GENDER_FEMALE => 'backend/table.user.gender.female',
        self::GENDER_OTHER  => 'backend/table.user.gender.other'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'last_login',
        'last_visit',
        'birthday',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'nickname',
        'gender',
        'birthday',
        'phone',
        'address',
        'about',
        'avatar',
        'token',
        'firebase_token',
        'last_login',
        'last_login_ip',
        'last_visit',
        'settings',
        'status',
        'balance'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'settings'          => Json::class,
        'password'          => Hash::class
    ];
}
