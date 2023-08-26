@extends('admin.index')
@section('content')


    

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Class Create</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">class Template</a></li>
                            <li class="breadcrumb-item active">class managment</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="{{ route('admin.classes.update',$data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card_header d-flex flex-wrap gap-3 justify-content-between p-4">
                            <h2>Studented Create</h2>
                            <a href="" class="btn btn-outline-info"> <i class="fa fa-arrow-left">Back</i></a>
                        </div>
                        <div class="card-body">

                            <div class="from-group col-md-6">
                                <label for="">Class Name:</label>
                                <input value="{{ $data->class_name }}" type="text" name="class_name" class="form-control" />
                                @error('name')
                                    <div class="text-danger">{{ $name }}</div>
                                @enderror
                            </div>

                            <div class="from-group col-md-6">
                                <label for="">Roll :</label>
                                <input type="number" value="{{ $data->class_roll }}"  name="class_roll" class="form-control">

                            </div>

                            <div class="form-group col-md-6 mt-6">
                                <label>Teacher name:</label>
                                <input type="text" value="{{ $data->teacher_name }}"  name="teacher_name" class="form-control">
                            </div>

                            <div class="text-center">
                                <button class="btn btn-outline-info">Update</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
@endsection
