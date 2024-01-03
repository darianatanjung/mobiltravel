<?php

namespace App\Http\Requests;

use App\Models\Pelanggan;
use Illuminate\Foundation\Http\FormRequest;

class PelangganCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user() != null;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'id_gol' => 'required',
            'no_pelanggan' => 'required',
            'nama' => 'required|max:50',
            'alamat' => 'required',
            'no_hp' => 'required|max:16',
            'tgl' => 'required|max:50',
            'tujuan' => 'required|max:50',
            'jumlah' => 'required|max:11',
            'harga' => 'required|max:11',
            'kursi' => 'required|max:10',
            'id_user' => 'required',
            'status' => 'required'
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'no_pelanggan' => Pelanggan::generateNoPelanggan(),
            'status' => 'Aktif',
        ]);
    }
}