<?php

namespace App\Exports;

use App\Mahasiswa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping; // import mapping
use Maatwebsite\Excel\Concerns\WithHeadings; // import headings

class MahasiswaExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Mahasiswa::all();
    }

    /**
    * @var Invoice $invoice
    */
    // function mapping (memodifikasi kolom yang akan di tampilkan pada file export excel)
    public function map($mahasiswa): array
    {
        return [
        	$mahasiswa->nama_lengkap(),
        	$mahasiswa->nrp,
        	$mahasiswa->jenis_kelamin, 
        	$mahasiswa->jurusan,
        	$mahasiswa->rataRata(), 
        	$mahasiswa->alamat,
        ];
    }

    // fucntion headings
    public function headings(): array
    {
        return [
            'Nama Lengkap',
            'NRP',
            'Jenis Kelamin',
            'Jurusan',
            'Rata-Rata Nilai',
            'Alamat'
        ];
    }
}
