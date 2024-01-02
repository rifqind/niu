<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateTabelRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'dinas' => 'required',
            'nomor' => 'required|min:3',
            'judul' => 'required|string',
            'subject' => 'required',
            'unit' => 'required|string',

        ];
    }
    public function messages()
    {
        return [
            'dinas.required' => 'Dinas harus diisi !',

            'nomor.required' => 'Nomor tabel harus diisi',
            'nomor.min' => 'Nomor tabel minimal berisi 3 karakter',

            'judul.required' => 'Judul tabel harus diisi',
            'judul.min' => 'Judul tabel minimal berisi 3 karakter',

            'subject.required' => 'Subjek harus diisi',

            'unit.required' => 'Satuan Unit tabel harus diisi',
            'unit.string' => 'Satuan Unit tabel minimal bertipe string',

        ];
    }
}
