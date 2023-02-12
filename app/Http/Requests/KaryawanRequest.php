<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KaryawanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nama'=>'required|string|min:5|max:20',
            'umur'=>'required|numeric|min:20',
            'alamat'=>'required|string|min:10|max:40',
            'notelp'=>'required|string|min:9|max:12|starts_with:08'

        ];

        $messages = [
            // Validasi Nama
            'nama.required' => 'Nama harus diisi',
            'nama.min' => 'Nama minimal 5 huruf',
            'nama.max' => 'Nama maksimal 20 huruf',

            // Validasi Umur
            'umur.required' => 'Umur harus diisi',
            'umur.min' => 'Umur Harus Lebih dari 20',
            
            // Validasi Alamat
            'alamat.required' => 'Alamat harus diisi',
            'alamat.min' => 'Alamat minimal 10 huruf',
            'alamat.max' => 'Alamat maksimal 40 huruf',

            // Validasi Notelp
            'notelp.required' => 'No.Telp harus diisi',
            'notelp.min' => 'Notelp minimal 9 angka',
            'notelp.max' => 'Notelp maksimal 12 angka',
            'notelp.start_with' => 'Notelp harus diawali dengan 08'

        ];
    }
}
