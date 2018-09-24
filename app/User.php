<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'birthdate',
        'contactnumbers',
        'address',
        'gender',
        'password',
        'netincome',
        'payout',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



    public function is_admin()
    {
        if($this->admin)
        {
            return true;
        }
            return false;
    }

    public $primaryKey = 'id';
    public $timestamps = true;
    public function members() {
        return $this->hasMany('App\Member');
    }
}
