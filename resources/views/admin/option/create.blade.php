@extends('admin.index')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.option.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group col-md-6">
                                <label for="">Quiz_name</label>
                                    <select name="quiz_id" class="form-control">
                                        @foreach ($quiz as $quizs)
                                        <option value="{{ $quizs->id }}">{{ $quizs->title }}</option>
                                        @endforeach
                                    </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="">Question_name</label>
                                <select name="question_id" class="form-control">

                                    @foreach ($questions as $question)
                                        <option value="{{ $question->id }}">{{ $question->title }}</option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="form-group col-md-6">
                                <label for="">Option</label>
                                <input type="text" name="title" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">is_correct</label>
                                <input type="number" name="is_correct" class="form-control">
                            </div>

                            <button>submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
