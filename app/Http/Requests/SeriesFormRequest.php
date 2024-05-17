<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SeriesFormRequest extends FormRequest
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
            'nome' => ['required', 'min:3'],
            'cover' => ['required','file', 'mimes:jpg,bmp,png'],
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O campo nome é obrigatório',
            'nome.min' => 'O campo nome precisa de pelo menos :min caracteres',
            'cover.required' => 'O campo imagem precisa ser preenchido',
            'cover.file' => 'O campo imagem precisa ser um arquivo',
            'cover.mimes' => 'O campo imagem precisa ser um arquivo do tipo .jpeg, .jpg ou .png'
        ];
    } 
}
