<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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
            'title'=> ['required'],
            'type'=> ['required'],
            'series'=> ['required'],
            'sale_date' => ['required'],
            'price'=> ['required'],
            'description'=> ['required', 'min:10'],
        ];

    }
     /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => 'Il titolo non può essere vuoto',
            'type.required' => 'La Tipologia non può essere vuota',
            'series.required' => 'Il campo Serie non può essere vuoto',
            'sale_date.required' => 'La data di uscita non può essere vuota',
            'price.required' => 'Il Prezzo non può essere vuoto',
            'description.required' => 'La descrizioni non può essere vuota e deve contenere almeno 10 caratteri',
            'description.min' => 'La descrizioni deve contenere almeno 10 caratteri'
           
        ];
    }
}
