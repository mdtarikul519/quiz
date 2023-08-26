@extends('forntend.layout.website')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card" style="justify-content: center">
                    <div class="card-body">
                 
                   
                        <h1>quiz Name:{{ $quiz_subject->quiz_name }}</h1>
                         <h1>Total Question:{{ $question }}</h1> 
                        <h1>Correct:{{ $currect_result }}</h1>
                        <h2>Incorrect:{{ $incorrect_result }}</h2>
                        <h2>Total Markes:{{ $total_markes }}</h2>
                      <a href="{{ route('exam_answer_view', $quiz_subject->id) }}"><button class="btn btn-info">Details</button></a>
                        
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
