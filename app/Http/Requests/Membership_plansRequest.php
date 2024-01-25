<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Membership_plansRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'plan_name' => ['required'],
            'space_type' => ['required'],
            'customer_type' => ['required'],
            'time_period' => ['required'],
            'description' => ['required'],
            'price' => ['required', 'numeric'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
