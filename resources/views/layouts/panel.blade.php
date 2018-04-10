<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <title>Easy Label Printing</title>
    {{--<link rel="stylesheet" href="{{ URL::to('/assets/css/bootstrap.css') }}">--}}
    <meta name="description" content="Dashboard" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link rel="shortcut icon" href="{{URL::to ('/assets/images/favicon.png')}}" type="image/x-icon">
    <!--Basic Styles-->
    <link href="{{URL::to ('/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link id="bootstrap-rtl-link" href="" rel="stylesheet" />
    <link href="{{URL::to ('/assets/css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{URL::to ('/assets/css/weather-icons.min.css')}}" rel="stylesheet" />

    <!--Fonts-->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    <!--Beyond styles-->
    <link  href="{{URL::to ('/assets/css/beyond.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::to ('/assets/css/demo.min.css')}}" rel="stylesheet" />
    <link href="{{URL::to ('/assets/css/typicons.min.css')}}" rel="stylesheet" />
    <link href="{{URL::to ('/assets/css/animate.min.css')}}" rel="stylesheet" />
    <link href="{{URL::to ('/assets/css/dataTables.bootstrap.css')}}" rel="stylesheet" />

    <!--Skin Script: Place this script in head to load scripts for skins and rtl support-->
    <script src="{{URL::to ('/assets/js/skins.min.js')}}"></script>
    @stack('css')
</head>
<!-- /Head -->
<!-- Body -->
<body>
<!-- Loading Container -->
<div class="loading-container">
    <div class="loader"></div>
</div>
<!--  /Loading Container -->
<!-- Navbar -->
<div class="navbar">
    <div class="navbar-inner" style="background: #f77924;">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small>
                        <img src="{{URL::to ('assets/images/logo123.png')}}" alt="" />
                    </small>
                </a>
            </div>
            <!-- /Navbar Barnd -->
            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings --->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class=" dropdown-toggle" data-toggle="dropdown" title="Notifications" href="#">

                            </a>
                            <!--Notification Dropdown-->


                        @if(Auth::check())
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    @if(Auth::user()->profile_image)
                                        <img src="{{URL::to (Auth::user()->profile_image)}}">
                                    @else
                                    <img src="{{URL::to ('assets/images/avatars/adam-jansen.jpg')}}">
                                    @endif
                                </div>
                                <section>
                                    <h2><span class="profile"><span>{{Auth::user()->name}}</span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area" style="width: 140%;">
                                <li class="username"><a>{{Auth::user()->name}}</a></li>
                                <li class="email"><a style="color: #5db2ff">{{Auth::user()->email}}</a></li>
                                <li class="email" style="color: #5db2ff">{{Auth::user()->contact_no}}</li>
                                <!--Avatar Area-->
                                <li>
                                    <div class="avatar-area">
                                        @if(Auth::user()->profile_image)
                                            <img src="{{URL::to (Auth::user()->profile_image)}}" class="avatar">
                                        @else
                                            <img src="{{URL::to ('assets/images/avatars/adam-jansen.jpg')}}" class="avatar">
                                        @endif



                                    </div>
                                </li>
                                <!--Avatar Area-->

                                <!--Theme Selector Area-->

                                <!--/Theme Selector Area-->
                                <li class="dropdown-footer">
                                    <a href="{{ url('/logout') }}" style="color: #5db2ff">
                                        Sign out
                                    </a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                        @endif

                    </ul>


                </div>
            </div>

        </div>
    </div>
