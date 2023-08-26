@extends('admin.index')
@section('content')
    @if (session()->get('update'))
        <script>
            Swal.fire(
                'Good job!',
                '{{ session()->get('update') }}',
                'update'
            )
        </script>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive table_wraper">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                      
                                        <th>quiz</th>
                                        <th style="width: 155px" class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($alldata as $data)
                                        {{-- @dd($data->class_relation) --}}
                                        <tr>
                                            <td>{{ $data->id }}</td>
                                            
                                            <td>{{ $data->title }}</td>
                                          {{-- 
                                            <td>
                                                @if($data->quizall_question)
                                               Total Questions:  {{ $data->quizall_question->where('quiz_id',$data->id)->count('question_name') }}
                                               <br> <a href="" class="btn btn-info">View Details</a>
                                            @endif
                                           </td>
                                           <td>
                                            @if($data->total_examiner)
                                           Examineer: {{ $data->total_examiner->where('quiz_id',$data->id)->pluck('user_id')->unique()->count('user_id') }}
                                           <br> <a href="{{ route('examinner_details',$data->id) }}" class="btn btn-info">View Details</a>
                                           @endif
                                           </td> --}}
                                            <td>
                                                <div class="table_action">
                                                    <a class="btn btn-sm btn-outline-info"
                                                        href="{{ route('admin.quiz.edit', $data->id) }}">Edit</i></a>
                                                    {{-- <li><a class="btn btn-sm btn-outline-warning" href="">View</i></a></li> --}}
                                                    <a class="btn btn-sm btn-outline-danger"
                                                        onclick="return confirm('Do you want to confirm')"
                                                        href="{{ route('admin.quiz.delete', $data->id) }}">Delete</i></a>

                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>   
        </div>
    </div>
@endsection
