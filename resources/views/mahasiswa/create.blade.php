@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Data
                    <a href="{{ route('mhs.index') }}" class="btn btn-md btn-primary float-right">Data Mahasiswa</a>
                </div>
                <div class="card-body">
                    <form action= "" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="form-group row">
                            <label for="" class="col-sm-4 text-sm-right">Nama Lengkap</label>
                            <div class="col-sm-6">
                                <input type="text" name="" class="form-control">
                            </div>
					    </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-4 text-sm-right">Tempat Lahir</label>
                            <div class="col-sm-6">
                                <input type="text" name="" class="form-control">
                            </div>
					    </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-4 text-sm-right">Tanggal Lahir</label>
                            <div class="col-sm-6">
                                <input type="date" name="" class="form-control">
                            </div>
					    </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-4 text-sm-right">No. Telepon</label>
                            <div class="col-sm-6">
                                <input type="number" name="" class="form-control">
                            </div>
					    </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-4 text-sm-right">Jenis Kelamin</label>
                            <div class="col-sm-6">
                                <select name="" id="" class="form-control">
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
					    </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-4 text-sm-right">Photo</label>
                            <div class="col-sm-6">
                                <input type="file" name="" class="form-control">
                            </div>
					    </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-4 text-sm-right"></label>
                            <div class="col-sm-6 float-right">
                                <button type="submit" class="btn btn-primary" name="simpan">SIMPAN</button>
                                <a href="{{ route('mhs.index') }}" class="btn btn-danger " name="batal">Batal</a>
                            </div>
					    </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection