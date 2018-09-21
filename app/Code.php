<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Code extends Model
{
    protected $table = 'activation_codes';
    protected $fillable =  ['code',
                            'type',
                            'is_used'];
    public $primaryKey = 'id';
    public $timestamps = true;
}