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

/* Route::get('/', function () {
    return view('welcome');
});
 */
Route::get('/', [App\Http\Controllers\frontController::class, 'index'])->name('welcome_index');
Route::get('/front/about_us', [App\Http\Controllers\frontController::class, 'about'])->name('front.about');
Route::get('/front/mission_vision', [App\Http\Controllers\frontController::class, 'mission'])->name('front.mission');
Route::get('/front/principle_message', [App\Http\Controllers\frontController::class, 'principleMessage'])->name('front.principleMessage');
Route::get('/front/admission_procedure', [App\Http\Controllers\frontController::class, 'admissionProcedure'])->name('front.admissionProcedure');
Route::get('/front/facilities', [App\Http\Controllers\frontController::class, 'facilities'])->name('front.facilities');
Route::get('/front/teams', [App\Http\Controllers\frontController::class, 'teams'])->name('front.teams');
Route::get('/front/photos', [App\Http\Controllers\frontController::class, 'photos'])->name('front.photos');
Route::get('/front/contactUs', [App\Http\Controllers\frontController::class, 'contactUs'])->name('front.contactUs');
Route::get('/front/newsEvent', [App\Http\Controllers\frontController::class, 'newsEvent'])->name('front.newsEvent');

Route::get('/user_logout', function () {
    session()->forget('USER_NAME');
    session()->forget('USER_EMAIL');
    return redirect()->route('welcome_index');
});

Route::get('/login', [App\Http\Controllers\AdminauthController::class, 'index'])->name('login');
Route::post('/login', [App\Http\Controllers\AdminauthController::class, 'adminAuth'])->name('login_submit');

