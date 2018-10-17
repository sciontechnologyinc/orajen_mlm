<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companyinfo extends Model
{
    protected $table = 'abouts';
    protected $fillable =  ['companybackground',
                            'mission',
                            'vision'
                        ];
}
