@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Data
                    <!-- <a href="{{ route('makul') }}" class="btn btn-md btn-primary float-right">Data Matakuliah</a> -->
                </div>

                <div class="card-body">
                    <form action="{{ route('makul.update', $makul->id) }}" method="post">
                    @csrf

                        <div class="form-group">
                            <div class="form-row">
                                <div class="col">
                                    <label for="">Kode Makul</label>
                                    <input type="text" name="kd_makul" class="form-control" 
                                    placeholder="Tambahkan Kode Matakuliah" 
                                    value="{{ is_null ('$makul') ? '' : $makul->kd_makul }}">
                                </div>

                                <div class="col">
                                    <label for="">Nama Makul</label>
                                    <input type="text" name="nama_makul" class="form-control" placeholder="Tambahkan Nama Matakuliah"
                                    value="{{ is_null ('$makul') ? '' : $makul->nama_makul }}">
                                </div>

                                <div class="col">
                                    <label for="">SKS</label>
                                    <input type="number" name="sks" class="form-control" placeholder="Tambahkan SKS"
                                    value="{{ is_null ('$makul') ? '' : $makul->sks }}">
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
