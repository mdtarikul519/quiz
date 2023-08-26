<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Quiz_questions;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function create()
    {
        $quiz = Quiz::get();
        return view('admin.question.create', compact('quiz'));
    }


    public function store(request $request)
    {

        $data = new Quiz_questions();
        // dd(request()->all());
        $data->quiz_id = $request->quiz_id;
        $data->title = $request->title;
        $data->is_correct = $request->is_correct;

        // $data->answer = $request->answer;

        // if ($request->multipal == "0") {
        //     $data->answer = $request->answer;
        //     $data->save();
        // } else if ($request->multipal == "1") {
        //     $tarek_multipal = explode(',', request()->answer);
        //     $decode = json_encode($tarek_multipal);
        //     $data->answer = $decode;
        //     $data->multipal = 1;
        //     $data->save();
        //     //  dd(request()->all());
        // }

        $data->save();
        //    dd($data);
        return redirect()->route('admin.question.view')->with('success', 'data insert successfully');
    }

    public function view()
    {
        $alldata = Quiz_questions::with('quiz_relation')->get();
        return view('admin.question.view', compact('alldata'));
    }


    public function edit($id)
    {

        $editdata = Quiz_questions::find($id);
        $quiz = Quiz::get();
        return view('admin.question.edit', compact('editdata', 'quiz'));
    }


    public function update(Request $request, $id)
    {
        $data = Quiz_questions::find($id);

        $data->quiz_id = $request->quiz_id;
        $data->title = $request->title;
        $data->is_correct = $request->is_correct;

        // if ($request->multipal == "0") {
        //     $data->answer = $request->answer;
        //     $data->save();
        // } else if ($request->multipal == "1") {
        //     $tarek_multipal = explode(',', request()->answer);
        //     $decode = json_encode($tarek_multipal);
        //     $data->answer = $decode;
        //     $data->multipal = 1;
        //     $data->save();
        //     //  dd(request()->all());
        // }

        $data->update();
        //    dd($data);
        return redirect()->route('admin.question.view')->with('success', 'data update successfully');
    }


    public function delete($id)
    {
        Quiz_questions::where('id', $id)->delete();
        return redirect()->back();
    }
}
