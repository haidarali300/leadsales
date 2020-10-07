<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class LeadCreate extends FormRequest
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
        $rules = [
            'name' => 'required|max:127',
            'phone' => 'required|max:64',
            'country' => 'required|max:127',
            'address' => 'required|max:127',
            'email' => 'required|max:127',
            'category_id' => 'required|exists:categories,id',
            'origin_id' => 'required|exists:origins,id',
            'description' => 'required',
            'image' => 'required|image'
        ];

        return (Auth::user()->hasRole('admin')) 
            ? array_merge($rules, [
                'salesman_id' => 'required|exists:users,id',
                'supervisor_id' => 'required|exists:users,id'
            ])
            : $rules;
    }
}
