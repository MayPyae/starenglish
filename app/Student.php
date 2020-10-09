<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
     protected $fillable = [
        'name','email','phone','profile','address','degree','course'
    ];
     public function courses(){
        return $this->hasMany(Course::class);
    }
}
