<?php

namespace App\Http\Controllers\courses;
use App\models\Course;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\validateRequest;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
public function all()
{
    $courses=Course::select('id','firstname','lastname','email','phone','category','course','photo')->get();
    return view('courses.show',compact('courses'));

}





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
        //Course::create(['firstname'=>'mohamed','lastname'=>'rabie','email'=>'cscac@df','phone']);
        return view('courses.registerr');
    }
    public function fill()
    {
        return  Course::select('firstname','lastname')->get(); 
    }
    public function enroll()
    {
       
        return view('courses.enroll');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validateRequest $request)
    {
   

       /* $validator=Validator::make($request->all(),$rules,$messages);
         if($validator->fails())
         {
             return redirect()->back()->withErrors($validator)->withInput($request->all());
            
         }
         else
       {}*/$file_extention=$request -> photo -> getClientOriginalExtension();
          $file_name=time().".".$file_extention;
          $path='images';
          $photo=$request -> photo -> move($path,$file_name);
          
            Course::create([
            'firstname'=> $request -> firstname,
            'lastname'=>$request -> lastname,
            'email'=>$request -> email,
            'phone'=>$request -> phone,
            'category'=>$request -> category,
            'course'=>$request -> course,
            'photo'=>$file_name,
        ]);
       // return view('courses.enroll');
        return redirect()->back()->with(['success'=>'تمت الاضافة بنجاح']);
    
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit($course_id)
    {
       
       Course::findorfail($course_id);
       $data=Course::select('id','firstname','lastname','email','phone','category','course','photo')->find($course_id);
       return view('courses.edit_enroll',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(validateRequest $request,$course_id)
    {
    
     $coursefound=Course::find($course_id);
       if(!( $coursefound)){
         return redirect()->back();
       }
       $coursefound->update($request->all());
       return redirect('all');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course,$id)
    {
    

        $coursefound=Course::find($id);
        $coursefound->delete();
        return redirect()->back()->with("done");
    }


    public function save(regestrationRequest $request)
    {
       

    }
}
