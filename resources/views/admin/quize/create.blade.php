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
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Quiz Create</h4>

                  
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="{{ route('admin.quiz.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card_header d-flex flex-wrap gap-3 justify-content-between p-4">
                            <a href="" class="btn btn-outline-info"> <i class="fa fa-arrow-left">Back</i></a>
                        </div>
                        <div class="card-body">


                            <div class="from-group col-md-6">
                                <label for="">quiz Name:</label>
                                <input value="" type="text" name="title" class="form-control" />
                                @error('quiz_name')
                                    <div class="text-danger">{{ $quiz_name }}</div>
                                @enderror
                            </div>


                            <div style="margin-top:8px; margin-left:16px">
                                <button class="btn btn-outline-info">submit</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
@endsection

