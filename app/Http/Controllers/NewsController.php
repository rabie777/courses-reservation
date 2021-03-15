<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class NewsController extends Controller
{

    
    public function store(Request $request)
   
    {
        $rules=[
            'firstname'=>'required|max:255',
            'lastname'=>'required|max:255',
           'email'=> 'required|max:100|unique:courses,email',
            'phone'=>'required|unique:courses,phone|numeric',
            'category'=>'required|max:255',
            'course'=>'required|max:255', 
        ];
        $messages=[
            'firstname.required'=>__('messages.firstname required'),
            'lastname.required'=>__('messages.lastname required'),
            'email.required'=>trans('messages.email required'),
            'phone.required'=>'الهاتف مطلوب'
        ];

         $validator=Validator::make($request->all(),$rules,$messages);
         if($validator->fails())
         {
             return redirect()->back()->withErrors($validator)->withInput($request->all());
            
         }
         else
       { Course::create([
            'firstname'=> $request -> firstname,
            'lastname'=>$request -> lastname,
            'email'=>$request -> email,
            'phone'=>$request -> phone,
            'category'=>$request -> category,
            'course'=>$request -> course
        ]);
        return redirect()->back()->with(['success'=>'تمت الاضافة بنجاح']);
    }
    }
}
