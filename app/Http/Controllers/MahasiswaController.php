<?php

namespace App\Http\Controllers;

use App\mahasiswa;
use App\User;
use Illuminate\Http\Request;
Use Alert;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = mahasiswa::with(['user'])->get();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function create()
    {
        $user = User::all();
        return view('mahasiswa.create', compact('user'));
    }
    
    public function store(Request $request)
    {
        mahasiswa::create($request->all());
        alert()->success('Success','Data Berhasil Disimpan');
        return redirect()->route('mhs'); //cara baca setelah selesai tolong jalankan ke arah index(data mahasiswa)
    }

    public function edit($id)
    {
        $user = User::all();
        $mahasiswa = mahasiswa::find($id); //select * from nama_table where id = $id;
        return view('mahasiswa.edit', compact('mahasiswa', 'user')); //Compact itu boleh 2
    }

    public function update(Request $request, $id)
    {
        $mahasiswa = mahasiswa::find($id);
        $mahasiswa->update($request->all());
        toast('Berhasil Update Data','success');
        return redirect()->route('mhs');
    }

    public function destroy($id)
    {
        $mahasiswa = mahasiswa::find($id);
        $mahasiswa->delete();
        toast('Berhasil Hapus Data','success');
        return redirect()->route('mhs');
    }
}
