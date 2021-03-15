<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable=['firstname','lastname','email','password','phone','age','gender','image'];
    protected $hidden = ['created_at','phone','password'];
    public $timestamps=false;
}
