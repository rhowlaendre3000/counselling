<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use Auth;
use App\User;
class registrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function profile(){

        $profile = User::find(Auth::user()->id);
       return view('user-profile', compact('profile'));
    }

    public function index()
    {
        //
        $profile = User::find(Auth::user()->id);
        return view('iqtest-page',compact('profile'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

      //  $programme=Programme::all();
        return view('signup');
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
        $status="registered";
        $rules=[

            "firstname" => "required|min:5",
            "lastname" => "required|min:5",
            "email"=> "required|min:6",
            "edulevel"=>"required",
            "age"    => "required",
            "password" => "required|string|min:5|confirmed"
        ];

        $validator=Validator::make($request->all(),$rules);
        if($validator->fails()){
            return redirect('index/create')
            ->withErrors($validator)
            ->withInput();

        } else {
            $user = new User;

            $user->firstname = $request->input('firstname');
            $user->lastname = $request->input('lastname');
            $user->email = $request->input('email');
            $user->edulevel = $request->input('edulevel');
            $user->age = $request->input('age');
            $user->admin=1;
          
            if(!$user){
                $status="create";
            }
            if($request->has('password')){
                $user->password = bcrypt($request->input('password'));
            }

            if ($user->save()) {
                session()->flash('status', 'User '.$status.'d successfully');
                return redirect(route('login'));
            }
            
            session()->flash('status', 'Unable to '.$status.' user. Please try again');
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
        $user=User::find($id);
        return view('view')->with('user', $user);
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
        $profile=User::find($id);
       // $programme=Programme::all();
        return view('users.update')->with('user',$profile);
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

        $user=User::find($id);
        $status="updated";

        $rules=[

            "firstname" => "required|min:5",
            "lastname" => "required|min:5",
            "email"=> "required|min:6",
            "edulevel"=>"required",
            "age"    => "required",
        ];
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect('index/' . $id . '/edit')
                        ->withErrors($validator)
                        ->withInput();
        }
        else{



          // if($request->input('programme')=="Academic Directorate"){
          //  $user->admin=1;
           //}
         
           $user->firstname = $request->input('firstname');
            $user->lastname = $request->input('lastname');
            $user->email = $request->input('email');
            $user->edulevel = $request->input('edulevel');
            $user->age = $request->input('age');
            $user->admin=0;
            $user->save();
        
            session()->flash('status', 'User '.$status.'d successfully');
                return redirect(route('index.show', $id));
        }
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

        $user = User::find($id);
        if ($user->delete()) {
            session()->flash('status', 'User deleted successfully');
        } else {
            session()->flash('status', 'Unable to delete user. Please try again');
        }
    
    return back();
    
    }
}
