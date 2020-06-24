<?php

namespace App\Http\Controllers;

use App\User;
use App\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    // function mahasiswa
    public function index(Request $request)
    {
        // mencari nama dari kolom nama_depan
        if($request->has('cari'))
        {
            $data_mahasiswa = Mahasiswa::where('nama_depan', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('nama_belakang', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('nrp', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('nama_belakang', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('jurusan', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('jenis_kelamin', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('alamat', 'LIKE', '%'.$request->cari.'%')

            ->get();
        } else {
            $data_mahasiswa = Mahasiswa::all();
        }
        return view('mahasiswa.index', ['data_mahasiswa' => $data_mahasiswa]);
    }

    // function create
    public function create(Request $request)
    {        
        // validasi form tambah data
        // $request->validate([
        // $this->validate($request,[
        //     'nama_depan' => 'required|min:2',
        //     'nama_belakang' => 'required',
        //     'email' => 'required|email|unique:users',
        //     'nrp' => 'required',
        //     'jenis_kelamin' => 'required',
        //     'jurusan' => 'required',
        //     'alamat' => 'required',
        //     'avatar' => 'mimes:jpg,png,jpeg',
        //     // 'nrp' => 'required|size:9',          
        // ]); 
        
        // input ke table user
        $user = new User;
        $user->role = 'mahasiswa';
        $user->name = $request->nama_depan;
        $user->email = $request->email;
        $user->password = bcrypt('admin');
        $user->remember_token = str_random(60);
        $user->save();

        // insert ke table mahasiswa
        $request->request->add(['user_id' => $user->id]);
        $mahasiswa = Mahasiswa::create($request->all());
        // upload avatar (file)
        if($request->hasFile('avatar')){
            $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
            $mahasiswa->avatar = $request->file('avatar')->getClientOriginalName();
            $mahasiswa->save();
        };
        // tampilkan ke list mahasiswa
        return redirect('/mahasiswa')->with('sukses', 'Data berhasil ditambahkan');
    }

    // function edit
    public function edit($id)
    {
        // 
        $mahasiswa = Mahasiswa::find($id);
        // 
        return view('mahasiswa/edit',['mahasiswa' => $mahasiswa]);
    }

    // function update
    public function update(Request $request,$id)
    {
        // dd($request->all());
        // menngkap id mahasiswa
        $mahasiswa = Mahasiswa::find($id);
        // update data
        $mahasiswa->update($request->all());
        // update avatar (file)
        if($request->hasFile('avatar')){
            $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
            $mahasiswa->avatar = $request->file('avatar')->getClientOriginalName();
            $mahasiswa->save();
        };
        // menampilkan kembali list dan alert
        return redirect('/mahasiswa')->with('sukses', 'Data berhasil diupdate');
    }

    // function hapus
    public function delete($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete($mahasiswa);
        return redirect('/mahasiswa')->with('sukses','Data berhasil dihapus');
    }

    // function profile
    public function profile($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $matakuliah = \App\Matkul::all();
        // dd($matkul);

        // menyiapkan data untuk chart
        $categories = [];
        $nilai = [];
        foreach ($matakuliah as $mk) {
            // kondisi dimana hanya mahasiswa yang sudah memiliki nilai dari mata kuliah yang akan ditampilkan pada grafik
            if ($mahasiswa->matkul()->wherePivot('matkul_id',$mk->id)->first()) {
                $categories[] = $mk->nama;
                $nilai[] = $mahasiswa->matkul()->wherePivot('matkul_id',$mk->id)->first()->pivot->nilai;
            }
        }

        // dd($nilai);
        // dd(json_encode($categories));

        // tampilkan di profile
        return view('mahasiswa/profile',['mahasiswa' => $mahasiswa, 'matakuliah' => $matakuliah, 'categories' => $categories, 'nilai' => $nilai]);
    }

    // function tambah nilai ke database
    public function addnilai(Request $request,$idmahasiswa)
    {
        // 
        $mahasiswa = Mahasiswa::find($idmahasiswa);
        // validasi matkul pada pivot table
        if($mahasiswa->matkul()->where('matkul_id',$request->matkul)->exists()){
            return redirect('mahasiswa/'.$idmahasiswa.'/profile')->with('error','Data nilai sudah ada');
        }

        // masukkan nilai ke database
        $mahasiswa->matkul()->attach($request->matkul,['nilai' => $request->nilai]);
        return redirect('mahasiswa/'.$idmahasiswa.'/profile')->with('sukses','Nilai berhasil dimasukkan');
    }

    // function delete nilai
    public function deletenilai($idmahasiswa,$idmatkul)
    {
        $mahasiswa = \App\Mahasiswa::find($idmahasiswa);
        // hapus data dari pivot table
        $mahasiswa->matkul()->detach($idmatkul);
        // kembali ke route sebelumnya
        return redirect()->back()->with('sukses','Nilai berhasil dihapus');
    }
}


