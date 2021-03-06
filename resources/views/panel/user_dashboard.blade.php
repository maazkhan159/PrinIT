@extends('layouts.panel')

@section('body_content')

    <!-- Page Content -->
        <div class="page-content">
            <!-- Page Breadcrumb -->
            <div class="page-breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <i class="fa fa-home"></i>
                        <a href="index.html">Home</a>
                    </li>
                    <li class="active">Dashboard</li>
                </ul>
            </div>
            <!-- /Page Breadcrumb -->
            <!-- Page Header -->
            <div class="page-header position-relative">
                <div class="header-title">
                    <h1>
                        Dashboard
                    </h1>
                </div>
                <!--Header Buttons-->
                <div class="header-buttons">
                    <a class="sidebar-toggler" href="#">
                        <i class="fa fa-arrows-h"></i>
                    </a>
                    <a class="refresh" id="refresh-toggler" href="">
                        <i class="glyphicon glyphicon-refresh"></i>
                    </a>
                    <a class="fullscreen" id="fullscreen-toggler" href="#">
                        <i class="glyphicon glyphicon-fullscreen"></i>
                    </a>
                </div>
                <!--Header Buttons End-->
            </div>
            <!-- /Page Header -->
            <!-- Page Body -->
            <div class="page-body">

                @if (session('status'))
                    <div class="alert alert-success alert-dismissable">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Success!</strong>{{ session('status') }}
                    </div>

                @endif
                @if (session('error'))
                    <div class="alert alert-danger alert-dismissable">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Error!</strong>{{ session('error') }}
                    </div>

                @endif

                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-xs-12">
                        <div class="widget">
                            <div class="widget-header bordered-bottom bordered-themeprimary">
                                <i class="widget-icon fa fa-tasks themeprimary"></i>
                                <span class="widget-caption themeprimary">CSV PARSING</span>
                            </div><!--Widget Header-->
                            <div class="widget-body no-padding">
                                <div class="task-container padding-20 whitebg">

                                    <form method="POST" action="{{ url('/parsing') }}" accept-charset="utf-8" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="exampleInputFile">File input</label>
                                            <input type="file" name="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                                            <small id="fileHelp" class="form-text text-muted">Upload your csv file</small>
                                        </div>

                                        <input type="submit" name="btn_submit"  class="btn btn-primary" value="Upload File" />
                                    </form>

                                </div>
                            </div><!--Widget Body-->
                        </div>

                    </div>
                    <div class="col-xs-12 col-md-12">
                        <div class="widget">
                            <div class="widget-header ">
                                <span class="widget-caption">Parsing Data Table</span>
                                <div class="widget-buttons">
                                    <a href="#" data-toggle="maximize">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                    <a href="#" data-toggle="collapse">
                                        <i class="fa fa-minus"></i>
                                    </a>
                                    <a href="#" data-toggle="dispose">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="widget-body">
                                <table class="table table-striped table-bordered table-hover" id="simpledatatable">
                                    <thead>
                                    <tr>
                                        <th>File Name</th>
                                        <th>Created At</th>
                                        <th>Select Address</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($files as $file)
                                        <tr>
                                            <td>{{$file->file_name}}</td>
                                            <td>{{$file->created_at->diffForHumans()}}</td>
                                            <td>
                                                <select class="form-control form-control-sm select-address" style="width:100%;">
                                                    @foreach ($addresses as $address)
                                                    <option value="{{$address->id}}">{{$address->address}}   {{$address->city}}  {{$address->state}}  {{$address->country}}  {{$address->postal_code}}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td>
                                                <a href="{{ url('/file/'.$file->id) }}"  class="btn btn-info btn-xs print printbtn" ><i class="fa fa-print"></i>Print</a>

                                                <a href="{{ url('/delete/file/'.$file->id) }}" class="btn btn-danger btn-xs delete"><i class="fa fa-trash-o"></i> Delete</a>
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
            <!-- /Page Body -->
        </div>
    @push('scripts')
        <script>
            $( document ).ready(function() {
               $('.printbtn').on('click',function () {
                   var parent  = $(this).parent().parent();

                   var address_id  = $(parent).find('.select-address option:selected').attr('value')
                   var delete_url = $(this).attr('href')+"?address_id="+address_id;
                   $(this).attr('href',delete_url);

               })
            });
        </script>
    @endpush

@endsection
