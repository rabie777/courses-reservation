<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validateRequest extends FormRequest
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
           'email'=> 'required|max:100|unique:courses,email',
            'phone'=>'required|unique:courses,phone|numeric',
            'category'=>'required|max:255',
            'course'=>'required|max:255', 
        ];
    }

    public function messages()
    {
return[
    
        'firstname.required'=>__('messages.firstname required'),
         'lastname.required'=>__('messages.lastname required'),
         'email.required'=>trans('messages.email required'),
         'phone.required'=>'الهاتف مطلوب'
   
];
    }


}
