<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use App\Result;
use App\Answer;
use App\Personality;
use Illuminate\Http\Request;

class resultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $personality=Personality::all();
        $profile = User::find(Auth::user()->id);
       // $chosen=;
        if($profile->personality->assessment=="Investigative" && ($profile->result->assessment==null || $profile->result->assessment=="Exceptional") && $profile->schorlastic->assessment=="Very Good" ){

            $career="Banker";
        }
        elseif($profile->personality->assessment=="Socials" && ($profile->result->assessment==null || $profile->result->assessment=="Good") && $profile->schorlastic->assessment=="Good" ){

            $career="Politician";
        }
        elseif($profile->personality->assessment=="Socials" && ($profile->result->assessment==null || $profile->result->assessment=="Good") && $profile->schorlastic->assessment=="Very Good" ){

            $career="News Presenter";
        }
        elseif($profile->personality->assessment=="Socials" && ($profile->result->assessment==null || $profile->result->assessment=="Good") && $profile->schorlastic->assessment=="Exceptional" ){

            $career="Marketer";
        }
        elseif($profile->personality->assessment=="Conventional" && ($profile->result->assessment==null || $profile->result->assessment=="Very Good") && $profile->schorlastic->assessment=="Good" ){

            $career="Teacher";
        } elseif($profile->personality->assessment=="Conventional" && ($profile->result->assessment==null || $profile->result->assessment=="Very Good") && $profile->schorlastic->assessment=="Exceptional" ){

            $career="Systems Administrator";
        }elseif($profile->personality->assessment=="Enterprising" && ($profile->result->assessment==null || $profile->result->assessment==" Very Good") && $profile->schorlastic->assessment=="Exceptional" ){

            $career="Accountant";
        }elseif($profile->personality->assessment=="Realistic" && ($profile->result->assessment==null || $profile->result->assessment=="Exceptional") && $profile->schorlastic->assessment=="Exceptional" ){

            $career="Doctor";
        }elseif($profile->personality->assessment=="Enterprising" && ($profile->result->assessment==null || $profile->result->assessment=="Exceptional") && $profile->schorlastic->assessment=="Exceptional" ){

            $career="Software Engineer";
        }
        
        
        

        return view('results')->with(compact('profile'))->with(compact('career'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $iqresults=Result::all();
        $user=User::all();
        $profile = User::find(Auth::user()->id);

        return view('testresults')->with( compact('iqresults'))->with( compact('profile'))->with(compact('user'));
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

        $correctanswers=0;
        $wronganswers=0;
        $results= new Result;
        $answer=new Answer;

    

        if($request->input('qone')==Answer::find(1)->solutions){
            $correctanswers++;
        }
        else{
            $wronganswers++;
        }

        if($request->input('qtwo')==Answer::find(2)->solutions){
            $correctanswers++;
        }
        else{
            $wronganswers++;
        }
        if($request->input('qthree')==Answer::find(3)->solutions){
            $correctanswers++;
        }
        else{
            $wronganswers++;
        }
        if($request->input('qfour')==Answer::find(4)->solutions){
            $correctanswers++;
        }
        else{
            $wronganswers++;
        }
        if($request->input('qfive')==Answer::find(5)->solutions){
            $correctanswers++;
        }
        else{
            $wronganswers++;
        }
        if($request->input('qsix')==Answer::find(6)->solutions){
            $correctanswers++;
        }
        else{
            $wronganswers++;
        }
        if($request->input('qseven')==Answer::find(7)->solutions){
            $correctanswers++;
        }
        else{
            $wronganswers++;
        }
        if($request->input('qeight')==Answer::find(8)->solutions){
            $correctanswers++;
        }
        else{
            $wronganswers++;
        }
        if($request->input('qnine')==Answer::find(9)->solutions){
            $correctanswers++;
        }
        else{
            $wronganswers++;
        }
        if($request->input('qten')==Answer::find(10)->solutions){
            $correctanswers++;
        }
        else{
            $wronganswers++;
        }
        if($request->input('qeleven')==Answer::find(11)->solutions){
            $correctanswers++;
        }
        else{
            $wronganswers++;
        }
        if($request->input('qtwelve')==Answer::find(12)->solutions){
            $correctanswers++;
        }
        else{
            $wronganswers++;
        }
        if($request->input('qthirteen')==Answer::find(13)->solutions){
            $correctanswers++;
        }
        else{
            $wronganswers++;
        }
        if($request->input('qfourteen')==Answer::find(14)->solutions){
            $correctanswers++;
        }
        else{
            $wronganswers++;
        }
        if($request->input('qfifteen')==Answer::find(15)->solutions){
            $correctanswers++;
        }
        else{
            $wronganswers++;
        }
        if($request->input('qsixteen')==Answer::find(16)->solutions){
            $correctanswers++;
        }
        else{
            $wronganswers++;
        }
        if($request->input('qseventeen')==Answer::find(17)->solutions){
            $correctanswers++;
        }
        else{
            $wronganswers++;
        }
        if($request->input('qeighteen')==Answer::find(18)->solutions){
            $correctanswers++;
        }
        else{
            $wronganswers++;
        }
        if($request->input('qnineteen')==Answer::find(19)->solutions){
            $correctanswers++;
        }
        else{
            $wronganswers++;
        }
        if($request->input('qtwenty')==Answer::find(20)->solutions){
            $correctanswers++;
        }
        else{
            $wronganswers++;
        }
        if($request->input('qtwnetyone')==Answer::find(21)->solutions){
            $correctanswers++;
        }
        else{
            $wronganswers++;
        }
        if($request->input('qtwentytwo')==Answer::find(22)->solutions){
            $correctanswers++;
        }
        else{
            $wronganswers++;
        }
        if($request->input('qtwentythree')==Answer::find(23)->solutions){
            $correctanswers++;
        }
        else{
            $wronganswers++;
        }
        if($request->input('qtwentyfour')==Answer::find(24)->solutions){
            $correctanswers++;
        }
        else{
            $wronganswers++;
        }
        if($request->input('qtwentyfive')==Answer::find(25)->solutions){
            $correctanswers++;
        }
        else{
            $wronganswers++;
        }
        if($request->input('qtwentysix')==Answer::find(26)->solutions){
            $correctanswers++;
        }
        else{
            $wronganswers++;
        }
        if($request->input('qtwentyseven')==Answer::find(27)->solutions){
            $correctanswers++;
        }
        else{
            $wronganswers++;
        }
        if($request->input('qtwentyeight')==Answer::find(28)->solutions){
            $correctanswers++;
        }
        else{
            $wronganswers++;
        }
        if($request->input('qtwentynine')==Answer::find(29)->solutions){
            $correctanswers++;
        }
        else{
            $wronganswers++;
        }
        if($request->input('qthirty')==Answer::find(30)->solutions){
            $correctanswers++;
        }
        else{
            $wronganswers++;
        }
        if($request->input('qthirtyone')==Answer::find(31)->solutions){
            $correctanswers++;
        }
        else{
            $wronganswers++;
        }
        if($request->input('qthirtytwo')==Answer::find(32)->solutions){
            $correctanswers++;
        }
        else{
            $wronganswers++;
        }
        if($request->input('qthirtythree')==Answer::find(33)->solutions){
            $correctanswers++;
        }
        else{
            $wronganswers++;
        }
        if($request->input('qthirtyfour')==Answer::find(34)->solutions){
            $correctanswers++;
        }
        else{
            $wronganswers++;
        }
        if($request->input('qthirtyfive')==Answer::find(35)->solutions){
            $correctanswers++;
        }
        else{
            $wronganswers++;
        }
        if($request->input('qthirtysix')==Answer::find(36)->solutions){
            $correctanswers++;
        }
        else{
            $wronganswers++;
        }
        if($request->input('qthirtyseven')==Answer::find(37)->solutions){
            $correctanswers++;
        }
        else{
            $wronganswers++;
        }
        if($request->input('qthirtyeight')==Answer::find(38)->solutions){
            $correctanswers++;
        }
        else{
            $wronganswers++;
        }
        if($request->input('qthirtynine')==Answer::find(39)->solutions){
            $correctanswers++;
        }
        else{
            $wronganswers++;
        }
        if($request->input('qforty')==Answer::find(40)->solutions){
            $correctanswers++;
        }
        else{
            $wronganswers++;
        }
        

         $correctanswers;
       // $wronganswers;
        //$totalquestions=$correctanswers + $wronganswers;

        $results->correctanswer=$correctanswers;

        $results->user_id=Auth::user()->id;

        if($results->correctanswer>=1 && $results->correctanswer<=10){
            $results->assessment="Average";
        }elseif($results->correctanswer>=11 && $results->correctanswer<=20){
            $results->assessment="Good";
        }elseif($results->correctanswer>=21 && $results->correctanswer<=30){
            $results->assessment="Very Good";
        }elseif($results->correctanswer>=21 && $results->correctanswer<=40){
            $results->assessment="Exceptional";
        }

        if($results->save()){
            return redirect(url('/personality'));
        };
        
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
