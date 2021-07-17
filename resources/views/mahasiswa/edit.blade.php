@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Data
                    
                </div>
                <div class="card-body">
                    <form action= "{{ route('mhs.update', $mahasiswa->id) }}" method="post">
                        @csrf
                        <div class="form-group row">
                            <label for="user_id" class="col-sm-4 text-sm-right">Nama Mahasiswa</label>
                            <div class="col-sm-6">
                                <select name="user_id" id="user_id" class="form-control">
                                    <option value="" disabled selected>--Pilih User--</option>
                                    @foreach ($user as $u)
                                        <option value="{{ $u->id }}" {{ $mahasiswa->user_id == $u->id ? 'selected' : '' }} >{{$u->name}}</option>
                                    @endforeach
                                </select>
                            </div>
					    </div>

                        <div class="form-group row">
                            <label for="npm" class="col-sm-4 text-sm-right">NPM</label>
                            <div class="col-sm-6">
                                <input type="numeric" name="npm" class="form-control" 
                                placeholder="Masukkan NPM" maxlength="8" value="{{ is_null ('$mahasiswa') ? '' : $mahasiswa->npm }}">
                            </div>
					    </div>

                        <div class="form-group row">
                            <label for="tempat_lahir" class="col-sm-4 text-sm-right">Tempat Lahir</label>
                            <div class="col-sm-6">
                                <input type="text" name="tempat_lahir" class="form-control" 
                                placeholder="Masukkan Tempat Lahir" value="{{ is_null ('$mahasiswa') ? '' : $mahasiswa->tempat_lahir }}">
                            </div>
					    </div>

                        <div class="form-group row">
                            <label for="tgl_lahir" class="col-sm-4 text-sm-right">Tanggal Lahir</label>
                            <div class="col-sm-6">
                                <input type="date" name="tgl_lahir" class="form-control" 
                                value="{{ is_null ('$mahasiswa') ? '' : $mahasiswa->tgl_lahir }}">
                            </div>
					    </div>

                        <div class="form-group row">
                            <label for="gender" class="col-sm-4 text-sm-right">Jenis Kelamin</label>
                            <div class="col-sm-6">
                                <select name="gender" id="gender" class="form-control">
                                    <option value="" disabled selected>--Pilih Jenis Kelamin--</option>
                                    <option value="L" {{ $mahasiswa->gender == 'L' ? 'selected' : '' }} >Laki-Laki</option>
                                    <option value="P" {{ $mahasiswa->gender == 'P' ? 'selected' : '' }} >Perempuan</option>
                                </select>
                            </div>
					    </div>

                        <div class="form-group row">
                            <label for="telepon" class="col-sm-4 text-sm-right">No. Telepon</label>
                            <div class="col-sm-6">
                                <input type="numeric" name="telepon" class="form-control" 
                                placeholder="Masukkan No. telepon" maxlength="13" value="{{ is_null ('$mahasiswa') ? '' : $mahasiswa->telepon }}">
                            </div>
					    </div>

                        <div class="form-group row">
                            <label for="alamat" class="col-sm-4 text-sm-right">Alamat</label>
                            <div class="col-sm-6">
                                <textarea style="resize : none" name="alamat" id="alamat" cols="2" rows="3" class="form-control" 
                                >{{ is_null ('$mahasiswa') ? '' : $mahasiswa->alamat }}</textarea>
                            </div>
					    </div>
                        
                        <div class="form-group row">
                            <label for="" class="col-sm-4 text-sm-right"></label>
                            <div class="col-sm-6 float-right">
                                <button type="submit" class="btn btn-primary">SIMPAN</button>
                                <a href="{{ route('mhs') }}" class="btn btn-danger " name="batal">Batal</a>
                            </div>
					    </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection