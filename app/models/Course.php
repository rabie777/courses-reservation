<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable=['id','firstname','lastname','email','phone','category','course','photo'];
    protected $hidden = ['created_at','phone'];
    public $timestamps=false;
}
