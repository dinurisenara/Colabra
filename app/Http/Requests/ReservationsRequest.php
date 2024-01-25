<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservationsRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'user_id' => ['required'],
            'space_types_id' => ['required'],
            'start_time' => ['required', 'date'],
            'end_time' => ['required', 'date'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
