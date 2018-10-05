<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable =  ['productcode',
                            'productname',
                            'productdescription',
                            'productdetails',
                            'value',
                            'serving',
                            'photo'
                        ];
}
