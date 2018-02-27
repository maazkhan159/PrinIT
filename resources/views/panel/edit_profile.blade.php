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
                <li class="active">Edit Profile</li>
            </ul>
        </div>
        <!-- /Page Breadcrumb -->
        <!-- Page Header -->
        <div class="page-header position-relative">
            <div class="header-title">
                <h1>
                    Edit Profile
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
                                            Edit Profile
                                        </div>

                                        <div class="form-group">
                                            <label class="col-lg-4 control-label">Email</label>
                                            <div class="col-lg-4">
                                                <input type="text" class="form-control" name="username"
                                                       data-bv-message="The username is not valid"
                                                       data-bv-notempty="true"
                                                       data-bv-notempty-message="The username is required and cannot be empty"
                                                       data-bv-regexp="true"
                                                       data-bv-regexp-regexp="[a-zA-Z0-9_\.]+"
                                                       data-bv-regexp-message="The username can only consist of alphabetical, number, dot and underscore"
                                                       data-bv-stringlength="true"
                                                       data-bv-stringlength-min="6"
                                                       data-bv-stringlength-max="30"
                                                       data-bv-stringlength-message="The username must be more than 6 and less than 30 characters long"
                                                       data-bv-different="true"
                                                       data-bv-different-field="password"
                                                       data-bv-different-message="The username and password cannot be the same as each other"/>
                                            </div>
                                        </div>
                                        <!-- <div class="form-group">
                                            <label class="col-lg-4 control-label">Country Name</label>
                                            <div class="col-lg-4">
                                                <div>

                                    <select id="e1" style="width:100%;">
                                        <option Value="">Select Project Name
                                        <option value="HR" />HRIS
                                        <option value="IA" />IASB
                                        <option value="HR" />HRS
                                        <option value="PM" />PPRMP
                                        <option value="ND" />NDP
                                        <option value="CO" />Colorado
                                        <option value="CT" />Connecticut
                                        <option value="DE" />Delaware
                                        <option value="FL" />Florida</option>

                                    </select>
                                            </div>
                                        </div></div>

                                         <div class="form-group">
                                            <label class="col-lg-4 control-label">City Name</label>
                                            <div class="col-lg-4">
                                                <div>

                                    <select id="e1" style="width:100%;">
                                        <option Value="">Select Project Name
                                        <option value="HR" />HRIS
                                        <option value="IA" />IASB
                                        <option value="HR" />HRS
                                        <option value="PM" />PPRMP
                                        <option value="ND" />NDP
                                        <option value="CO" />Colorado
                                        <option value="CT" />Connecticut
                                        <option value="DE" />Delaware
                                        <option value="FL" />Florida</option>

                                    </select>
                                            </div>
                                        </div></div> -->
                                        <div class="form-group">
                                            <label class="col-lg-4 control-label">Name</label>
                                            <div class="col-lg-4">
                                                <input type="text" class="form-control" name="username"
                                                       data-bv-message="The username is not valid"
                                                       data-bv-notempty="true"
                                                       data-bv-notempty-message="The username is required and cannot be empty"
                                                       data-bv-regexp="true"
                                                       data-bv-regexp-regexp="[a-zA-Z0-9_\.]+"
                                                       data-bv-regexp-message="The username can only consist of alphabetical, number, dot and underscore"
                                                       data-bv-stringlength="true"
                                                       data-bv-stringlength-min="6"
                                                       data-bv-stringlength-max="30"
                                                       data-bv-stringlength-message="The username must be more than 6 and less than 30 characters long"
                                                       data-bv-different="true"
                                                       data-bv-different-field="password"
                                                       data-bv-different-message="The username and password cannot be the same as each other"/>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-lg-4 control-label">Contact No.</label>
                                            <div class="col-lg-4">
                                                <input class="form-control" name="email" type="email"
                                                       data-bv-emailaddress="true"
                                                       data-bv-emailaddress-message="The input is not a valid email address"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-4 control-label">Gender</label>
                                            <div class="col-lg-4">
                                                <div>

                                                    <select id="e1" style="width:100%;">
                                                        <option Value="">Select Project Name
                                                        <option value="HR"/>
                                                        Male
                                                        <option value="IA"/>
                                                        Female


                                                    </select>
                                                </div>
                                            </div>
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
                                                       data-bv-different-message="The password cannot be the same as username"/>
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
                                                       data-bv-different-message="The password cannot be the same as username"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-4 control-label">Edit Image</label>
                                            <div class="col-lg-4">
                                                <input name="fileToUpload" id="fileToUpload"
                                                       data-bv-field="fileToUpload" type="file">

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-lg-offset-4 col-lg-8">
                                                <input class="btn btn-palegreen" type="submit" value="Update"/>
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
