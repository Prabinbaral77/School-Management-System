<?php

use Illuminate\Support\Facades\Route;

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



Route::view('/login','login');
Route::post('login_submit','user_Auth@login_submit');


Route::get('/user_logout', function(){
	session()->forget('USER_ID');
	session()->forget('USER_NAME');
	return redirect('/login');
});



	Route::group(['middleware'=>['user_auth']], function(){

		Route::view('tables','table.table');
		Route::get('/','Student_Controller@index_student');

		Route::view('std_form','form.stdt_form');
		Route::view('tech_form','form.tech_form');
		Route::view('staff_form','form.staff_form');


		Route::get('tables','Student_Controller@show');
		Route::get('nur_table','Student_Controller@show_nursary');
		Route::get('lkg_table','Student_Controller@show_lkg');
		Route::get('ukg_table','Student_Controller@show_ukg');
		Route::get('1_table','Student_Controller@show1');
		Route::get('2_table','Student_Controller@show2');
		Route::get('3_table','Student_Controller@show3');
		Route::get('4_table','Student_Controller@show4');
		Route::get('5_table','Student_Controller@show5');
		Route::get('6_table','Student_Controller@show6');
		Route::get('7_table','Student_Controller@show7');
		Route::get('8_table','Student_Controller@show8');
		Route::get('9_table','Student_Controller@show9');
		Route::get('10_table','Student_Controller@show10');
		Route::get('11_table','Student_Controller@show11');
		Route::get('12_table','Student_Controller@show12');
		Route::get('teacher_table','TeacherController@show');
		Route::get('staff_table','Staff_Controller@show');

		Route::post('student_form_submit','Student_Controller@create');
		Route::post('teacher_form_submit','TeacherController@create');
		Route::post('staff_form_submit','Staff_Controller@create');

		
		Route::get('student_delete/{id}','Student_Controller@destroy');
		Route::get('student_edit/{id}','Student_Controller@edit');
		Route::post('student_form_update/{id}','Student_Controller@update');

		Route::get('teacher_delete/{id}','TeacherController@destroy');
		Route::get('teacher_edit/{id}','TeacherController@edit');
		Route::post('teacher_form_update/{id}','TeacherController@update');

		Route::get('staff_delete/{id}','Staff_Controller@destroy');
		Route::get('staff_edit/{id}','Staff_Controller@edit');
		Route::post('staff_form_update/{id}','Staff_Controller@update');

		Route::get('class_schedule','ScheduleController@show')->name('schedule.index');
		Route::view('schedule_form','form.schedule');
		Route::post('schedule_submit','ScheduleController@create');
		Route::get('schedule_update/{id}','ScheduleController@edit');
		Route::post('schedule_update_submit/{id}','ScheduleController@update');

		Route::get('single_student_detail/{id}','SingleStudentController@index')->name('single_student.index');
		
	});

