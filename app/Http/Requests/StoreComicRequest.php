<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
            'price'=> ['required'],
            'description'=> ['required', 'min:10'],
            'sale_date'=> ['required',' date_format:d-m-Y']
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
            'title' => 'Il titolo non può essere vuoto',
            'type' => 'La Tipologia non può essere vuota',
            'price'=>'Il Prezzo non può essere vuoto',
             'sale_date'=> 'La data di uscita deve avere un formato valido es: gg/mm/aaa',
            'description'=> 'La descrizioni non può essere vuota e deve contenere almeno 10 caratteri'
           
        ];
    }
}
