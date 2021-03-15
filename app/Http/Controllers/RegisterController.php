<?php

namespace App\Http\Controllers;
use App\traits\imagetrait;
use App\models\Student;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\regestrationRequest;
class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

      use imagetrait;

    public function index()
    {
        return view('courses.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(regestrationRequest $request)
    {

        $file_name= $this -> saveImage($request-> image ,'images');
        Student::create([
            'firstname'=> $request -> firstname,
            'lastname'=>$request -> lastname,
            'email'=>$request -> email,
            'password'=>$request -> password,
            'phone'=>$request -> phone,
            'age'=>$request -> age,
            'gender'=>$request -> check,
            'image'=>$file_name
    
        ]);
         return redirect()->back()->with(['success'=>'تم الاضافة بنجاح']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
         $students= Student::select('id','firstname','lastname','email','password','phone','age','gender','image')->get();
         return view('students.show',compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }



  
}
