<?php

namespace Example\Http\Requests;

use Example\Http\Requests\Request;

class AddExampleRequest extends Request
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
            'column1' => 'required',
            'column2' => 'required|numeric|integer',
            'id' => 'numeric|integer|min:1'
        ];
    }
    public function messages()
    {
        return [
            'column1.required' => 'Please enter a name',
            'column2.required' => 'Please enter a jersey number',
            'column2.numeric' => 'Jersey number must be an integer',
            'column2.integer' => 'Jersey number must be an integer'
        ];
    }
}
