<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\QuestionSubmit;
use App\Models\Quiz;
use App\Models\Quiz_questions;
use App\Models\Quiz_user;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExamController extends Controller
{
     public function quiz_view()
     {
          $data = Auth::user()->quizUser;
          dd( $data); 
          return view('forntend.quiz', compact('data'));
     }
      


     public function quizUsers($quiz_id){
           $quizUser = Quiz_user::where('quiz_id', $quiz_id)->get();
          //  dd($quizUser);
          //  $quizUser->cout();
          // User::all()->count();
     //     dd(User::all()->count()-$quizUser->count()-1);
     //  dd(User::all()->count());
     }


     public function quizQuestionOption($id){
          $quiz_question_option = Quiz::with('quizQuestions','quizQuestions.question_options')
           ->where('id', $id)
          ->get();
     
        return $quiz_question_option;
     }



//    public function user_quiz(){

//       $uesr_yous_quiz =Quiz_user::with('')
//      // dd($uesr_yous_quiz);
//      // return view('forntend.quiz');
//    }




















     public function quiz_question_option_view($id) 
     {
          $alldata = Quiz_questions::where('quiz_id', $id)->with('question_option_relation')->get();
          // dd($alldata);
          return view('forntend.quiz_question_option',compact('alldata'));
     }
}
