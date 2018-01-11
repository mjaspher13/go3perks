<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password', 'first_name', 'last_name', 'mobile', 'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function usertype()
    {
        return $this->hasOne('App\UserType', 'id', 'user_type');
    }

    public function merchant()
    {
        return $this->belongsTo('App\Merchant', 'account_id', 'agent_id');
    }

    public function findForPassport($identifier) 
    {
        return $this->orWhere('email', $identifier)->orWhere('username', $identifier)->first();
    }

}
