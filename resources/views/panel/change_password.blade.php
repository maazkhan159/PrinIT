@extends('layouts.panel')

@section('body_content')

    <!-- Page Content -->
    <div class="page-content">
        <!-- Page Breadcrumb -->
        <div class="page-breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="../../../user/index.html">Home</a>
                </li>
                <li>Dashboard</li>
                <li class="active">Change Password</li>
            </ul>
        </div>
        <!-- /Page Breadcrumb -->
        <!-- Page Header -->
        <div class="page-header position-relative">
            <div class="header-title">
                <h1>
                    Change Password
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
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-xs-12">
                            <div class="widget radius-bordered">

                                <div class="widget-body">
                                    <form id="registrationForm" method="post" action="{{url('user/reset_password')}}"
                                          class="form-horizontal">
                                        <div class="form-title">
                                            Edit Password
                                        </div>
                                        {{ method_field('PATCH') }}

                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        <div class="form-group">
                                            <label class="col-lg-4 control-label">Password</label>
                                            <div class="col-lg-4">
                                                <input type="password" class="form-control" name="password"
                                                />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-lg-4 control-label">Retype password</label>
                                            <div class="col-lg-4">
                                                <input type="password" class="form-control" name="password_confirmation"
                                                />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-lg-offset-4 col-lg-8">
                                                <input class="btn btn-palegreen" type="submit" value="Update Password"/>
                                            </div>

                                        </div>
                                    </form>
                                </div>


                            </div>

                        </div>

                    </div>

                </div>


            </div>
            <!-- /Page Body -->
        </div>
        <!-- /Page Content -->

    </div>

@endsection
