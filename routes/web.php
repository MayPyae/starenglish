<?php

Route::group(['prefix' => 'admin','namespace'=>'admin',"as"=>'admin.'], function () {
    Route::resource('/dashboard','DashboardController')->except('dashboard')->middleware('auth');
    Route::resource('/posts','PostController');
    Route::resource('/categories','CategoryController');
    Route::get('/setting','SettingController')->name('setting');
     Route::resource('/personal','PersonalController');

     Route::resource('/course', 'CoursesController');
      Route::resource('/teacher', 'TeacherController')->except('teacher')->middleware('auth');
       Route::resource('/feedback', 'FeedbackController');
        Route::resource('/student', 'StudentController')->except('student')->middleware('auth');
         Route::resource('/question', 'QuestionController')->except('question')->middleware('auth');

        Route::resource('/answer', 'AnswerController');

});

Route::group(['prefix' => 'user','namespace'=>'user',"as"=>'user.'], function () {
    Route::get('/index','HomeController')->name("index");
    Route::get('/about','AboutController')->name("about");
    Route::get('/course','CourseController')->name("course");
    Route::get('/feedback','FeedbackController')->name("feedback");
     Route::get('/teacher','TeacherController')->name("teacher");
      Route::get('/career','CareerController')->name("career");
      Route::get('/contact','ContactController')->name("contact");
        Route::get('/test','TestController')->name("test");

});

Auth::routes();


