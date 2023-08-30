<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ZakatToAmilRequest extends FormRequest
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
            'nominal' => 'required',
            'muzakki' => 'required',
            'email' => 'required',
            'transaction_type_id' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'nominal.required' => 'Nominal wajib di isi.',
            'muzakki.required' => 'Nama wajib di isi.',
            'email.required' => 'Email wajib diunggah.',
            'transaction_type_id.required' => 'Transaction Type wajib di isi.',
        ];
    }
}
