@extends('forntend.layout.website')
@section('content')
    <div class="container">
        <div class="row " style="padding:40px">
            <form action="">
                @csrf
                @foreach ($alldata as $item)
                <h1>{{ $item->title }}</h1> 
                  @foreach ($alldata->question_option_relation as $quiz_option)
              

                @endforeach
                 

                @endforeach

                <input type="submit" value="Submit">

            </form>



        </div>
    </div>
@endsection
