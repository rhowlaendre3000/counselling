<?php

namespace App\Http\Controllers;
use App\Course;
use App\Programme;
use App\User;
use Auth;
use Validator;
use Illuminate\Http\Request;

class courseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       
       

        return view('');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    
    {
        //
        $programme=Programme::all();
        $course=Course::all();
        $user=Auth::user();
        return view('users.course')->with(compact('user'))->with(compact('programme'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $status="created";

        $rules=[
            "programme"=>"string",
            "coursename"=>"string",
            "coursecode"=>"string",
            "lecturer" =>"string"

        ];

        $validator=Validator::make($request->all(), $rules);
        

        if($validator->fails()){
            return redirect('course/create')->withInput()->withErrors($validator);
        }else{

            $course=new Course;

            $course->programme_id=Programme::where('programmename','=',$request->input('programme'))->first()->id;
            $course->coursetitle=$request->input('coursename');
            $course->coursecode=$request->input('coursecode');
            $course->lecturer=$request->input('lecturer');

            if($course->save()){
                session()->flash('status', 'course '. $status.'d'. ' succesful');
                return redirect(route('course.create'));
            }else{
                session()->flash('status', 'unable to '.$status.'course succesfully');
                return redirect(route('course'));
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
