{{-- mengecek isi array  --}}
{{-- @dd($karyawans) --}}

  {{-- Vincent
      BE-J --}}

@extends('layouts.main')

@section('nameheader')
  List Karyawan
@endsection

@section('container')

    <table class="table table-bordered">
        <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nama Karyawan</th>
              <th scope="col">Umur</th>
              <th scope="col">Alamat</th>
              <th scope="col">No.Telp</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @php
                $nomor = 1;
            @endphp
            @foreach ($karyawans as $karyawan)
            <tr>
              <th scope="row">{{$nomor++}}</th>
              <td>{{$karyawan->nama}}</td>
              <td>{{$karyawan->umur}}</td>
              <td>{{$karyawan->alamat}}</td>
              <td>{{$karyawan->notelp}}</td>
              <td>
                <div style="display: flex; gap: 5px">
                  <a href="{{route('updateKaryawan',['id'=>$karyawan->id])}}">
                    <button type="button" class="btn btn-success"><i class="uil uil-edit"></i></button>
                  </a>
                  <form action="{{route('deleteKaryawan',['id'=>$karyawan->id])}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger"><i class="uil uil-trash-alt"></i></button>
                  </form>
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
      </table>

    
@endsection
