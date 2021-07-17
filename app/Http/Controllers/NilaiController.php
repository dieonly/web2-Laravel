<?php

namespace App\Http\Controllers;

use App\mahasiswa;
use App\Makul;
use App\Nilai;
use Illuminate\Http\Request;
use alert;

class NilaiController extends Controller
{
    public function index()
    {
        
        $nilai = Nilai::with(['mahasiswa', 'makul'])->get();
        return view('nilai.index', compact('nilai'));
    }

    public function create()
    {
        $mahasiswa = mahasiswa::all();
        $makul     = Makul::all();
        return view('nilai.create', compact('mahasiswa', 'makul'));
    }

    public function store(Request $request)
    {
        Nilai::create($request->all());
        alert()->success('Success','Data Berhasil Disimpan');
        return redirect()->route('nilai'); 
    }

    public function edit($id)
    {
        $mahasiswa = mahasiswa::all();
        $makul = Makul::all();
        $nilai = Nilai::find($id);
        return view('nilai.edit', compact('nilai','mahasiswa', 'makul')); 
    }

    public function update(Request $request, $id)
    {
        $nilai = Nilai::find($id);
        $nilai->update($request->all());
        toast('Berhasil Update Data','success');
        return redirect()->route('nilai');
    }

    public function destroy($id)
    {
        $nilai = Nilai::find($id);
        $nilai->delete($id);
        toast('Berhasil Hapus Data','success');
        return redirect()->route('nilai');
    }

}
