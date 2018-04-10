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
                                    <div class="databox-text darkgray" style="font-size: 14px;">Total No Of Items( <span>
                                            {{$data['count']}} )
                                        </span></div>
                                    <span class="databox-number themesecondary"></span>

                                    <div class="databox-stat themesecondary radius-bordered">
                                        <i class="stat-icon icon-lg fa fa-users"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="databox bg-white radius-bordered">
                                <div class="databox-left bg-themethirdcolor">
                                    <div class="databox-piechart">
                                        <i class="stat-icon icon-lg fa fa-check" style="font-size:38px"></i>
                                    </div>
                                </div>
                                <div class="databox-right" >
                                    <div class="databox-text darkgray" style="font-size: 14px;">Max Sale (
                                    <span>
                                         {{$data['max_sale']}} )
                                    </span></div>
                                    <span class="databox-number themethirdcolor"></span>

                                    <div class="databox-stat themethirdcolor radius-bordered">
                                        <i class="stat-icon  icon-lg fa fa-check"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="databox bg-white radius-bordered">
                                <div class="databox-left bg-themeprimary">
                                    <div class="databox-piechart">
                                        <i class="stat-icon icon-lg fa fa-building" style="font-size:38px"></i>
                                    </div>
                                </div>
                                <div class="databox-right">
                                    <div class="databox-text darkgray" style="font-size: 14px;">Total of sale (<span>
                                         {{$data['sum_of_sale']}} )
                                    </span></div>
                                    <span class="databox-number themeprimary"></span>

                                    <div class="databox-state bg-themeprimary">
                                        <i class="fa fa-building"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--   <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <div class="row">
                          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                              <div class="databox bg-white radius-bordered">
                                  <div class="databox-left bg-themesecondary">
                                      <div class="databox-piechart">
                                          <i class="stat-icon icon-lg fa fa-times" style="font-size:38px"></i>
                                      </div>
                                  </div>
                                  <div class="databox-right">
                                      <div class="databox-text darkgray" style="font-size: 14px;">Inactive Employee's</div>
                                      <span class="databox-number themesecondary"></span>

                                      <div class="databox-stat themesecondary radius-bordered">
                                          <i class="stat-icon icon-lg fa fa-times"></i>
                                      </div>
                                  </div>
                              </div>
                          </div>


                      </div>
                  </div>

              </div> -->

            <div class="row" style="width: 100%">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="widget">
                        <div class="widget-header">


                            <div class="widget-buttons">
                                <a href="#" data-toggle="collapse">
                                    <i class="fa fa-minus"></i>
                                </a>

                            </div>
                        </div>

                        <div class="widget-body">

                            <div class="chartcontainer">
                                <canvas id="pie-chart" width="100%"></canvas>



                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="widget">
                        <div class="widget-header">


                            <div class="widget-buttons">
                                <a href="#" data-toggle="collapse">
                                    <i class="fa fa-minus"></i>
                                </a>

                            </div>
                        </div>

                        <div class="widget-body">

                            <div class="chartcontainer">
                                <canvas id="pie-chart1" width="100%"></canvas>



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

        <script>
            var gridbordercolor = "#eee";




            $(window).bind("load", function () {
                new Chart(document.getElementById("pie-chart"), {
                    type: 'pie',
                    data: {
                        labels: ["Male", "Female"],
                        datasets: [{
                            label: "abc ()",
                            backgroundColor: ["#2377c3d9", "#f50059d9"],
                            data: [3,5]
                        }]
                    },
                    options: {
                        title: {
                            display: true,
                            text: 'Total No Of Male And Female'
                        }
                    }
                });



            });

        </script>

        <script>
            var gridbordercolor = "#eee";




            $(window).bind("load", function () {
                new Chart(document.getElementById("pie-chart1"), {
                    type: 'pie',
                    data: {
                        labels: ["Local Trainings", "Foreign Trainings"],
                        datasets: [{
                            label: "abc ()",
                            backgroundColor: ["#bd1010", "#048e16d9"],
                            data: [5,4]
                        }]
                    },
                    options: {
                        title: {
                            display: true,
                            text: 'Total No Of Local And Foreign Trainings'
                        }
                    }
                });



            });

        </script>
    @endpush

@endsection
