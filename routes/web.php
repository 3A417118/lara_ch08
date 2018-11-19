<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});
 /*
Route::pattern('student_no','s[0-9]{10}');
 Route::group(['prefix'=>'student'],function(){
     Route::get('{student_no}',[
        'as'=>'student',
        'uses'=>function($student_no){
            return '學號：'.$student_no;
        }
    ]);
     Route::get('{student_no}/score/{subject?}',[
        'as'=>'student.score',
        'uses'=>function($student_no,$subject = null){
            return '學號：'.$student_no.' 的'.((is_null($subject))?'所有科目':$subject).'成績';
        }
    ])->where(['subject'=>'(chinese|english|math)']);
});
*/
Route::get('/board','BoardController@getIndex');


Route::pattern('student_no','s3[A-Z][0-9]{6}');
Route::pattern('subject','(chinese|english|math)');

Route::get('/','HomeController@index');

Route::get('/score', 'StudentController@getStudentScore');

Route::group(['namespace' => 'Cool'],function (){
    Route::get('cool', 'TestController@index');
});

Route::group(['prefix'=>'student'],function(){
	
	Route::get('{student_no}',[
        'as'=>'student',
        'uses'=>'StudentController@getStudentData'
    ]);    
    Route::get('{student}/score/{subject?}',[
        'as'=>'student.score',
        'uses'=>'StudentController@getStudentData'
    ]);
    
});


//Route::get('student/{student_no}/score', function ($student_no) {
//    return "學號 ".$student_no." 的所有成績";
//});
 //Route::get('student/{student_no}/score/{subject}', function ($student_no,$subject) {
//    return "學號 ".$student_no."的".$subject."成績";
//})->where(['student_no'=>'s3[A-Z]{6}','subject'=>'(chinese|english|math)']);

