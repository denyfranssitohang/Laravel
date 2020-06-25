<?php 
    // konfigurasi helper global yang telah dibuat :
    // pertama : deklarasi files di didalam file composer.json dibagian auto load, yaitu :
		// "files": [
	 //            "app/Helpers/Global.php"
	 //        ]
    // kedua : dump autoload pada terminal ("composer dumpautoload")
 
use App\Mahasiswa; // import model mahasiswa
use App\Dosen; // import model dosen

// helper global (peringkat 5 tertinggi)
function peringkat5Tertinggi()
{
	// ambil semua data mahasiswa
	$mahasiswa = Mahasiswa::all();
	// masukkan 1 property ke attribute (mapping)
	$mahasiswa->map(function($s){
		$s->rataRataNilai = $s->rataRata();
		return $s;
	});
	// helper collection (sort property) & ambil 5 peringkat
	$mahasiswa = $mahasiswa->sortByDesc('rataRataNilai')->take(5);

	return $mahasiswa;
}

// total mahasiswa
function totalMahasiswa()
{
	return Mahasiswa::count();
}

// total dosen
function totalDosen()
{
	return Dosen::count();
}

?>