<?php

namespace App\Http\Controllers;
use App\User;
use Auth;
use Illuminate\Http\Request;
use App\Schorlastic;
use Validator;


class schorlasticController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user=User::all();
        $profile = User::find(Auth::user()->id);
        return view('scholastic-page', compact('profile'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $user=User::all();
        $profile = User::find(Auth::user()->id);
        return view('schorlasticresults')->with( compact('profile'))->with( compact('user'));
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

        $rules=[
            "examstype" => "required|string",
            "averagescore" => "required|string"

        ];

        $validator=Validator::make($request->all(),$rules);
        if($validator->fails()){
            return redirect('schorlastic/index')
            ->withErrors($validator)
            ->withInput();

        } else {
            $schorlastic = new Schorlastic;
            $schorlastic->user_id=Auth::user()->id;
            $schorlastic->examstype = $request->input('examstype');
            $schorlastic->averagescore = $request->input('averagescore');
            
            if($schorlastic->averagescore>=0 && $schorlastic->averagescore<=10){
                $schorlastic->assessment="Exceptional";
            }elseif($schorlastic->averagescore>=11 && $schorlastic->averagescore<=15){
                $schorlastic->assessment="Very Good";
            }elseif($schorlastic->averagescore>=16 && $schorlastic->averagescore<=19){
                $schorlastic->assessment="Good";
            }elseif($schorlastic->averagescore>19){
                $schorlastic->assessment="Above Average";
            }
          
           
          

            if ($schorlastic->save()) {
                return redirect(url('/result'));
            }
            
            return back()->withInput();
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
