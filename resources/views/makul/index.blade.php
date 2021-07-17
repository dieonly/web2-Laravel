@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Mata kuliah
                    <a href="{{ route('makul.create') }}" class="btn btn-md btn-primary float-right">Tambah Data</a>
                </div>
                <div class="card-body" >
                    <div class="table-responsiv">
                        <table class="table table-bordered">
                            <tr>
                                <th>NO.</th>
                                <th>Kode Mata Kuliah</th>
                                <th>Nama Mata Kuliah</th>
                                <th>SKS</th>
                                <th>AKSI</th>
                            </tr>

                            @php
                                $no = 1;
                            @endphp
                            @foreach ($makul as $mk)
                                <tr>
                                    <td>{{ $no++   }}</td>
                                    <td>{{ $mk->kd_makul }}</td>
                                    <td>{{ $mk->nama_makul }}</td>
                                    <td>{{ $mk->sks }}</td>
                                    <td>
                                        <a href="{{ route('makul.edit', $mk->id ) }}" class="btn btn-sm btn-warning">EDIT</a>
                                        <a href="{{ route('makul.hapus', $mk->id ) }}" class="btn btn-sm btn-danger">HAPUS</a>
                                    </td>
                                </tr>
                            @endforeach

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
