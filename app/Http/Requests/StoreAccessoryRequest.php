<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAccessoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'instrument_id' => 'required|exists:instruments,id',
            'type' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
        ];
    }
}
