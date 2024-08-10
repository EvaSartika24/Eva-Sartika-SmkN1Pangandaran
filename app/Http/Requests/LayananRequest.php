<?php

namespace App\Http\Requests;

use App\Http\Requests\Requests;
use Illuminate\Foundation\Http\FormRequest;

class LayananRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return backpack_auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          //  'nama' => 'required|string|max:225',
        ];
    }
    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            //
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            // 'nama.required' => 'Nama layanan wajib diisi.',
            // 'nama.string' => 'Nama layanan harus berupa teks.',
            // 'nama.max' => 'Nama layanan tidak boleh lebih dari 255 karakter.',
];
}
}