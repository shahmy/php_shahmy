<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSalesRepRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'full_name' => ['required', 'string','max:100'],
            'email' => ['required','email','max:50'],
            'tel' => ['required', 'max:10'],
            'joined_date' => ['required', 'date'],
            'current_route' => ['required'],
            'comments' => ['nullable', 'string'],
        ];
    }
}
