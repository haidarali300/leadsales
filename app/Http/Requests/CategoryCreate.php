<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;

class CategoryCreate extends FormRequest
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
            'name' => 'required',
            'description' => 'required'
        ];
    }

    public function withValidator($validator) {
        $validator->after(function ($validator) {
            if (!$this->request->get('name') || !$this->request->get('description')) {
                $validator->errors()->add('category', 'Category creation has fields missing!');
            }
        });
    }
}
