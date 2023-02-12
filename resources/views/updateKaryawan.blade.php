@extends('layouts.main')

@section('nameheader')
  Update Karyawan
@endsection

@section('container')

    <div class="container col-md-6" style="padding-top: 20px">
        <div class="card shadow">
            <div class="card-header text-center"> </div>
            <div class="card-body">
                <form action="{{route('updateKaryawan',['id'=>$karyawan->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Karyawan</label>
                        <input name="nama" type="text" class="form-control" id="nama"
                            placeholder="Input Nama Karyawan" value="{{$karyawan->nama}}">
                    </div>
                    @error('nama')
                    <div class="alert alert-danger"> {{ $message }}</div>
                    @enderror
                    <div class="mb-3">
                        <label for="umur" class="form-label">Umur Karyawan</label>
                        <input name="umur" type="numeric" class="form-control" id="umur"
                            placeholder="Input Umur Karyawan" value="{{$karyawan->umur}}">

                    </div>
                    @error('umur')
                    <div class="alert alert-danger"> {{ $message }}</div>
                    @enderror
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat Karyawan</label>
                        <input name="alamat" type="text" class="form-control" id="alamat"
                            placeholder="Input Alamat Karyawan" value="{{$karyawan->alamat}}">
                    </div>
                    @error('alamat')
                    <div class="alert alert-danger"> {{ $message }}</div>
                    @enderror
                    <div class="mb-3">
                        <label for="notelp" class="form-label">No.Telp Karyawan</label>
                        <input name="notelp" type="text" class="form-control" id="notelp"
                            placeholder="Input No.Telp Karyawan" value="{{$karyawan->notelp}}">
                    </div>
                    @error('notelp')
                    <div class="alert alert-danger"> {{ $message }}</div>
                    @enderror

                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>

    @endsection
