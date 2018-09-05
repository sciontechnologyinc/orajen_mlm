<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'members';
    protected $fillable =  ['firstname',
                            'middlename',
                            'lastname',
                            'address',
                            'email',
                            'mobileno',
                            'sponsorid',
                            'placementid',
                            'activationcode'];
}
