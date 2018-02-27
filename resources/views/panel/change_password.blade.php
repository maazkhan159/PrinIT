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
                                            <form id="registrationForm" method="post" class="form-horizontal"
                                                  data-bv-message="This value is not valid"
                                                  data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
                                                  data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
                                                  data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">
                                                <div class="form-title">
                                                   Edit Password
                                                </div>
                                                
                                                 

                                                <div class="form-group">
                                                    <label class="col-lg-4 control-label">Password</label>
                                                    <div class="col-lg-4">
                                                        <input type="password" class="form-control" name="password"
                                                               data-bv-notempty="true"
                                                               data-bv-notempty-message="The password is required and cannot be empty"
                                                               data-bv-identical="true"
                                                               data-bv-identical-field="confirmPassword"
                                                               data-bv-identical-message="The password and its confirm are not the same"
                                                               data-bv-different="true"
                                                               data-bv-different-field="username"
                                                               data-bv-different-message="The password cannot be the same as username" />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-4 control-label">Retype password</label>
                                                    <div class="col-lg-4">
                                                        <input type="password" class="form-control" name="confirmPassword"
                                                               data-bv-notempty="true"
                                                               data-bv-notempty-message="The confirm password is required and cannot be empty"
                                                               data-bv-identical="true"
                                                               data-bv-identical-field="password"
                                                               data-bv-identical-message="The password and its confirm are not the same"
                                                               data-bv-different="true"
                                                               data-bv-different-field="username"
                                                               data-bv-different-message="The password cannot be the same as username" />
                                                    </div>
                                                </div>
                                                
                                                     <div class="form-group">
                                                    <div class="col-lg-offset-4 col-lg-8">
                                                        <input class="btn btn-palegreen" type="submit" value="Update Password" />
                                                    </div>

                                                    </div>

                                                </div>
                                            </form>
                                    
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
