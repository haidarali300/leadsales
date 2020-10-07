<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QualityCriteriaCreate extends FormRequest
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
            'name' => 'required'
        ];
    }
    
    public function withValidator($validator) {
        $validator->after(function ($validator) {
            if (!$this->request->get('name')) {
                $validator->errors()->add('quality', 'Quality criteria creation has fields missing!');
            }
        });
    }
}
