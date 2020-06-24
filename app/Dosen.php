<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    // deklarasi property table
    protected $table = 'dosen';

    // fillable table dosen
    protected $fillable = ['nama','telepon','alamat'];

    // deklarasi relasi table dosen dan matkul (one to many) pada model dosen
    public function matkul()
    {
    	return $this->hasMany(Matkul::class);
    }

}
