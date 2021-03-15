<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class regestrationRequest extends FormRequest
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
            'firstname'=>'required|max:255',
            'lastname'=>'required|max:255',
           'email'=> 'required|max:100|unique:students,email',
            'phone'=>'required|unique:students,phone|numeric',
            'age'=>'required|numeric|max:100|',
            //'gender'=>'required', 
            'password'=>'required|max:100'
        ];
    }

    public function messages()
    {
return[
    
        'firstname.required'=>__('messages.firstname required'),
         'lastname.required'=>__('messages.lastname required'),
         'email.required'=>trans('messages.email required'),
         'phone.required'=>trans('messages.phone required'),
         'password.required'=>__('messages.password required'),
       //  'gender.required'=>__('messages.gender required'),
         'age.required'=>__('messsages.age required')
];
    }
}
