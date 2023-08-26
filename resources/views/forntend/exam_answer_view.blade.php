@extends('forntend.layout.website')
@section('content')
    <div class="container" style="margin-left:120px; justify-content: center;">
        <div class="row">
            <div class="col-md-6">

                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    @foreach ($result_details as $item)
                        {{-- @dd($item->optionD) --}}
                        <input type="text" hidden name="user_id" value="{{ $item->user_id }}">
                        <input type="text" hidden name="question_id[]" value="{{ $item->id }}">
                        <input type="text" hidden name="quiz_id" value="{{ $item->quiz_id }}">
                        <h1>{{ $item->question_name }}</h1>
                        <ul>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox"
                                        {{ $item->submit_answer == $item->optionA ? 'checked' : '' }}
                                        value="{{ $item->optionA }}" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        {{ $item->optionA }}
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox"
                                        {{ $item->submit_answer == $item->optionB ? 'checked' : '' }}
                                        value="{{ $item->optionB }}" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        {{ $item->optionB }}
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox"
                                        {{ $item->submit_answer == $item->optionC ? 'checked' : '' }}
                                        value="{{ $item->optionC }}" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        {{ $item->optionC }}
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox"
                                        {{ $item->submit_answer == $item->optionD ? 'checked' : '' }}
                                        value="{{ $item->optionD }}" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        {{ $item->optionD }}
                                    </label>
                                </div>
                                @if ($item->submit_answer == $item->answer)
                                    <h5 class="alrt" style="color:rgb(5, 165, 32)">Correct</h5>
                                @else
                                    <div class="">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            <h5 style="color: #eb0606c2"> <b>Wrong</b></h5>
                                            <h5 style="color: #06eb12c2"> <b> Right Answer: {{ $item->answer }}</b>
                                            </h5>
                                        </label>
                                    </div>
                                @endif



                            </li>
                        </ul>
                    @endforeach
                </form>

            </div>
        </div>
    </div>
@endsection
