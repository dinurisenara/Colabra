<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookingsRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'user_id' => ['required'],
            'space_id' => ['required'],
            'start_time' => ['required', 'date'],
            'end_time' => ['required', 'date'],
            'price' => ['required', 'numeric'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
