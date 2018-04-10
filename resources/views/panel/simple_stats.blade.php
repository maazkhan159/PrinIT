@extends('layouts.panel')

@section('body_content')

    <div class="page-content">
        <!-- Page Breadcrumb -->
        <div class="page-breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="#">Dashboard</a>
                </li>
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
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="databox bg-white radius-bordered">
                                <div class="databox-left bg-themesecondary">
                                    <div class="databox-piechart">
                                        <i class="stat-icon icon-lg fa fa-users" style="font-size:38px"></i>
                                    </div>
                                </div>
                                <div class="databox-right">
                                    <div class="databox-text darkgray" style="font-size: 14px;">Total No Of Items <span>
                                            <b>(
                                                {{$data['count']}})
                                                </b>
                                        </span></div>
                                    <span class="databox-number themesecondary"></span>

                                    <div class="databox-stat themesecondary radius-bordered">
                                        <i class="stat-icon icon-lg fa fa-users"></i>
                                    </div>
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
    @push('scripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>


    @endpush

@endsection
