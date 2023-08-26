<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Quiz_questions;
use App\Models\Quiz_questions_options;
use Illuminate\Http\Request;

class OptionController extends Controller
{
    public function create(){
        $quiz = Quiz::get();
        $questions = Quiz_questions::get();
        return view('admin.option.create',compact('quiz','questions'));       
    }


    public function store(request $request){
        // dd(request()->all());
         $options = new Quiz_questions_options();
         $options->quiz_id = $request->quiz_id;
         $options->question_id = $request->question_id;
         $options->title =$request->title;
         $options->is_correct =$request->is_correct;    
         $options->save();

        return redirect()->route('admin.option.view');
    }

    public function view(){
        $alldata = Quiz_questions_options::with('quiz_relation','question_relation')->get();
        // dd($alldata);
        return view('admin.option.view',compact('alldata'));
    }

    public function edit($id){
        $alldata = Quiz_questions_options::find($id);
        $quiz = Quiz::get();
        $questions = Quiz_questions::get();
        // dd($alldata, $quiz, $questions);
        return view('admin.option.edit',compact('alldata','quiz','questions'));
        
    }

   public function update(request $request, $id){

    $updatedata = Quiz_questions_options::find($id);
    $updatedata->quiz_id = $request->quiz_id;
    $updatedata->question_id = $request->question_id;
    $updatedata->title =$request->title;
    $updatedata->is_correct =$request->is_correct;    
    $updatedata->update();
    return redirect()->route('admin.option.view');
   }

   public function delete($id){
     Quiz_questions_options::where('id', $id)->delete();
     return redirect()->back();
   }
}
