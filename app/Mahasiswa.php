<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    //deklarasi table database
    protected $table = 'mahasiswa';
    // mass assingment
    protected $fillable = ['nama_belakang', 'nama_depan', 'nrp', 'jenis_kelamin', 'jurusan', 'alamat', 'avatar', 'user_id'];

    // function avatar default
    public function getAvatar()
    {
    	if(!$this->avatar){
    		# code...
    		return asset('images/default.jpg');
    	}

    	return asset('images/'.$this->avatar);
    }

    // deklarasi relations model mahasiswa
    public function matkul()
    {
        return $this->belongsToMany(Matkul::class)->withPivot(['nilai'])->withTimeStamps();
    }
}
