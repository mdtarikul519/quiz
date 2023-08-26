@extends('admin.index')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.option.update',$alldata->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group col-md-6">
                                <label for="">Quiz_id</label>
                                <select name="quiz_id"  class="form-control">
                                    @foreach ($quiz as $data)
                                        <option {{ $alldata->quiz_id == $data->id?'selected':''}} value="{{ $data->id }}">{{ $data->title }}</option>
                                    @endforeach
                                </select>
                             </div>


                             <div class="form-group col-md-6">
                                <label for="">question_name</label>
                                <select name="question_id" id="">
                                    @foreach ($questions as $question)
                                         <option {{ $alldata->question_id == $question->id?'selected':'' }} value="{{$question->id }}">{{$question->title }}</option>
                                    @endforeach
                                </select>

                             </div>
                             <div class="form-group col-md-6">
                                 <label for="">Option</label>
                                 <input type="text" value="{{ $alldata->title }}" name="title" class="form-control">
                             </div>
                             <div class="form-group col-md-6">
                              <label for="">Is_correct</label>
                              <input type="number" value="{{ $alldata->is_correct }}" name="is_correct" class="form-control">
                          </div>
    
                              <button>update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
    