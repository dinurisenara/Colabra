<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Space_typesRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'type' => ['required'],
            'capacity' => ['required', 'integer'],
            'hourly_rate' => ['required', 'numeric'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
