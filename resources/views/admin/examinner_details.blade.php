@extends('admin.index')
@section('content')
<div class="container">
    <table class="table table-striped">
        <h2>Examinner list</h2>
        <thead>
            <tr>
                <th>name</th>
                <th>result</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($quiz_result as $data )
                
            <tr>
                <td>
                    @foreach($data->users_reations as $item)
                    {{ $item->name }}
                    @endforeach

                </td>
                <td>{{ $data->marks}} out of {{ $data->questions }}</td>
                <td>
                    
                    <a class="btn btn-danger" href="">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>
</div>
@endsection