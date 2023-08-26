@extends('forntend.layout.website')
@section('content')
    <div class="container" >
        <div class="row" >
            <div class="col-md-6">  
    
            <form action="{{ route('quiz_question_store') }}" method="POST" enctype="multipart/form-data" 
              style="text-color:black; padding-left:120px">
                @csrf
                @foreach ( $data as $item ) 
           {{-- @dd($item->optionD) --}}
                    <input type="text" hidden name="user_id" value="{{ $item->user_id }}"> 
                    <input type="text" hidden name="question_id[]" value="{{ $item->id }}">  
                    <input type="text" hidden name="quiz_id" value="{{ $item->quiz_id }}">  
                    <h1>{{ $item->question_name }}</h1>
                    <input type="checkbox"  name="submit_answer[{{ $item->id }}][]" value="{{ $item->optionA }}">
                    <label for="vehicle1"> {{ $item->optionA }}</label><br>
                    <input type="checkbox" id="vehicle2" name="submit_answer[{{ $item->id }}][]" value="{{ $item->optionB }}">
                    <label for="vehicle2"> {{ $item->optionB }}</label><br>
                    <input type="checkbox" id="vehicle3" name="submit_answer[{{ $item->id }}][]" value=" {{ $item->optionC}}">
                    <label for="vehicle3"> {{ $item->optionC}}</label><br>
                    <input type="checkbox" id="vehicle4" name="submit_answer[{{ $item->id }}][]" value="{{ $item->optionD}}">
                    <label for="vehicle4"> {{ $item->optionD}}</label><br>
                    @endforeach

                    <input type="submit" value="Submit">
        
                </form>
            
            </div>
        </div>
    </div>
@endsection
