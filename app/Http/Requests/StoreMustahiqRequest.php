<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMustahiqRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'file_mustahiq' => 'required|max:10240'
        ];
    }

    public function messages()
    {
        return [
            'file_mustahiq.required' => 'File wajib diunggah.',
            'file_mustahiq.max' => 'Ukuran gambar tidak boleh melebihi 10 MB.',
        ];
    }
}
