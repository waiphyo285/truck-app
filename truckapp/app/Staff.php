<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $fillable=['name','phone','age','job','address','salary','degree'];
}
