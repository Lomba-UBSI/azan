<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormAmilRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules()
    {
        return [
            'nik' => 'required|unique:user_identities,nik',
            'name' => 'required',
            'whatsapp' => 'required',
            'identity' => 'required|image|max:10240'
        ];
    }

    public function messages()
    {
        return [
            'nik.required' => 'Judul wajib di isi.',
            'nik.unique' => 'Nik sudah digunakan',
            'whatsapp.required' => 'Whatsapp wajib di isi.',
            'identity.required' => 'Gambar identitas wajib diunggah.',
            'identity.image' => 'Berkas harus berupa gambar (format JPG, PNG, atau GIF).',
            'identity.max' => 'Ukuran gambar tidak boleh melebihi 10 MB.',
        ];
    }
}
