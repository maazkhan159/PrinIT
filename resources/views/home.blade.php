@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <form method="POST" action="{{ url('/parsing') }}" accept-charset="utf-8" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <input type="file" name="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">Upload your csv file</small>
                        </div>

                        <input type="submit" name="btn_submit"  class="btn btn-primary" value="Upload File" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
