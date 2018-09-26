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
                            'memberemail',
                            'memberpassword',
                            'mobileno',
                            'sponsorid',
                            'placementid',
                            'activationcode',
                            'node_address',
                            'user_id'];
    public $primaryKey = 'id';
    public $timestamps = true;
    public function user() {
        return $this->belongsTo('App\User');
    }
}