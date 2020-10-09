<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
     protected $fillable = [
        'name','email','phone','profile','address','degree','activity','course'
    ];
     public function courses(){
        return $this->belongsTo(Course::class);
    }
}
