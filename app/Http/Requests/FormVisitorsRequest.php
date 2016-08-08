<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

use Illuminate\Foundation\Http\FormRequest;
use Response;

class FormVisitorsRequest extends Request
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
            'email' => 'required|email',
			'phone' => 'required',
			'occupation' => 'required'
        ];
    }
	
	public function messages()
    {
        return [
			'name.required' => 'You must fill Name Field.',
            'email.required' => 'You must fill Email Field.',
			'phone.required' => 'You must fill Phone Field.',
			'occupation.required' => 'You must fill Occupation Field.',
        ];
    }
	
}
