<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    protected $fillable = [
        'name','email','phone','address','profile','cv'
    ];
}