</div>
<!-- Main Container -->
<div class="main-container container-fluid">
    <!-- Page Container -->
    <div class="page-container">

        <!-- Page Sidebar -->
        <div class="page-sidebar" id="sidebar">
            <!-- Page Sidebar Header-->
            <div class="sidebar-header-wrapper">

            </div>
            <!-- /Page Sidebar Header -->
            <!-- Sidebar Menu -->
            <ul class="nav sidebar-menu">
                <!--Dashboard-->
                <li class="{{ Request::is('user_dashboard') ? 'active' : '' }}">
                    <a href="{{ url('user_dashboard')}}">
                        <i class="menu-icon glyphicon glyphicon-home"></i>
                        <span class="menu-text"> Dashboard </span>
                    </a>
                </li>
                <!-- <li class="{{ Request::is('amazon') ? 'active' : '' }}">
                    <a href="{{ url('amazon')}}">
                        <i class="menu-icon glyphicon glyphicon-home"></i>
                        <span class="menu-text"> Amazon </span>
                    </a>
                </li> -->
            <li>
        <a href="#" class="menu-dropdown open">
            <i class="menu-icon fa fa-print"></i>
            <span class="menu-text"> Print Label </span>

            <i class="menu-expand"></i>
        </a>

        <ul class="submenu">
            <li class="{{ Request::is('ebayfile') ? 'active' : '' }}" ><a href="{{ url('ebayfile')}}" title="EBay">
                
                    <span class="menu-text">Ebay</span>
                </a>
            </li>
           
             <li><a href="#" title="Amazon" class="menu-dropdown">
                    <span class="menu-text">Amazon</span>
                    <i class="menu-expand"></i>
                </a>
                <ul class="submenu">
                    <li class="{{ Request::is('amazon') ? 'active' : '' }}"><a href="{{ url('amazon')}}" title="amazon csv">
                        <span class="menu-text">Amazon Csv</span>
                    </a>
                        
                    </li>
                    <li><a  href="{{ url('amazontext')}}"  title="text file">
                        <span class="menu-text">Amazon Text File</span>
                    </a>
                        
                    </li>


                </ul>
            </li>
            
            <li class="{{ Request::is('simple') ? 'active' : '' }}"><a href="{{ url('simple')}}" title="Other Format">
                
                    <span class="menu-text">Other Formats</span>
                </a>
            </li>
            
        </ul>
    </li>
    

                <!--Databoxes-->
                <li class="{{ Request::is('add_information') ? 'active' : '' }}">
                    <a href="{{ url('add_information')}}">
                        <i class="menu-icon fa fa-info"></i>
                        <span class="menu-text">Add Information</span>
                    </a>
                </li>
                <li class="{{ Request::is('edit_profile') ? 'active' : '' }}">
                    <a href="{{ url('edit_profile')}}">
                        <i class="menu-icon fa fa-edit"></i>
                        <span class="menu-text">Edit Profile</span>
                    </a>
                </li>
                <li class="{{ Request::is('change_password') ? 'active' : '' }}">
                    <a href="{{ url('change_password')}}">
                        <i class="menu-icon fa fa-key"></i>
                        <span class="menu-text">Change Password</span>
                    </a>
                </li>
                <li class="{{ Request::is('logout') ? 'active' : '' }}">
                    <a href="{{ url('/logout') }}">
                        <i class="menu-icon fa fa-sign-out"></i>
                        <span class="menu-text">Logout</span>
                    </a>
                </li>
            </ul>
            <!-- /Sidebar Menu -->
        </div>
        <!-- /Page Sidebar -->
@yield('body_content')
    </div>
</div>

<script src="{{URL::to ('/assets/js/jquery.min.js')}}"></script>
<script src="{{URL::to ('/assets/js/bootstrap.min.js')}}"></script>
<script src="{{URL::to ('/assets/js/slimscroll/jquery.slimscroll.min.js')}}"></script>

<!--Beyond Scripts-->
<script src="{{URL::to ('/assets/js/beyond.js')}}"></script>

<script src="{{URL::to ('/assets/js/datatable/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::to ('/assets/js/datatable/ZeroClipboard.js')}}"></script>
<script src="{{URL::to ('/assets/js/datatable/dataTables.tableTools.min.js')}}"></script>
<script src="{{URL::to ('/assets/js/datatable/dataTables.bootstrap.min.js')}}"></script>
<script src="{{URL::to ('/assets/js/datatable/datatables-init.js')}}"></script>

@stack('scripts')

