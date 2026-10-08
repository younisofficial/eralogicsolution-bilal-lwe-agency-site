<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreContactRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:150'],
            'phone' => ['nullable', 'string', 'max:30'],
            'service' => ['nullable', 'string', Rule::in(array_column(config('agency.services'), 'name'))],
            'message' => ['required', 'string', 'min:10', 'max:3000'],
            // Hidden field. Real visitors leave it empty; spam bots fill it in.
            'website' => ['nullable', 'max:0'],
        ];
    }

    public function messages(): array
    {
        return [
            'message.min' => 'Please describe your project in at least 10 characters.',
            'website.max' => 'Your message could not be sent.',
        ];
    }
}
