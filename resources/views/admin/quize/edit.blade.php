@extends('admin.index')
@section('content')
@if (session()->get('success'))
<script>
    Swal.fire(
        'Good job!',
        '{{ session()->get('success') }}',
        'success'
    )
</script>   
@endif
    

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="{{ route('admin.quiz.update',$data->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                
                        <div class="card-body">
    
                            <div class="from-group col-md-6">
                                <label for="">quiz Name:</label>
                                <input value="{{ $data->title }}" type="text" name="title" class="form-control" />
                                @error('quiz_name')
                                    <div class="text-danger">{{ $quiz_name }}</div>
                                @enderror
                            </div>



                            <div style="margin-top:8px; margin-left:16px">
                                <button class="btn btn-outline-info">Update</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
@endsection
