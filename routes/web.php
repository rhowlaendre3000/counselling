<?php
use Symfony\Component\HttpFoundation\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/userprofile', 'registrationController@profile');
Route::resource('index', 'registrationController');
Route::get('/',function(){

    return view('index');
});

Route::post('/signup',function(){

    return view('signup');
});

Auth::routes();
Route::resource('answer', 'answerController');
Route::resource('personality', 'personalityController');
Route::resource('schorlastic', 'schorlasticController');
Route::resource('result', 'resultController');
Route::resource('programme', 'ProgrammeController');
Route::resource('course', 'courseController');
Route::resource('material', 'materialController')->middleware('auth');
Route::get('/home', 'HomeController@index')->name('home');



Route::group(['middleware'=>['auth','web']], function(){

  //  Route::get('/search', 'HomeController@search');

    Route::get('/home', function(Request $request){
        if(Auth::user()->admin==1){
            $profile = App\User::find(Auth::user()->id);
            return view('user-profile', compact('profile'));
        }else{
            $profile = App\User::find(Auth::user()->id);
            //$users['users']=\App\User::paginate(10);
        return view('admindashboard',compact('profile'));
        }
    });

    Route::get('dash', function(){
        $profile = App\User::find(Auth::user()->id);

        return view('admindashboard',compact('profile'));
    });

    Route::get('/all', function(){

        $users['users']=App\User::paginate(10);
        $profile = App\User::find(Auth::user()->id);

        return view('userlisting', $users)->with(compact('profile'));
    });

});



