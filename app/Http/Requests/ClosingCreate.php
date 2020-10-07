<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClosingCreate extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'invoice_number' => 'required|max:127',
            'guide_number' => 'required|max:127',
            'invoice_image' => 'required|image',
            'guide_image' => 'required|image',
            'income' => 'required|numeric'
        ];
    }
}
