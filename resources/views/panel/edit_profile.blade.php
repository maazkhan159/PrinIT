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
                                    <form id="registrationForm" method="post" action="{{url('user/edit')}}"
                                          accept-charset="utf-8" enctype="multipart/form-data"
                                          class="form-horizontal"
                                          data-bv-message="This value is not valid"
                                          data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
                                          data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
                                          data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">
                                        {{ method_field('PATCH') }}
                                        <div class="form-title">
                                            Edit Profile
                                        </div>

                                        <div class="form-group">
                                            <label class="col-lg-4 control-label">Email</label>
                                            <div class="col-lg-4">
                                                <input type="text" class="form-control" value="{{$user->email}}" readonly/>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-lg-4 control-label">Name</label>
                                            <div class="col-lg-4">
                                                <input type="text" class="form-control" value="{{$user->name}}" name="name"/>
                                               </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-lg-4 control-label">Contact No.</label>
                                            <div class="col-lg-4">
                                                <input type="text" class="form-control" value="{{$user->contact_no}}" name="contact_no"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-4 control-label">Gender</label>
                                            <div class="col-lg-4">
                                                <div>

                                                    <select id="e1" style="width:100%;" name="gender">
                                                        @if($user->gender == "gender")
                                                            <option value="gender" selected="selected">Gender

                                                        @else
                                                            <option value="gender">Gender

                                                        @endif
                                                            @if($user->gender == "1")
                                                        <option value="1" selected="selected"/>Male
                                                            @else
                                                                <option value="1"/>Male
                                                            @endif
                                                            @if($user->gender == "0")
                                                        <option value="0"  selected="selected"/>Female
                                                            @else
                                                                <option value="0"/>Female
                                                            @endif

                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-lg-4 control-label">Profile Image</label>
                                            <div class="col-lg-4">
                                                <input name="profile_image" id="fileToUpload2"
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
