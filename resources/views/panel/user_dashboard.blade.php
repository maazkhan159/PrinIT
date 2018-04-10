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
                                <div class="databox-text darkgray" style="font-size: 14px;">Total No Of Amazon Csv
                                    <span>
                                        (<b>{{$data['amazon']}}</b>)
                                     </span>
                                </div>
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
                                 <div class="databox-text darkgray" style="font-size: 14px;">Total No Of Ebay Csv <span>
                                         (<b>{{$data['ebay']}}</b>)
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
                                 <div class="databox-text darkgray" style="font-size: 14px;">Total No Of Simple Csv
                                     <span>
                                         (<b>{{$data['simple']}}</b>)
                                     </span>
                                 </div>
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
      labels: ["Amazon", "Ebay", "Simple"],
      datasets: [{
        label: "abc ()",
        backgroundColor: ["#fb6e52", "#ffce55","#2dc3e8"],
        data: ["{{$data['amazon']}}","{{$data['ebay']}}","{{$data['simple']}}"]
      }]
    },
    options: {
      title: {
        display: true,
        text: 'Total No Of Files '
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
        labels: ["Amazon", "Ebay", "Simple"],
        datasets: [{
            label: "abc ()",
            backgroundColor: ["#fb6e52", "#ffce55","#2dc3e8"],
            data: ["{{$current_month['amazon']}}","{{$current_month['ebay']}}","{{$current_month['simple']}}"]
        }]
    },
    options: {
        title: {
            display: true,
            text: 'Total No Of Files Of current month'
        }
    }

});


           
        });

</script>
    @endpush

@endsection
