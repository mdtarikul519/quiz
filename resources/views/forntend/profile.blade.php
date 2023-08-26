@extends('forntend.layout.website')
@section('content')
    <div class="container">
        <div class="row " style="padding:40px">
            <h1>   <img src="/{{ Auth::user()->image }}" alt="..."> </h1>
        </div>
    </div>
@endsection
