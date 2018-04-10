@extends('layouts.panel')

@section('body_content')

    <!-- Page Content -->
    <div class="page-content">
        <!-- Page Breadcrumb -->
        <div class="page-breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="fa fa-print"></i>
                    <a href="#">Employees</a>
                </li>

            </ul>
        </div>
        <!-- /Page Breadcrumb -->
        <!-- Page Header -->
        <div class="page-header position-relative">
            <div class="header-title">
                <h1>
                    Employees
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

                <div class="col-xs-12 col-md-12">
                    <div class="widget">
                        <div class="widget-header ">
                            <span class="widget-caption"> Employees List</span>
                            <div class="widget-buttons">
                                <a href="#" data-toggle="maximize">
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a href="#" data-toggle="collapse">
                                    <i class="fa fa-minus"></i>
                                </a>

                            </div>
                        </div>

                        <div class="widget-body">
                            <table class="table table-striped table-bordered table-hover" id="simpledatatable">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>contact No</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->contact_no}}</td>
                                        <td>{{$user->created_at->diffForHumans()}}</td>
                                        <td>
                                            @if(is_null($user->deleted_at))
                                                <a href="{{ url('/employees/'.$user->id.'/delete') }}" class="btn btn-danger btn-xs delete">InActive</a>
@else
                                                <a href="{{ url('/employees/'.$user->id.'/delete') }}" class="btn btn-danger btn-xs delete">Active</a>

                                            @endif
                                           <a href="{{ url('/employees/'.$user->id.'/stats') }}" class="btn btn-purple btn-xs "><i class="fa fa-line-chart"></i> </a>

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
