<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    // deklarasi table matkul
	protected $table = 'matkul';
	protected $filable = ['kode','nama', 'semester'];

	// deklarasi model matkul
	public function mahasiswa()
	{
		return $this->belongsToMany(Mahasiswa::class)->withPivot(['nilai']);
	} 
}
