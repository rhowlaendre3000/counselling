<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Programme;
use Validator;

class ProgrammeController extends Controller
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

        $programmes=Programme::all();

        return view('users.programme',compact('programmes'));
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
                "programmename"=>"required|string",
                "initials"=>"required|string"
        ];

        $validator=Validator::make($request->all(),$rules);

        if($validator->fails()){

            return redirect(route('programme.create'))
            ->withInput()
            ->withErrors($validator);

        }else{
                $programme=new Programme;

                $programme->programmename=$request->input('programmename');
                $programme->initials=$request->input('initials');

                if($programme->save()){
                    session()->flash('status', 'Programme '.$status.'d successfully');
                    return redirect(route('programme.create'));
                }else{
                    session()->flash('status', 'Unable to '.$status.' user. Please try again');
    
                    return back()->withInput();
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
