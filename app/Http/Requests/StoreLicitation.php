<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLicitation extends FormRequest
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
            'licitation_id' => 'required',
            'description' => 'required',
            'scope' => 'required',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'licitation_id.required' => __('required', ['field' => __('licitation_id')]),
            'description.required' => __('required', ['field' => __('description')]),
            'scope.required' => __('required', ['field' => __('scope')]),
        ];
    }
}
