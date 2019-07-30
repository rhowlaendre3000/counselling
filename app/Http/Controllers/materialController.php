<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Material;

use Validator;
use Auth;
use App\Course;
use App\Programme;

class materialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $user=Auth::user();
        $material=Material::all();
       // $course=Course::all();
        
        return view('users.material')->with(compact('material'))->with(compact('user'));
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
        $material=new Material();
        $status="created";
        $rule=[

                "title" => "string",
                "file" => "",
                "image" => "",
                "description" => "string",

        ];

        $validator=Validator::make($request->all(), $rule);
        if($validator->fails()){

            return redirect('material/create')->withInput()->withErrors($validator);

        }else{

            $filename= $request->file('file');

            if($filename){
                $file=$filename->getClientOriginalName();
                 if($filename->move('files', $file)){
                    $material->file = $file;
                 }
            }
           
            
            $imagename= $request->file('image');

            if ($imagename){
             $image=$imagename->getClientOriginalName();
             if($imagename->move('images', $image)){
               
                $material->image=$image;
     
             }
     
     
            }

            $material->programme_id = Auth::user()->programme_id;
            $material->course_id = Course::where('coursetitle','=',$request->input('course'))->first()->id;
            $material->title = $request->input('title');
            $material->description = $request->input('description');
            

            if($material->save()){
                session()->flash('status', 'course '. $status.'d'. ' succesful');
                return redirect(route('material.create'));
            }else{
                session()->flash('status', 'unable to '.$status.'material succesfully');
                return redirect(route('material'));
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

       $material= Material::find($id);
       $user=Auth::user();
    
       
        return view('users.showmat')->with(compact('user'))->with(compact('material'));
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