<script>
    // If you want to draw your charts with Theme colors you must run initiating charts after that current skin is loaded
    function myFunction() {
        window.print();
    }
    InitiateSimpleDataTable.init();
    InitiateEditableDataTable.init();
    InitiateExpandableDataTable.init();
    InitiateSearchableDataTable.init();
    $(window).bind("load", function () {

        /*Sets Themed Colors Based on Themes*/
        themeprimary = getThemeColorFromCss('themeprimary');
        themesecondary = getThemeColorFromCss('themesecondary');
        themethirdcolor = getThemeColorFromCss('themethirdcolor');
        themefourthcolor = getThemeColorFromCss('themefourthcolor');
        themefifthcolor = getThemeColorFromCss('themefifthcolor');


        var options = {
            legend: {
                show: false
            },
            xaxis: {
                tickDecimals: 0,
                color: '#f3f3f3'
            },
            yaxis: {
                min: 0,
                color: '#f3f3f3',
                tickFormatter: function (val, axis) {
                    return "";
                },
            },
            grid: {
                hoverable: true,
                clickable: false,
                borderWidth: 0,
                aboveData: false,
                color: '#fbfbfb'

            },
            tooltip: true,
            tooltipOpts: {
                defaultTheme: false,
                content: " <b>%x May</b> , <b>%s</b> : <span>%y</span>",
            }
        };
        var placeholder = $("#dashboard-chart-visits");
        var plot = $.plot(placeholder, data2, options);

        //------------------------------Real-Time Chart-------------------------------------------//
        var realTimedata = [],
            realTimedata2 = [],
            totalPoints = 300;

        var getSeriesObj = function () {
            return [
                {
                    data: getRandomData(),
                    lines: {
                        show: true,
                        lineWidth: 1,
                        fill: true,
                        fillColor: {
                            colors: [
                                {
                                    opacity: 0
                                }, {
                                    opacity: 1
                                }
                            ]
                        },
                        steps: false
                    },
                    shadowSize: 0
                }, {
                    data: getRandomData2(),
                    lines: {
                        lineWidth: 0,
                        fill: true,
                        fillColor: {
                            colors: [
                                {
                                    opacity: .5
                                }, {
                                    opacity: 1
                                }
                            ]
                        },
                        steps: false
                    },
                    shadowSize: 0
                }
            ];
        };
        function getRandomData() {
            if (realTimedata.length > 0)
                realTimedata = realTimedata.slice(1);

            // Do a random walk

            while (realTimedata.length < totalPoints) {

                var prev = realTimedata.length > 0 ? realTimedata[realTimedata.length - 1] : 50,
                    y = prev + Math.random() * 10 - 5;

                if (y < 0) {
                    y = 0;
                } else if (y > 100) {
                    y = 100;
                }
                realTimedata.push(y);
            }

            // Zip the generated y values with the x values

            var res = [];
            for (var i = 0; i < realTimedata.length; ++i) {
                res.push([i, realTimedata[i]]);
            }

            return res;
        }
        function getRandomData2() {
            if (realTimedata2.length > 0)
                realTimedata2 = realTimedata2.slice(1);

            // Do a random walk

            while (realTimedata2.length < totalPoints) {

                var prev = realTimedata2.length > 0 ? realTimedata[realTimedata2.length] : 50,
                    y = prev - 25;

                if (y < 0) {
                    y = 0;
                } else if (y > 100) {
                    y = 100;
                }
                realTimedata2.push(y);
            }


            var res = [];
            for (var i = 0; i < realTimedata2.length; ++i) {
                res.push([i, realTimedata2[i]]);
            }

            return res;
        }
        // Set up the control widget
        var updateInterval = 500;
        var plot = $.plot("#dashboard-chart-realtime", getSeriesObj(), {
            yaxis: {
                color: '#f3f3f3',
                min: 0,
                max: 100,
                tickFormatter: function (val, axis) {
                    return "";
                }
            },
            xaxis: {
                color: '#f3f3f3',
                min: 0,
                max: 100,
                tickFormatter: function (val, axis) {
                    return "";
                }
            },
            grid: {
                hoverable: true,
                clickable: false,
                borderWidth: 0,
                aboveData: false
            },
            colors: ['#eee', themeprimary],
        });

        function update() {

            plot.setData(getSeriesObj());

            plot.draw();
            setTimeout(update, updateInterval);
        }
        update();


        //-------------------------Initiates Easy Pie Chart instances in page--------------------//
        InitiateEasyPieChart.init();

        //-------------------------Initiates Sparkline Chart instances in page------------------//
        InitiateSparklineCharts.init();
    });

</script>



</body>
<!--  /Body -->
</html>