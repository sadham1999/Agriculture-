<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $fillable = [
        'customer_name', 
        'image', 
        'auth_id',
        'flag',
        'comments',
    ];
}
