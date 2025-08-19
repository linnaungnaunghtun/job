<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorerecommedRequest extends FormRequest
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
            'problem' => 'required|string',
            'environment' => 'required|string',
            'work' => 'required|string',
            'subject' => 'required|string',
            'motivate' => 'required|string',
            'stress' => 'required|string',
            'skill' => 'required|string',
            'success' => 'required|string',
            'personality' => 'required|string',
            'creativity' => 'required|string',
        ];
    }
}
