<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'name',
    ];
    public function teachers(){
        return $this->hasMany(Teacher::class);
    }
    public function students(){
        return $this->belongsTo(Student::class);
    }
}
