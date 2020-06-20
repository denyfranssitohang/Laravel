<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes;

    // property fillable
    protected $fillable = ['nama', 'nrp', 'email', 'jurusan']; // mass asignment(laravel)
}
