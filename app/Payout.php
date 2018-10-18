<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payout extends Model
{
    protected $table = 'payouts';
    protected $fillable =  ['name',
                            'gcashnumber',
                            'netincome',
                            'payout',
                            'date'
                        ];
}
