<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SpacesRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'type_id' => ['required'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
