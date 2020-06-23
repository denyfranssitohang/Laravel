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
        // validasi data
        // $request->validate([
        //     'nama_depan' => 'required',
        //     'nama_belakang' => 'required',
        //     'nrp' => 'required|size:9',
        //     'jenis_kelamin' => 'required',
        //     'jurusan' => 'required',
        //     'alamat' => 'required'            
        // ]); 
        
        // input table user
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
        return view('mahasiswa/profile',['mahasiswa' => $mahasiswa]);
    }    
}
