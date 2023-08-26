@extends('admin.index')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.question.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group col-md-6">
                                <label for="">Quiz_id</label>
                                <select name="quiz_id" id="" class="form-control">
                                    @foreach ($quiz as $data)
                                        <option value="{{ $data->id }}">{{ $data->title }}</option>
                                    @endforeach
                                </select>
                             </div>
                             <div class="form-group col-md-6">
                                 <label for="">question_name</label>
                                 <input type="text" name="title" class="form-control">
                             </div>
                             <div class="form-group col-md-6">
                                <label for="">Correct_answer</label>
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
