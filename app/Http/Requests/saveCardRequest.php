<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class saveCardRequest extends FormRequest
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
            'name' => 'required|string',
            'last_name' => 'required|string',
            'national_code' => 'required|string',
            'phone' => 'required|regex:^(9|09)\d{9}$',
            'location' => 'nullable|string',
            'sex' => "in:male,female",
            'committee' => 'nullable|string',
            'image' => 'file|size:1024|mimes:jpeg,png,jpg,bmp',
        ];
    }
}
