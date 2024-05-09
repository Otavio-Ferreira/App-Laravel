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
            'seasonQty' => ['required', 'min:3'],
            'episodeQty' => ['required', 'min:3']
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O campo nome é obrigatório',
            'nome.min' => 'O campo nome precisa de pelo menos :min caracteres',
            'seasonQty.required' => 'O campo № Temporadas é obrigatório',
            'seasonQty.min' => 'O campo № Temporadas precisa de pelo menos :min caracteres',
            'episodeQty.required' => 'O campo № de Episodios é obrigatório',
            'episodeQty.min' => 'O campo № de Episodios precisa de pelo menos :min caracteres',
        ];
    } 
}
