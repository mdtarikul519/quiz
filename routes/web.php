<?php

use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => '', 'middleware' => ['istudent'], 'namespace' => 'website'], function () {
  Route::get('/', 'WebsiteController@index');

  Route::get('/quiz_question/{id}', 'ExamController@quiz_question_option_view')->name('quiz_question');
  Route::get('/quiz_view', 'ExamController@quiz_view')->name('quiz');

  //dd kora all quiery route
  Route::get('/quiz/users/{id}', 'ExamController@quizUsers')->name('quizUsers');
  Route::get('/quiz/question/potion/{id}', 'ExamController@quizQuestionOption')->name('quizQuestionOption');

  // Route::get('/quiz_exam/{id}', 'ExamController@quiz_question_view')->name('quiz_question');
  // Route::Post('/quiz_question_store', 'ExamController@quiz_question_store')->name('quiz_question_store');
  // Route::get('/quiz_answer_view/{quiz_id}', 'ExamController@quiz_answer_view')->name('quiz_answer_view');
  // Route::get('/exam_answer_view{id}', 'ExamController@exam_answer_view')->name('exam_answer_view');
  // Route::get('/profile', 'WebsiteController@profile')->name('profile');

});




///admin
Route::group(['prefix' => '', 'middleware' => ['isadmin'], 'namespace' => 'Admin'], function () {
  Route::get('/dashboard', 'AdminController@index')->name('dashboard');
  Route::get('/class/create', 'ClassController@classcreate')->name('classes.create');
  Route::post('/class/store', 'ClassController@store')->name('admin.classes.store');
  Route::get('/class/view', 'ClassController@view')->name('admin.classes.view');
  Route::get('/class/edit/{id}', 'ClassController@edit')->name('admin.classes.edit');
  Route::post('/class/update/{id}', 'ClassController@update')->name('admin.classes.update');
  Route::get('/class/delete/{id}', 'ClassController@delete')->name('admin.classes.delete');

  //quizzes
  Route::get('/quiz/create', 'QuizController@create')->name('admin.quiz.create');
  Route::post('/quiz/store', 'QuizController@store')->name('admin.quiz.store');
  Route::get('/quiz/view', 'QuizController@view')->name('admin.quiz.view');
  Route::get('/quiz/edit/{id}', 'QuizController@edit')->name('admin.quiz.edit');
  Route::post('/quiz/update/{id}', 'QuizController@update')->name('admin.quiz.update');
  Route::get('/quiz/delete/{id}', 'QuizController@delete')->name('admin.quiz.delete');
  Route::get('/quiz/examinner_details/{id}', 'QuizController@examinner_details')->name('examinner_details');


  //questions
  Route::get('/question/create', 'QuestionController@create')->name('admin.question.create');
  Route::post('/question/store', 'QuestionController@store')->name('admin.question.store');
  Route::get('/question/view', 'QuestionController@view')->name('admin.question.view');
  Route::get('/question/edit/{id}', 'QuestionController@edit')->name('admin.question.edit');
  Route::post('/question/update/{id}', 'QuestionController@update')->name('admin.question.update');
  Route::get('/question/delete/{id}', 'QuestionController@delete')->name('admin.question.delete');

  //option

  Route::get('/option/create', 'OptionController@create')->name('admin.option.create');
  Route::post('/option/store', 'OptionController@store')->name('admin.option.store');
  Route::get('/option/view', 'OptionController@view')->name('admin.option.view');
  Route::get('/option/edit/{id}', 'OptionController@edit')->name('admin.option.edit');
  Route::post('/option/update/{id}', 'OptionController@update')->name('admin.option.update');
  Route::get('/option/delete/{id}', 'OptionController@delete')->name('admin.option.delete');
});


