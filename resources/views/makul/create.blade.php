@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Data
                    <!-- <a href="{{ route('makul') }}" class="btn btn-md btn-primary float-right">Data Matakuliah</a> -->
                </div>

                <div class="card-body">
                    <form action="{{ route('makul.simpan') }}" method="post">
                    @csrf
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col">
                                    <label for="">Kode Makul</label>
                                    <input type="text" name="kd_makul" class="form-control" placeholder="Tambahkan Kode Matakuliah">
                                </div>

                                <div class="col">
                                    <label for="">Nama Makul</label>
                                    <input type="text" name="nama_makul" class="form-control" placeholder="Tambahkan Nama Matakuliah">
                                </div>

                                <div class="col">
                                    <label for="">SKS</label>
                                    <input type="number" name="sks" class="form-control" placeholder="Tambahkan SKS">
                                </div>
                            </div>
                        </div>
                        <div class="form-group float-right" >
                            <div class="col">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{ route('makul') }}" class="btn btn-danger">Batal</a>
                            </div>
                        </div>
                    </form>
                </div>    
            </div>
        </div>
    </div>
</div>
@endsection
