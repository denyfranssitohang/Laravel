<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    // deklarasi table matkul
	protected $table = 'matkul';
	protected $filable = ['kode','nama', 'semester'];

	// deklarasi relations matkul dan mahasiswa pada model matkul (many to many)
	public function mahasiswa()
	{
		return $this->belongsToMany(Mahasiswa::class)->withPivot(['nilai']);
	}

	// deklarasi relasi tabel matkul dan dosen pada model Matkul (many to one / 1 matkul dimiliki oleh dosen)
	public function dosen()
	{
		return $this->belongsTo(Dosen::class);
	}

}
