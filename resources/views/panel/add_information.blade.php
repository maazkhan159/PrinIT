@extends('layouts.panel')

@section('body_content')
@push('css')
    <style>
        .img-thumbnail{
            max-width: 150px;
            height: 150px;
        }
    </style>
    @endpush

    <!-- Page Content -->
    <div class="page-content">
        <!-- Page Breadcrumb -->
        <div class="page-breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="fa fa-info"></i>
                    <a href="">Add Return Address</a>
                </li>
                </ul>
        </div>
        <!-- /Page Breadcrumb -->
        <!-- Page Header -->
        <div class="page-header position-relative">
            <div class="header-title">
                <h1>
                    Add Return Address
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
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-xs-12">
                            <div class="widget radius-bordered">

                                <div class="widget-body">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <form id="registrationForm" method="post" action="{{ url('/save_address') }}" accept-charset="utf-8" enctype="multipart/form-data" class="form-horizontal"
                                          data-bv-message="This value is not valid"
                                          data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
                                          data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
                                          data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">
                                        <div class="form-title">
                                            Add Return Address
                                        </div>

                                        <div class="form-group">
                                            <label class="col-lg-4 control-label">Address</label>
                                            <div class="col-lg-4">
                                                <input type="text" class="form-control" name="address"></div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-4 control-label">Country Name</label>
                                            <div class="col-lg-4">
                                                <input type="text" class="form-control" name="country">
                                            </div>


                                        </div>

                                        <div class="form-group">
                                            <label class="col-lg-4 control-label">City Name</label>
                                            <div class="col-lg-4">
                                                <input type="text" class="form-control" name="city">
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-lg-4 control-label">Postal code</label>
                                            <div class="col-lg-4">
                                                <input class="form-control" name="postal_code" type="text">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-lg-4 control-label">State</label>
                                            <div class="col-lg-4">
                                                <input class="form-control" name="state" type="text">
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-lg-4 control-label">Upload Logo</label>
                                            <div class="col-lg-4">
                                                <input name="logo" id="fileToUpload"
                                                     type="file">

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-lg-offset-4 col-lg-8">
                                                <input class="btn btn-palegreen" type="submit" value="Submit"/>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                                </form>

                            </div>

                        </div>

                    </div>
                    <div class="col-xs-12 col-md-12">
                        <div class="widget">
                            <div class="widget-header ">
                                <span class="widget-caption">Return Address Details</span>
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
                                        <th>
                                            Sr. No
                                        </th>
                                        <th>
                                           Return Address
                                        </th>
                                        <th>
                                            Logo
                                        </th>
                                         <th>
                                            Actions
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($addresses as $address)
                                    <tr>
                                        <td>
                                            {{$address->id}}
                                        </td>
                                        <td>
                                            {{$address->address}}   {{$address->city}}  {{$address->state}}  {{$address->country}}  {{$address->postal_code}}

                                        </td>
                                        <td>

                                            <img src="{{URL::to ($address->logo)}}" alt="log" class="img-responsive img-thumbnail">
                                        </td>
                                        <td>
                                            <a href="{{ url('/delete/address/'.$address->id) }}" class="btn btn-danger btn-xs delete"><i
                                                        class="fa fa-trash-o"></i> Delete</a>
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
        <!-- /Page Content -->

    </div>


@endsection