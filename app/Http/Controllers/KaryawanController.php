<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\KaryawanRequest;

class KaryawanController extends Controller
{
    public function getTambahKaryawan(){
        return view('tambahKaryawan');
    }

    public function createKaryawan(KaryawanRequest $request){
        // $request->validate([
        //     'judul' => 'required|string|min:8',

        // ]);

        // $judul = $request->judul;

        Karyawan::create([
            'nama' => $request-> nama,
            'umur' => $request -> umur,
            'alamat' => $request -> alamat,
            'notelp' => $request -> notelp
        ]);

        return redirect(route('viewKaryawan'));
    }

    public function index()
    {
        return view('viewKaryawan', [
            "title" => "PT.Meksiko | List Karyawan",
            "karyawans" => Karyawan::all()
        ]);
    }

    public function getUpdateKaryawan($id){
        $karyawan = Karyawan::findOrFail($id);
        
        return view('updateKaryawan',compact('karyawan'));
    }

    public function updateKaryawan(KaryawanRequest $request, $id){
        $karyawan = Karyawan::findOrFail($id);

        $karyawan->update([
            'nama' => $request-> nama,
            'umur' => $request -> umur,
            'alamat' => $request -> alamat,
            'notelp' => $request -> notelp
        ]);

        return redirect(route('viewKaryawan'));
    }

    public function deleteKaryawan($id){
        $karyawan = Karyawan::findOrFail($id);

        $karyawan->delete();

        return redirect(route('viewKaryawan'));
    }
}
