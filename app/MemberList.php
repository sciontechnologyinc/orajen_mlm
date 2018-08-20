<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MemberList extends Model
{
    
    protected $table = 'member_lists';
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