//admin access
Route::group(['middleware' => ['auth']], function () {
    Route::get('/sms', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/student_form', [App\Http\Controllers\StudentController::class, 'create'])->name('student.create');
    Route::post('/student_form_submit', [App\Http\Controllers\StudentController::class, 'store'])->name('student.store');
    Route::get('/student_table/{id}', [App\Http\Controllers\StudentController::class, 'single'])->name('student.singletable');
    Route::get('/all_students', [App\Http\Controllers\StudentController::class, 'index'])->name('student.index');
    Route::get('delete_student/{id}', [App\Http\Controllers\StudentController::class, 'destroy'])->name('student.delete');
    Route::get('edit_student/{id}', [App\Http\Controllers\StudentController::class, 'edit'])->name('student.edit');
    Route::post('update_student/{id}', [App\Http\Controllers\StudentController::class, 'update'])->name('student.update');
    Route::get('details_student/{id}', [App\Http\Controllers\StudentController::class, 'studentdetail'])->name('singlestudent.detail');
    Route::post('/student_search', [App\Http\Controllers\StudentController::class, 'search'])->name('student.search');
    
    Route::get('/teacher_form', [App\Http\Controllers\TeacherController::class, 'create'])->name('teacher_form');
    Route::post('/teacher_form_submit', [App\Http\Controllers\TeacherController::class, 'store'])->name('teacher.store');
    Route::get('/teacher_table', [App\Http\Controllers\TeacherController::class, 'index'])->name('teacher.index');
    Route::get('delete_teacher/{id}', [App\Http\Controllers\TeacherController::class, 'destroy'])->name('teacher.delete');
    Route::get('edit_teacher/{id}', [App\Http\Controllers\TeacherController::class, 'edit'])->name('teacher.edit');
    Route::post('update_teacher/{id}', [App\Http\Controllers\TeacherController::class, 'update'])->name('teacher.update');


    Route::get('/staff_form', [App\Http\Controllers\StaffController::class, 'create'])->name('staff_form');
    Route::post('/staff_form_submit', [App\Http\Controllers\StaffController::class, 'store'])->name('staff.store');
    Route::get('/staff_table', [App\Http\Controllers\StaffController::class, 'index'])->name('staff.index');
    Route::get('delete_staff/{id}', [App\Http\Controllers\StaffController::class, 'destroy'])->name('staff.delete');
    Route::get('edit_staff/{id}', [App\Http\Controllers\StaffController::class, 'edit'])->name('staff.edit');
    Route::post('update_staff/{id}', [App\Http\Controllers\StaffController::class, 'update'])->name('staff.update');

    Route::get('/class_schedule',[App\Http\Controllers\ScheduleController::class, 'index'])->name('schedule.index');
    Route::get('/classSchedule_create',[App\Http\Controllers\ScheduleController::class, 'create'])->name('schedule.create');
    Route::post('/Schedule_store',[App\Http\Controllers\ScheduleController::class, 'store'])->name('schedule.store');
    Route::get('/Schedule_restore',[App\Http\Controllers\ScheduleController::class, 'destroy'])->name('schedule.destroy');
    
    Route::get('/grade_list',[App\Http\Controllers\GradeController::class, 'show'])->name('grade.show');

    Route::get('/periods_list',[App\Http\Controllers\PeriodController::class, 'show'])->name('period.show');
    Route::get('/periods_create',[App\Http\Controllers\PeriodController::class, 'create'])->name('period.create');
    Route::post('/periods_submit',[App\Http\Controllers\PeriodController::class, 'store'])->name('period.submit');
    Route::get('/periods_edit/{id}',[App\Http\Controllers\PeriodController::class, 'edit'])->name('period.edit');
    Route::post('/periods_update/{id}',[App\Http\Controllers\PeriodController::class, 'update'])->name('period.update');
    
    Route::get('/registeredSubject',[App\Http\Controllers\SubjectController::class, 'show'])->name('subject.show');
    Route::get('/registeredSubject_form',[App\Http\Controllers\SubjectController::class, 'create'])->name('subject.create');
    Route::post('/registeredSubject_submit',[App\Http\Controllers\SubjectController::class, 'store'])->name('subject.store');
    Route::get('/registeredSubject_delete/{id}',[App\Http\Controllers\SubjectController::class, 'destroy'])->name('subject.destroy');
    Route::get('/registeredSubject_edit/{id}',[App\Http\Controllers\SubjectController::class, 'edit'])->name('subject.edit');
    Route::post('/registeredSubject_update/{id}',[App\Http\Controllers\SubjectController::class, 'update'])->name('subject.update');

    Route::get('/Schooldetail/{id}',[App\Http\Controllers\SchooldetailController::class, 'index'])->name('schooldetail.index');
    Route::get('/Schooldetail_edit/{id}',[App\Http\Controllers\SchooldetailController::class, 'edit'])->name('schooldetail.edit');
    Route::post('/Schooldetail_update/{id}',[App\Http\Controllers\SchooldetailController::class, 'update'])->name('schooldetail.update');
    
    Route::get('/attendence-all',[App\Http\Controllers\AttendenceController::class, 'index'])->name('attendence.index');
    Route::get('/attendence-select-grade',[App\Http\Controllers\AttendenceController::class, 'search'])->name('attendence.select.grade');
    Route::get('/student_attendee/{id}', [App\Http\Controllers\AttendenceController::class, 'single'])->name('student.attendence');
    Route::post('/student_attendee_submit', [App\Http\Controllers\AttendenceController::class, 'create'])->name('student.attendence_submit');
    Route::get('/student_attendee_list/{id}', [App\Http\Controllers\AttendenceController::class, 'list'])->name('student.attendence.list');
    Route::get('/student_attendeeSearch/{id}', [App\Http\Controllers\AttendenceController::class, 'search'])->name('student.attendenceSearch');
    
    //library route 
    Route::get('/library_home',[App\Http\Controllers\LibraryController::class, 'index'])->name('library.index');
    Route::get('/new_book',[App\Http\Controllers\LibraryController::class, 'create'])->name('library.create');
    Route::post('/store_book',[App\Http\Controllers\LibraryController::class, 'store'])->name('library.store');
    Route::get('/book_delete/{id}',[App\Http\Controllers\LibraryController::class, 'destroy'])->name('book.delete');
    Route::get('/book_edit/{id}',[App\Http\Controllers\LibraryController::class, 'edit'])->name('book.edit');
    Route::post('/book_update/{id}',[App\Http\Controllers\LibraryController::class, 'update'])->name('book.update');
    Route::post('/book_search',[App\Http\Controllers\LibraryController::class, 'search'])->name('book.search');
    
    //Borrow Book
    Route::get('/book_borrow',[App\Http\Controllers\LibraryController::class, 'borrow'])->name('book.borrow');
    Route::post('/book_borrowed',[App\Http\Controllers\LibraryController::class, 'borrowed'])->name('book.borrowed');
    Route::get('/borrowed_table',[App\Http\Controllers\LibraryController::class, 'borrowedTable'])->name('borrowed_table');

    //Return Book
    Route::get('/return_book/{id}',[App\Http\Controllers\LibraryController::class, 'returnBook'])->name('return_book');
    Route::post('/returned_book',[App\Http\Controllers\LibraryController::class, 'bookReturned'])->name('book_returned');

    //Report
    Route::get('/report/{id}',[App\Http\Controllers\LibraryController::class, 'displayReport'])->name('borrow_report');
    Route::get('/studentAttendence/{id}',[App\Http\Controllers\LibraryController::class, 'attendenceReport'])->name('attendence_report');
    
    //notices
    Route::get('/notices',[App\Http\Controllers\NoticeController::class, 'index'])->name('notice.table');
    Route::get('/notice_form',[App\Http\Controllers\NoticeController::class, 'create'])->name('notice.create');
    Route::post('/notice_form_submit',[App\Http\Controllers\NoticeController::class, 'store'])->name('notice.store');
    Route::get('/notice_distroy/{id}',[App\Http\Controllers\NoticeController::class, 'destroy'])->name('notice.distroy'); 

    //admin crud
    Route::get('/admin_table',[App\Http\Controllers\AdminauthController::class, 'show'])->name('admin.table'); 
    Route::get('/admin_form',[App\Http\Controllers\AdminauthController::class, 'create'])->name('admin.create'); 
    Route::post('/admin_form_store',[App\Http\Controllers\AdminauthController::class, 'store'])->name('admin.store'); 
    Route::get('/admin_destroy/{id}',[App\Http\Controllers\AdminauthController::class, 'destroy'])->name('admin.distroy'); 
    Route::get('/admin_edit/{id}',[App\Http\Controllers\AdminauthController::class, 'edit'])->name('admin.edit'); 
    Route::post('/admin_form_update/{id}',[App\Http\Controllers\AdminauthController::class, 'update'])->name('admin.update'); 
    
});

//teacher access 

