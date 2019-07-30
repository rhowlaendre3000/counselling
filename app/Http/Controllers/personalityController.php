<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Illuminate\Http\Request;
use App\Personality;

class personalityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $profile = User::find(Auth::user()->id);
        return view('personality-questions',compact('profile'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $profile = User::find(Auth::user()->id);
        $user=User::all();
        return view('personalityresults')->with(compact('profile'))->with(compact('user'));
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

        $personality=new Personality;

        
        $personality->user_id=Auth::user()->id;
        $personality->socials=$request->input('checkone');
        $personality->enterprising=$request->input('checktwo');
        $personality->conventional=$request->input('checkthree');
        $personality->realistic=$request->input('checkfour');
        $personality->investigative=$request->input('checkfive');
        $personality->artistic=$request->input('checksix');

        $maxpers=collect([$personality->socials,$personality->enterprising,
        $personality->conventional,$personality->realistic,$personality->investigative,
        $personality->artistic
        ])->max();

        if($personality->socials==$maxpers){
            $personality->assessment="Socials";
        }
        if($personality->enterprising==$maxpers){
            $personality->assessment="Enterprising";
        }
        if($personality->conventional==$maxpers){
            $personality->assessment="Conventional";
        }
        if($personality->realistic==$maxpers){
            $personality->assessment="Realistic";
        }
        if($personality->investigative==$maxpers){
            $personality->assessment="Investigative";
        }
        if($personality->artistic==$maxpers){
            $personality->assessment="Artistic";
        }

        if($personality->save()){

            return redirect(url('/schorlastic'));
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
