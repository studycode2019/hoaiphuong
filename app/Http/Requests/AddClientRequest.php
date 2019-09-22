<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AddClientRequest extends Request
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
            'sdt' => 'required|regex:/(0)[0-9]{9}/'
        ];
    }
    
    public function messages()
    {
        return [
            'sdt.required' => 'Hãy nhập vào số điện thoại',
            'sdt.regex' => 'Số điện thoại không đúng'
        ];
    }
}
