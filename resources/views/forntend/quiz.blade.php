@extends('forntend.layout.website')
@section('content')
    <div class="container">
        <div class="row "  style="padding:40px">
            @foreach ($data as $item)
                <div class="card mb-6" style="width: 18rem;margin: 30px;border: 1px solid;">
                    <div class="card-body">
                        <p class="card-text">{{ $item->title }}</p>
                        <a href="{{ route('quiz_question',$item->id) }}" class="btn btn-primary">view Exam</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
