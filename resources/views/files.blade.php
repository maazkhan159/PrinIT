@extends('layouts.app')

@section('content')
    <div class="container">
        @if (session('status'))
            <div class="alert alert-success alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong>{{ session('status') }}
            </div>

        @endif
        <h2>Files</h2>

        <table class="table table-hover">
            <thead>
            <tr>
                <th>File Name</th>
                <th>Created At</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($files as $file)
                <tr>
                    <td>{{$file->file_name}}</td>
                    <td>{{$file->created_at->diffForHumans()}}</td>
                    <td><a  href="{{ url('/file/'.$file->id) }}" class="btn btn-primary"><i class="fa fa-print"></i></a>
                        <a  href="{{ url('/delete/file/'.$file->id) }}" class="btn btn-danger"><i class="fa fa-remove"></i></a>
                    </td>
                </tr>
            @endforeach


            </tbody>
        </table>
    </div>
@endsection
