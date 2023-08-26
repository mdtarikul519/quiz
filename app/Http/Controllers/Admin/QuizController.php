<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Classes;
use App\Models\QuestionSubmit;
use App\Models\Quiz;
use COM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class QuizController extends Controller
{
    public function create()
    {

        return view('admin.quize.create');
    }


    public function store(Request $request)
    {

        $data = new Quiz();
    // dd(request()->all());

        $data->title = $request->title;
        //  dd($request->hasFile('image'));
        $data->save();

        return redirect()->route('admin.quiz.view')->with('success', 'data insert successfully');
    }

    public function view()
    {

        $alldata = Quiz::get();
        //    dd($alldata->toArray());
        return view('admin.quize.view', compact('alldata'));
    }

    // public function examinner_details($id)
    // {
    //     //function_bod
    //     // $quiz_result = QuizResult::where('quiz_id', $id)->get();

    //     $quiz_result = QuestionSubmit::
    //     join('questions', 'question_submits.question_id', '=', 'questions.id')

    //     ->join('quizzes', 'question_submits.quiz_id', '=', 'quizzes.id')

    //     ->select(
    //         'quizzes.quiz_name',
    //         'question_submits.user_id',
    //         DB::raw('SUM(CASE WHEN question_submits.submit_answer = questions.answer THEN 1 ELSE 0 END) AS marks'),
    //         DB::raw('SUM(CASE WHEN question_submits.question_id = questions.id THEN 1 ELSE 0 END) AS questions')
    //         )
    //         ->where('question_submits.quiz_id', $id)
    //         ->groupBy('quizzes.quiz_name', 'question_submits.user_id') 
    //         ->with('users_reations')
    //     ->get();
    //     // dd($quiz_result);
    //     return view('admin.examinner_details', compact('quiz_result'));
    // }


    public function edit($id)
    {
        $data = Quiz::find($id);
        // dd( $data);
        return view('admin.quize.edit', compact('data',));
    }


    public function update(Request $request, $id)
    {

        $data = Quiz::find($id);
  
        $data->title = $request->title;
        
        //  dd($request->hasFile('image'));
        $data->update();

        return redirect()->route('admin.quiz.view')->with('success', 'data update successfully');

    }

    public function delete($id)
    {
        Quiz::where('id', $id)->delete();

        return redirect()->back()->with('success', 'data delete successfully');
    }
}
