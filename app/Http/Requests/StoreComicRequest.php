<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
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
            // Validazione dei dati
            //vengono presi dall attributo name del form
            'title' => 'required|unique:comics|max:100',
            'description' => 'required',
            'thumb' => 'required',
            'price' => 'required|string|max:10',
            'series' => 'required|string|max:255',
            'sale_date' => 'required',
            'artists' => 'required|string|max:255',
            'writers' => 'required|string|max:255',
            'type' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il titolo è obbligatorio.',
            'title.unique' => 'Il titolo deve essere unico.',
            'title.max' => 'Il titolo non può superare i 255 caratteri.',
            'description.required' => 'La descrizione è obbligatoria.',
            'thumb.required' => 'L\'immagine è obbligatoria.',
            'thumb.url' => 'L\'URL dell\'immagine non è valido.',
            'price.required' => 'Il prezzo è obbligatorio.',
            'price.numeric' => 'Il prezzo deve essere un numero.',
            'price.min' => 'Il prezzo deve essere almeno 0.',
            'series.required' => 'La serie è obbligatoria.',
            'series.max' => 'La serie non può superare i 255 caratteri.',
            'sale_date.required' => 'La data di vendita è obbligatoria.',
            'sale_date.date' => 'La data di vendita non è valida.',
            'artists.required' => 'Gli artisti sono obbligatori.',
            'artists.max' => 'Gli artisti non possono superare i 255 caratteri.',
            'writers.required' => 'Gli scrittori sono obbligatori.',
            'writers.max' => 'Gli scrittori non possono superare i 255 caratteri.',
            'type.required' => 'Il tipo è obbligatorio.',
            'type.max' => 'Il tipo non può superare i 255 caratteri.',
        ];
    }
}
