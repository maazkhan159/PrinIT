﻿<!DOCTYPE html>
<!--
BeyondAdmin - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.6
Version: 1.6.0
Purchase: https://wrapbootstrap.com/theme/beyondadmin-adminapp-angularjs-mvc-WB06R48S4
-->

<html xmlns="http://www.w3.org/1999/xhtml">
<!-- Head -->
<head>
    <meta charset="utf-8" />
    <title>User Profile</title>

    <meta name="description" content="user profile" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="../../../user/assets/img/favicon.png" type="image/x-icon">

    <!--Basic Styles-->
    <link href="../../../user/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link id="bootstrap-rtl-link" href="" rel="stylesheet" />
    <link href="../../../user/assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="../../../user/assets/css/weather-icons.min.css" rel="stylesheet" />

    <!--Fonts-->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300" rel="stylesheet" type="text/css">

    <!--Beyond styles-->
    <link id="beyond-link" href="../../../user/assets/css/beyond.min.css" rel="stylesheet" />
    <link href="../../../user/assets/css/demo.min.css" rel="stylesheet" />
    <link href="../../../user/assets/css/typicons.min.css" rel="stylesheet" />
    <link href="../../../user/assets/css/animate.min.css" rel="stylesheet" />
    <link id="skin-link" href="" rel="stylesheet" type="text/css" />

    <!--Skin Script: Place this script in head to load scripts for skins and rtl support-->
    <script src="../../../user/assets/js/skins.min.js"></script>
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
        <div class="navbar-inner">
            <div class="navbar-container">
                <!-- Navbar Barnd -->
                <div class="navbar-header pull-left">
                    <a href="#" class="navbar-brand">
                        <small>
                            <img src="../../../user/assets/img/logo.png" alt="" />
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
                                <a class=" dropdown-toggle" data-toggle="dropdown" title="Help" href="#">
                                    <i class="icon fa fa-warning"></i>
                                </a>
                                <!--Notification Dropdown-->
                                <ul class="pull-right dropdown-menu dropdown-arrow dropdown-notifications">
                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <div class="notification-icon">
                                                    <i class="fa fa-phone bg-themeprimary white"></i>
                                                </div>
                                                <div class="notification-body">
                                                    <span class="title">Skype meeting with Patty</span>
                                                    <span class="description">01:00 pm</span>
                                                </div>
                                                <div class="notification-extra">
                                                    <i class="fa fa-clock-o themeprimary"></i>
                                                    <span class="description">office</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <div class="notification-icon">
                                                    <i class="fa fa-check bg-darkorange white"></i>
                                                </div>
                                                <div class="notification-body">
                                                    <span class="title">Uncharted break</span>
                                                    <span class="description">03:30 pm - 05:15 pm</span>
                                                </div>
                                                <div class="notification-extra">
                                                    <i class="fa fa-clock-o darkorange"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <div class="notification-icon">
                                                    <i class="fa fa-gift bg-warning white"></i>
                                                </div>
                                                <div class="notification-body">
                                                    <span class="title">Kate birthday party</span>
                                                    <span class="description">08:30 pm</span>
                                                </div>
                                                <div class="notification-extra">
                                                    <i class="fa fa-calendar warning"></i>
                                                    <i class="fa fa-clock-o warning"></i>
                                                    <span class="description">at home</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <div class="notification-icon">
                                                    <i class="fa fa-glass bg-success white"></i>
                                                </div>
                                                <div class="notification-body">
                                                    <span class="title">Dinner with friends</span>
                                                    <span class="description">10:30 pm</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="dropdown-footer ">
                                        <span>
                                            Today, March 28
                                        </span>
                                        <span class="pull-right">
                                            10°c
                                            <i class="wi wi-cloudy"></i>
                                        </span>
                                    </li>
                                </ul>
                                <!--/Notification Dropdown-->
                            </li>
                            <li>
                                <a class="dropdown-toggle" data-toggle="dropdown" title="Mails" href="#">
                                    <i class="icon fa fa-envelope"></i>
                                    <span class="badge">3</span>
                                </a>
                                <!--Messages Dropdown-->
                                <ul class="pull-right dropdown-menu dropdown-arrow dropdown-messages">
                                    <li>
                                        <a href="#">
                                            <img src="assets/img/avatars/divyia.jpg" class="message-avatar" alt="Divyia Austin">
                                            <div class="message">
                                                <span class="message-sender">
                                                    Divyia Austin
                                                </span>
                                                <span class="message-time">
                                                    2 minutes ago
                                                </span>
                                                <span class="message-subject">
                                                    Here's the recipe for apple pie
                                                </span>
                                                <span class="message-body">
                                                    to identify the sending application when the senders image is shown for the main icon
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="assets/img/avatars/bing.png" class="message-avatar" alt="Microsoft Bing">
                                            <div class="message">
                                                <span class="message-sender">
                                                    Bing.com
                                                </span>
                                                <span class="message-time">
                                                    Yesterday
                                                </span>
                                                <span class="message-subject">
                                                    Bing Newsletter: The January Issue‏
                                                </span>
                                                <span class="message-body">
                                                    Discover new music just in time for the Grammy® Awards.
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="../../../user/assets/img/avatars/adam-jansen.jpg" class="message-avatar" alt="Divyia Austin">
                                            <div class="message">
                                                <span class="message-sender">
                                                    Nicolas
                                                </span>
                                                <span class="message-time">
                                                    Friday, September 22
                                                </span>
                                                <span class="message-subject">
                                                    New 4K Cameras
                                                </span>
                                                <span class="message-body">
                                                    The 4K revolution has come over the horizon and is reaching the general populous
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <!--/Messages Dropdown-->
                            </li>

                            <li>
                                <a class="dropdown-toggle" data-toggle="dropdown" title="Tasks" href="#">
                                    <i class="icon fa fa-tasks"></i>
                                    <span class="badge">4</span>
                                </a>
                                <!--Tasks Dropdown-->
                                <ul class="pull-right dropdown-menu dropdown-tasks dropdown-arrow ">
                                    <li class="dropdown-header bordered-darkorange">
                                        <i class="fa fa-tasks"></i>
                                        4 Tasks In Progress
                                    </li>

                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <span class="pull-left">Account Creation</span>
                                                <span class="pull-right">65%</span>
                                            </div>

                                            <div class="progress progress-xs">
                                                <div style="width:65%" class="progress-bar"></div>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <span class="pull-left">Profile Data</span>
                                                <span class="pull-right">35%</span>
                                            </div>

                                            <div class="progress progress-xs">
                                                <div style="width:35%" class="progress-bar progress-bar-success"></div>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <span class="pull-left">Updating Resume</span>
                                                <span class="pull-right">75%</span>
                                            </div>

                                            <div class="progress progress-xs">
                                                <div style="width:75%" class="progress-bar progress-bar-darkorange"></div>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <span class="pull-left">Adding Contacts</span>
                                                <span class="pull-right">10%</span>
                                            </div>

                                            <div class="progress progress-xs">
                                                <div style="width:10%" class="progress-bar progress-bar-warning"></div>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="dropdown-footer">
                                        <a href="#">
                                            See All Tasks
                                        </a>
                                        <button class="btn btn-xs btn-default shiny darkorange icon-only pull-right"><i class="fa fa-check"></i></button>
                                    </li>
                                </ul>
                                <!--/Tasks Dropdown-->
                            </li>
                            <li>
                                <a class="wave in" id="chat-link" title="Chat" href="#">
                                    <i class="icon glyphicon glyphicon-comment"></i>
                                </a>
                            </li>
                            <li>
                                <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                    <div class="avatar" title="View your public profile">
                                        <img src="../../../user/assets/img/avatars/adam-jansen.jpg">
                                    </div>
                                    <section>
                                        <h2><span class="profile"><span>David Stevenson</span></span></h2>
                                    </section>
                                </a>
                                <!--Login Area Dropdown-->
                                <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                    <li class="username"><a>David Stevenson</a></li>
                                    <li class="email"><a>David.Stevenson@live.com</a></li>
                                    <!--Avatar Area-->
                                    <li>
                                        <div class="avatar-area">
                                            <img src="../../../user/assets/img/avatars/adam-jansen.jpg" class="avatar">
                                            <span class="caption">Change Photo</span>
                                        </div>
                                    </li>
                                    <!--Avatar Area-->
                                    <li class="edit">
                                        <a href="profile.blade.php" class="pull-left">Profile</a>
                                        <a href="#" class="pull-right">Setting</a>
                                    </li>
                                    <!--Theme Selector Area-->
                                    <li class="theme-area">
                                        <ul class="colorpicker" id="skin-changer">
                                            <li><a class="colorpick-btn" href="#" style="background-color:#5DB2FF;" rel="assets/css/skins/blue.min.css"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#2dc3e8;" rel="assets/css/skins/azure.min.css"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#03B3B2;" rel="assets/css/skins/teal.min.css"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#53a93f;" rel="assets/css/skins/green.min.css"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#FF8F32;" rel="assets/css/skins/orange.min.css"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#cc324b;" rel="assets/css/skins/pink.min.css"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#AC193D;" rel="assets/css/skins/darkred.min.css"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#8C0095;" rel="assets/css/skins/purple.min.css"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#0072C6;" rel="assets/css/skins/darkblue.min.css"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#585858;" rel="assets/css/skins/gray.min.css"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#474544;" rel="assets/css/skins/black.min.css"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#001940;" rel="assets/css/skins/deepblue.min.css"></a></li>
                                        </ul>
                                    </li>
                                    <!--/Theme Selector Area-->
                                    <li class="dropdown-footer">
                                        <a href="login.blade.php">
                                            Sign out
                                        </a>
                                    </li>
                                </ul>
                                <!--/Login Area Dropdown-->
                            </li>
                            <!-- /Account Area -->
                            <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                            <!-- Settings -->
                        </ul><div class="setting">
                            <a id="btn-setting" title="Setting" href="#">
                                <i class="icon glyphicon glyphicon-cog"></i>
                            </a>
                        </div><div class="setting-container">
                            <label>
                                <input type="checkbox" id="checkbox_fixednavbar">
                                <span class="text">Fixed Navbar</span>
                            </label>
                            <label>
                                <input type="checkbox" id="checkbox_fixedsidebar">
                                <span class="text">Fixed SideBar</span>
                            </label>
                            <label>
                                <input type="checkbox" id="checkbox_fixedbreadcrumbs">
                                <span class="text">Fixed BreadCrumbs</span>
                            </label>
                            <label>
                                <input type="checkbox" id="checkbox_fixedheader">
                                <span class="text">Fixed Header</span>
                            </label>
                        </div>
                        <!-- Settings -->
                    </div>
                </div>
                <!-- /Account Area and Settings -->
            </div>
        </div>
    </div>
    <!-- /Navbar -->
    <!-- Main Container -->
    <div class="main-container container-fluid">
        <!-- Page Container -->
        <div class="page-container">
            <!-- Page Sidebar -->
            <div class="page-sidebar" id="sidebar">
                <!-- Page Sidebar Header-->
                <div class="sidebar-header-wrapper">
                    <input type="text" class="searchinput" />
                    <i class="searchicon fa fa-search"></i>
                    <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
                </div>
                <!-- /Page Sidebar Header -->
                <!-- Sidebar Menu -->
                <ul class="nav sidebar-menu">
                    <!--Dashboard-->
                    <li>
                        <a href="../../../user/index.html">
                            <i class="menu-icon glyphicon glyphicon-home"></i>
                            <span class="menu-text"> Dashboard </span>
                        </a>
                    </li>
                    <!--Databoxes-->
                    <li>
                        <a href="databoxes.html">
                            <i class="menu-icon glyphicon glyphicon-tasks"></i>
                            <span class="menu-text"> Data Boxes </span>
                        </a>
                    </li>
                    <!--Widgets-->
                    <li>
                        <a href="widgets.html">
                            <i class="menu-icon fa fa-th"></i>
                            <span class="menu-text"> Widgets </span>
                        </a>
                    </li>
                    <!--UI Elements-->
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-desktop"></i>
                            <span class="menu-text"> Elements </span>

                            <i class="menu-expand"></i>
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="elements.html">
                                    <span class="menu-text">Basic Elements</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="menu-dropdown">
                                    <span class="menu-text">
                                        Icons
                                    </span>
                                    <i class="menu-expand"></i>
                                </a>

                                <ul class="submenu">
                                    <li>
                                        <a href="font-awesome.html">
                                            <i class="menu-icon fa fa-rocket"></i>
                                            <span class="menu-text">Font Awesome</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="glyph-icons.html">
                                            <i class="menu-icon glyphicon glyphicon-stats"></i>
                                            <span class="menu-text">Glyph Icons</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="typicon.html">
                                            <i class="menu-icon typcn typcn-location-outline"></i>
                                            <span class="menu-text"> Typicons</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="weather-icons.html">
                                            <i class="menu-icon wi wi-hot"></i>
                                            <span class="menu-text">Weather Icons</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="tabs.html">
                                    <span class="menu-text">Tabs & Accordions</span>
                                </a>
                            </li>
                            <li>
                                <a href="alerts.html">
                                    <span class="menu-text">Alerts & Tooltips</span>
                                </a>
                            </li>
                            <li>
                                <a href="modals.html">
                                    <span class="menu-text">Modals & Wells</span>
                                </a>
                            </li>
                            <li>
                                <a href="buttons.html">
                                    <span class="menu-text">Buttons</span>
                                </a>
                            </li>
                            <li>
                                <a href="nestable-list.html">
                                    <span class="menu-text"> Nestable List</span>
                                </a>
                            </li>
                            <li>
                                <a href="treeview.html">
                                    <span class="menu-text">Treeview</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--Tables-->
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-table"></i>
                            <span class="menu-text"> Tables </span>

                            <i class="menu-expand"></i>
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="tables-simple.html">
                                    <span class="menu-text">Simple & Responsive</span>
                                </a>
                            </li>
                            <li>
                                <a href="tables-data.html">
                                    <span class="menu-text">Data Tables</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--Forms-->
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-pencil-square-o"></i>
                            <span class="menu-text"> Forms </span>

                            <i class="menu-expand"></i>
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="form-layouts.html">
                                    <span class="menu-text">Form Layouts</span>
                                </a>
                            </li>

                            <li>
                                <a href="form-inputs.html">
                                    <span class="menu-text">Form Inputs</span>
                                </a>
                            </li>

                            <li>
                                <a href="form-pickers.html">
                                    <span class="menu-text">Data Pickers</span>
                                </a>
                            </li>
                            <li>
                                <a href="form-wizard.html">
                                    <span class="menu-text">Wizard</span>
                                </a>
                            </li>
                            <li>
                                <a href="form-validation.html">
                                    <span class="menu-text">Validation</span>
                                </a>
                            </li>
                            <li>
                                <a href="form-editors.html">
                                    <span class="menu-text">Editors</span>
                                </a>
                            </li>
                            <li>
                                <a href="form-inputmask.html">
                                    <span class="menu-text">Input Mask</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--Charts-->
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-bar-chart-o"></i>
                            <span class="menu-text"> Charts </span>

                            <i class="menu-expand"></i>
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="flot.html">
                                    <span class="menu-text">Flot Charts</span>
                                </a>
                            </li>

                            <li>
                                <a href="morris.html">
                                    <span class="menu-text"> Morris Charts</span>
                                </a>
                            </li>
                            <li>
                                <a href="sparkline.html">
                                    <span class="menu-text">Sparkline Charts</span>
                                </a>
                            </li>
                            <li>
                                <a href="easypiecharts.html">
                                    <span class="menu-text">Easy Pie Charts</span>
                                </a>
                            </li>
                            <li>
                                <a href="chartjs.html">
                                    <span class="menu-text"> ChartJS</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--Profile-->
                    <li class="active">
                        <a href="profile.blade.php">
                            <i class="menu-icon fa fa-picture-o"></i>
                            <span class="menu-text">Profile</span>
                        </a>
                    </li>
                    <!--Mail-->
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-envelope-o"></i>
                            <span class="menu-text"> Mail </span>

                            <i class="menu-expand"></i>
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="inbox.html">
                                    <span class="menu-text">Inbox</span>
                                </a>
                            </li>

                            <li>
                                <a href="message-view.html">
                                    <span class="menu-text">View Message</span>
                                </a>
                            </li>
                            <li>
                                <a href="message-compose.html">
                                    <span class="menu-text">Compose Message</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--Calendar-->
                    <li>
                        <a href="calendar.html">
                            <i class="menu-icon fa fa-calendar"></i>
                            <span class="menu-text">
                                Calendar
                            </span>
                        </a>
                    </li>
                    <!--Pages-->
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon glyphicon glyphicon-paperclip"></i>
                            <span class="menu-text"> Pages </span>

                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="timeline.html">
                                    <span class="menu-text">Timeline</span>
                                </a>
                            </li>
                            <li>
                                <a href="pricing.html">
                                    <span class="menu-text">Pricing Tables</span>
                                </a>
                            </li>

                            <li>
                                <a href="invoice.html">
                                    <span class="menu-text">Invoice</span>
                                </a>
                            </li>

                            <li>
                                <a href="login.blade.php">
                                    <span class="menu-text">Login</span>
                                </a>
                            </li>
                            <li>
                                <a href="register.blade.php">
                                    <span class="menu-text">Register</span>
                                </a>
                            </li>
                            <li>
                                <a href="lock.html">
                                    <span class="menu-text">Lock Screen</span>
                                </a>
                            </li>
                            <li>
                                <a href="typography.html">
                                    <span class="menu-text"> Typography </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--More Pages-->
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon glyphicon glyphicon-link"></i>

                            <span class="menu-text">
                                More Pages
                            </span>

                            <i class="menu-expand"></i>
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="error-404.html">
                                    <span class="menu-text">Error 404</span>
                                </a>
                            </li>

                            <li>
                                <a href="error-500.html">
                                    <span class="menu-text"> Error 500</span>
                                </a>
                            </li>
                            <li>
                                <a href="blank.html">
                                    <span class="menu-text">Blank Page</span>
                                </a>
                            </li>
                            <li>
                                <a href="grid.html">
                                    <span class="menu-text"> Grid</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="menu-dropdown">
                                    <span class="menu-text">
                                        Multi Level Menu
                                    </span>
                                    <i class="menu-expand"></i>
                                </a>

                                <ul class="submenu">
                                    <li>
                                        <a href="#">
                                            <i class="menu-icon fa fa-camera"></i>
                                            <span class="menu-text">Level 3</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="menu-dropdown">
                                            <i class="menu-icon fa fa-asterisk"></i>

                                            <span class="menu-text">
                                                Level 4
                                            </span>
                                            <i class="menu-expand"></i>
                                        </a>

                                        <ul class="submenu">
                                            <li>
                                                <a href="#">
                                                    <i class="menu-icon fa fa-bolt"></i>
                                                    <span class="menu-text">Some Item</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#">
                                                    <i class="menu-icon fa fa-bug"></i>
                                                    <span class="menu-text">Another Item</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!--Right to Left-->
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-align-right"></i>
                            <span class="menu-text"> Right to Left </span>

                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a>
                                    <span class="menu-text">RTL</span>
                                    <label class="pull-right margin-top-10">
                                        <input id="rtl-changer" class="checkbox-slider slider-icon colored-primary" type="checkbox">
                                        <span class="text"></span>
                                    </label>
                                </a>
                            </li>
                            <li>
                                <a href="index-rtl-ar.html">
                                    <span class="menu-text">Arabic Layout</span>
                                </a>
                            </li>

                            <li>
                                <a href="index-rtl-fa.html">
                                    <span class="menu-text">Persian Layout</span>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="versions.html">
                            <i class="menu-icon glyphicon glyphicon-fire themesecondary"></i>
                            <span class="menu-text">
                                BeyondAdmin Versions
                            </span>
                        </a>
                    </li>
                </ul>
                <!-- /Sidebar Menu -->
            </div>
            <!-- /Page Sidebar -->
            <!-- Chat Bar -->
            <div id="chatbar" class="page-chatbar">
                <div class="chatbar-contacts">
                    <div class="contacts-search">
                        <input type="text" class="searchinput" placeholder="Search Contacts" />
                        <i class="searchicon fa fa-search"></i>
                        <div class="searchhelper">Search Your Contacts and Chat History</div>
                    </div>
                    <ul class="contacts-list">
                        <li class="contact">
                            <div class="contact-avatar">
                                <img src="assets/img/avatars/divyia.jpg" />
                            </div>
                            <div class="contact-info">
                                <div class="contact-name">Divyia Philips</div>
                                <div class="contact-status">
                                    <div class="online"></div>
                                    <div class="status">online</div>
                                </div>
                                <div class="last-chat-time">
                                    last week
                                </div>
                            </div>
                        </li>
                        <li class="contact">
                            <div class="contact-avatar">
                                <img src="assets/img/avatars/Nicolai-Larson.jpg" />
                            </div>
                            <div class="contact-info">
                                <div class="contact-name">Adam Johnson</div>
                                <div class="contact-status">
                                    <div class="offline"></div>
                                    <div class="status">left 4 mins ago</div>
                                </div>
                                <div class="last-chat-time">
                                    today
                                </div>
                            </div>
                        </li>
                        <li class="contact">
                            <div class="contact-avatar">
                                <img src="assets/img/avatars/John-Smith.jpg" />
                            </div>
                            <div class="contact-info">
                                <div class="contact-name">John Smith</div>
                                <div class="contact-status">
                                    <div class="online"></div>
                                    <div class="status">online</div>
                                </div>
                                <div class="last-chat-time">
                                    1:57 am
                                </div>
                            </div>
                        </li>
                        <li class="contact">
                            <div class="contact-avatar">
                                <img src="assets/img/avatars/Osvaldus-Valutis.jpg" />
                            </div>
                            <div class="contact-info">
                                <div class="contact-name">Osvaldus Valutis</div>
                                <div class="contact-status">
                                    <div class="online"></div>
                                    <div class="status">online</div>
                                </div>
                                <div class="last-chat-time">
                                    today
                                </div>
                            </div>
                        </li>
                        <li class="contact">
                            <div class="contact-avatar">
                                <img src="assets/img/avatars/Javi-Jimenez.jpg" />
                            </div>
                            <div class="contact-info">
                                <div class="contact-name">Javi Jimenez</div>
                                <div class="contact-status">
                                    <div class="online"></div>
                                    <div class="status">online</div>
                                </div>
                                <div class="last-chat-time">
                                    today
                                </div>
                            </div>
                        </li>
                        <li class="contact">
                            <div class="contact-avatar">
                                <img src="assets/img/avatars/Stephanie-Walter.jpg" />
                            </div>
                            <div class="contact-info">
                                <div class="contact-name">Stephanie Walter</div>
                                <div class="contact-status">
                                    <div class="online"></div>
                                    <div class="status">online</div>
                                </div>
                                <div class="last-chat-time">
                                    yesterday
                                </div>
                            </div>
                        </li>
                        <li class="contact">
                            <div class="contact-avatar">
                                <img src="assets/img/avatars/Sergey-Azovskiy.jpg" />
                            </div>
                            <div class="contact-info">
                                <div class="contact-name">Sergey Azovskiy</div>
                                <div class="contact-status">
                                    <div class="offline"></div>
                                    <div class="status">offline since oct 24</div>
                                </div>
                                <div class="last-chat-time">
                                    22 oct
                                </div>
                            </div>
                        </li>
                        <li class="contact">
                            <div class="contact-avatar">
                                <img src="assets/img/avatars/Lee-Munroe.jpg" />
                            </div>
                            <div class="contact-info">
                                <div class="contact-name">Lee Munroe</div>
                                <div class="contact-status">
                                    <div class="online"></div>
                                    <div class="status">online</div>
                                </div>
                                <div class="last-chat-time">
                                    today
                                </div>
                            </div>
                        </li>
                        <li class="contact">
                            <div class="contact-avatar">
                                <img src="assets/img/avatars/divyia.jpg" />
                            </div>
                            <div class="contact-info">
                                <div class="contact-name">Divyia Philips</div>
                                <div class="contact-status">
                                    <div class="online"></div>
                                    <div class="status">online</div>
                                </div>
                                <div class="last-chat-time">
                                    last week
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="chatbar-messages" style="display: none;">
                    <div class="messages-contact">
                        <div class="contact-avatar">
                            <img src="assets/img/avatars/divyia.jpg" />
                        </div>
                        <div class="contact-info">
                            <div class="contact-name">Divyia Philips</div>
                            <div class="contact-status">
                                <div class="online"></div>
                                <div class="status">online</div>
                            </div>
                            <div class="last-chat-time">
                                a moment ago
                            </div>
                            <div class="back">
                                <i class="fa fa-arrow-circle-left"></i>
                            </div>
                        </div>
                    </div>
                    <ul class="messages-list">
                        <li class="message">
                            <div class="message-info">
                                <div class="bullet"></div>
                                <div class="contact-name">Me</div>
                                <div class="message-time">10:14 AM, Today</div>
                            </div>
                            <div class="message-body">
                                Hi, Hope all is good. Are we meeting today?
                            </div>
                        </li>
                        <li class="message reply">
                            <div class="message-info">
                                <div class="bullet"></div>
                                <div class="contact-name">Divyia</div>
                                <div class="message-time">10:15 AM, Today</div>
                            </div>
                            <div class="message-body">
                                Hi, Hope all is good. Are we meeting today?
                            </div>
                        </li>
                        <li class="message">
                            <div class="message-info">
                                <div class="bullet"></div>
                                <div class="contact-name">Me</div>
                                <div class="message-time">10:14 AM, Today</div>
                            </div>
                            <div class="message-body">
                                Hi, Hope all is good. Are we meeting today?
                            </div>
                        </li>
                        <li class="message reply">
                            <div class="message-info">
                                <div class="bullet"></div>
                                <div class="contact-name">Divyia</div>
                                <div class="message-time">10:15 AM, Today</div>
                            </div>
                            <div class="message-body">
                                Hi, Hope all is good. Are we meeting today?
                            </div>
                        </li>
                        <li class="message">
                            <div class="message-info">
                                <div class="bullet"></div>
                                <div class="contact-name">Me</div>
                                <div class="message-time">10:14 AM, Today</div>
                            </div>
                            <div class="message-body">
                                Hi, Hope all is good. Are we meeting today?
                            </div>
                        </li>
                        <li class="message reply">
                            <div class="message-info">
                                <div class="bullet"></div>
                                <div class="contact-name">Divyia</div>
                                <div class="message-time">10:15 AM, Today</div>
                            </div>
                            <div class="message-body">
                                Hi, Hope all is good. Are we meeting today?
                            </div>
                        </li>
                    </ul>
                    <div class="send-message">
                        <span class="input-icon icon-right">
                            <textarea rows="4" class="form-control" placeholde <!-- /Page Sidebar --> r="Type your message"></textarea>
                            <i class="fa fa-camera themeprimary"></i>
                        </span>
                    </div>
                </div>
            </div>
            <!-- /Chat Bar -->
            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                        <li>
                            <i class="fa fa-home"></i>
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="#">Pages</a>
                        </li>
                        <li class="active">Profile</li>
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->
                <!-- Page Header -->
                <div class="page-header position-relative">
                    <div class="header-title">
                        <h1>
                            User Profile
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
                        <div class="col-md-12">
                            <div class="profile-container">
                                <div class="profile-header row">
                                    <div class="col-lg-2 col-md-4 col-sm-12 text-center">
                                        <img src="assets/img/avatars/divyia.jpg" alt="" class="header-avatar" />
                                    </div>
                                    <div class="col-lg-5 col-md-8 col-sm-12 profile-info">
                                        <div class="header-fullname">Kim Ryder</div>
                                        <a href="#" class="btn btn-palegreen btn-sm  btn-follow">
                                            <i class="fa fa-check"></i>
                                            Following
                                        </a>
                                        <div class="header-information">
                                            Kim is a software developer in Microsoft. She works in ASP.NET MVC Team and collaborates with other teams.
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 profile-stats">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 stats-col">
                                                <div class="stats-value pink">284</div>
                                                <div class="stats-title">FOLLOWING</div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 stats-col">
                                                <div class="stats-value pink">803</div>
                                                <div class="stats-title">FOLLOWERS</div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 stats-col">
                                                <div class="stats-value pink">1207</div>
                                                <div class="stats-title">POSTS</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 inlinestats-col">
                                                <i class="glyphicon glyphicon-map-marker"></i> Boston
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 inlinestats-col">
                                                Rate: <strong>$250</strong>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 inlinestats-col">
                                                Age: <strong>24</strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-body">
                                    <div class="col-lg-12">
                                        <div class="tabbable">
                                            <ul class="nav nav-tabs tabs-flat  nav-justified" id="myTab11">
                                                <li class="active">
                                                    <a data-toggle="tab" href="#overview">
                                                        Overview
                                                    </a>
                                                </li>
                                                <li class="tab-red">
                                                    <a data-toggle="tab" href="#timeline">
                                                        Events
                                                    </a>
                                                </li>
                                                <li class="tab-palegreen">
                                                    <a data-toggle="tab" id="contacttab" href="#contacts">
                                                        Contacts
                                                    </a>
                                                </li>
                                                <li class="tab-yellow">
                                                    <a data-toggle="tab" href="#settings">
                                                        Settings
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="tab-content tabs-flat">
                                                <div id="overview" class="tab-pane active">
                                                    <div class="row profile-overview">
                                                        <div class="col-md-8">
                                                            <h6 class="row-title before-themeprimary no-margin-top">PROFILE VISITS</h6>
                                                            <div id="visit-chart" class="chart"></div>
                                                            <h6 class="row-title before-orange">FOLLOWERS</h6>
                                                            <div class="row">
                                                                <div class="col-lg-4 col-sm-6 col-xs-12">
                                                                    <div class="databox databox-graded">
                                                                        <div class="databox-left no-padding">
                                                                            <img src="assets/img/avatars/Javi-Jimenez.jpg" style="width:65px; height:65px;">
                                                                        </div>
                                                                        <div class="databox-right padding-top-20 bg-whitesmoke">
                                                                            <div class="databox-stat orange radius-bordered">
                                                                                <i class="stat-icon glyphicon glyphicon-remove"></i>
                                                                            </div>
                                                                            <div class="databox-text darkgray">JAVI JIMENEZ</div>
                                                                            <div class="databox-text darkgray">Manager</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4 col-sm-6 col-xs-12">
                                                                    <div class="databox databox-graded">
                                                                        <div class="databox-left no-padding">
                                                                            <img src="../../../user/assets/img/avatars/adam-jansen.jpg" style="width:65px; height:65px;">
                                                                        </div>
                                                                        <div class="databox-right padding-top-20 bg-whitesmoke">
                                                                            <div class="databox-stat palegreen radius-bordered">
                                                                                <i class="stat-icon glyphicon glyphicon-plus"></i>
                                                                            </div>
                                                                            <div class="databox-text darkgray">LEE MUNROE</div>
                                                                            <div class="databox-text darkgray">Developer</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4 col-sm-6 col-xs-12">
                                                                    <div class="databox databox-graded">
                                                                        <div class="databox-left no-padding">
                                                                            <img src="assets/img/avatars/Nicolai-Larson.jpg" style="width:65px; height:65px;">
                                                                        </div>
                                                                        <div class="databox-right padding-top-20 bg-whitesmoke">
                                                                            <div class="databox-stat palegreen radius-bordered">
                                                                                <i class="stat-icon glyphicon glyphicon-plus"></i>
                                                                            </div>
                                                                            <div class="databox-text darkgray">NICOLAI LARSON</div>
                                                                            <div class="databox-text darkgray">Manager</div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <h6 class="row-title before-palegreen">FOLLOWING</h6>
                                                            <div class="row">
                                                                <div class="col-lg-4 col-sm-6 col-xs-12">
                                                                    <div class="databox databox-graded">
                                                                        <div class="databox-left no-padding">
                                                                            <img src="assets/img/avatars/John-Smith.jpg" style="width:65px; height:65px;">
                                                                        </div>
                                                                        <div class="databox-right padding-top-20 bg-whitesmoke">
                                                                            <div class="databox-stat orange radius-bordered">
                                                                                <i class="stat-icon glyphicon glyphicon-remove"></i>
                                                                            </div>
                                                                            <div class="databox-text darkgray">JOHN SMITH</div>
                                                                            <div class="databox-text darkgray">Architect</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4 col-sm-6 col-xs-12">
                                                                    <div class="databox databox-graded">
                                                                        <div class="databox-left no-padding">
                                                                            <img src="assets/img/avatars/Matt-Cheuvront.jpg" style="width:65px; height:65px;">
                                                                        </div>
                                                                        <div class="databox-right padding-top-20 bg-whitesmoke">
                                                                            <div class="databox-stat palegreen radius-bordered">
                                                                                <i class="stat-icon glyphicon glyphicon-plus"></i>
                                                                            </div>
                                                                            <div class="databox-text darkgray">MATT CHEUVRONT</div>
                                                                            <div class="databox-text darkgray">Developer</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4 col-sm-6 col-xs-12">
                                                                    <div class="databox databox-graded">
                                                                        <div class="databox-left no-padding">
                                                                            <img src="assets/img/avatars/Stephanie-Walter.jpg" style="width:65px; height:65px;">
                                                                        </div>
                                                                        <div class="databox-right padding-top-20 bg-whitesmoke">
                                                                            <div class="databox-stat orange radius-bordered">
                                                                                <i class="stat-icon glyphicon glyphicon-remove"></i>
                                                                            </div>
                                                                            <div class="databox-text darkgray">KATE WALTER</div>
                                                                            <div class="databox-text darkgray">Developer</div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <h6 class="row-title before-yellow">YOU MAY ALSO KNOW</h6>
                                                            <div class="row">
                                                                <div class="col-lg-6 col-sm-6 col-xs-12">
                                                                    <div class="databox databox-xlg databox-halved databox-shadowed databox-vertical no-margin-bottom">
                                                                        <div class="databox-top bg-white padding-10">
                                                                            <div class="col-lg-4 col-sm-4 col-xs-4">
                                                                                <img src="assets/img/avatars/Sergey-Azovskiy.jpg" style="width:75px; height:75px;" class="image-circular bordered-3 bordered-palegreen">
                                                                            </div>
                                                                            <div class="col-lg-8 col-sm-8 col-xs-8 text-align-left padding-10">
                                                                                <span class="databox-header carbon no-margin">Martin James</span>
                                                                                <span class="databox-text lightcarbon no-margin"> Software Manager at Microsoft </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="databox-bottom bg-white no-padding">
                                                                            <div class="databox-row row-12">
                                                                                <div class="databox-row row-6 no-padding">
                                                                                    <div class="databox-cell cell-4 no-padding text-align-center bordered-right bordered-platinum">
                                                                                        <span class="databox-text sonic-silver  no-margin">Posts</span>
                                                                                        <span class="databox-number lightcarbon no-margin">510</span>
                                                                                    </div>
                                                                                    <div class="databox-cell cell-4 no-padding text-align-center bordered-right bordered-platinum">
                                                                                        <span class="databox-text sonic-silver no-margin">Followers</span>
                                                                                        <span class="databox-number lightcarbon no-margin">908</span>
                                                                                    </div>
                                                                                    <div class="databox-cell cell-4 no-padding text-align-center">
                                                                                        <span class="databox-text sonic-silver no-margin">Following</span>
                                                                                        <span class="databox-number lightcarbon no-margin">286</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="databox-row row-6 padding-10">
                                                                                    <button class="btn btn-palegreen btn-sm pull-right">FOLLOW</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-sm-6 col-xs-12">
                                                                    <div class="databox databox-xlg databox-halved databox-shadowed databox-vertical no-margin-bottom">
                                                                        <div class="databox-top bg-white padding-10">
                                                                            <div class="col-lg-4 col-sm-4 col-xs-4">
                                                                                <img src="assets/img/avatars/Osvaldus-Valutis.jpg" style="width:75px; height:75px;" class="image-circular bordered-3 bordered-palegreen">
                                                                            </div>
                                                                            <div class="col-lg-8 col-sm-8 col-xs-8 text-align-left padding-10">
                                                                                <span class="databox-header carbon no-margin">Osvaldus Valutis</span>
                                                                                <span class="databox-text lightcarbon no-margin"> Graphic Designer at Yahoo! </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="databox-bottom bg-white no-padding">
                                                                            <div class="databox-row row-12">
                                                                                <div class="databox-row row-6 no-padding">
                                                                                    <div class="databox-cell cell-4 no-padding text-align-center bordered-right bordered-platinum">
                                                                                        <span class="databox-text sonic-silver  no-margin">Posts</span>
                                                                                        <span class="databox-number lightcarbon no-margin">102</span>
                                                                                    </div>
                                                                                    <div class="databox-cell cell-4 no-padding text-align-center bordered-right bordered-platinum">
                                                                                        <span class="databox-text sonic-silver no-margin">Followers</span>
                                                                                        <span class="databox-number lightcarbon no-margin">634</span>
                                                                                    </div>
                                                                                    <div class="databox-cell cell-4 no-padding text-align-center">
                                                                                        <span class="databox-text sonic-silver no-margin">Following</span>
                                                                                        <span class="databox-number lightcarbon no-margin">100</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="databox-row row-6 padding-10">
                                                                                    <button class="btn btn-palegreen btn-sm pull-right">FOLLOW</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <form method="post" class="well padding-bottom-10" onsubmit="return false;">
                                                                <span class="input-icon icon-right">
                                                                    <textarea rows="2" class="form-control" placeholder="Post a new message"></textarea>
                                                                    <i class="fa fa-camera themeprimary"></i>
                                                                </span>
                                                                <div class="padding-top-10 text-align-right">
                                                                    <a class="btn btn-sm btn-primary">
                                                                        Send
                                                                    </a>
                                                                </div>
                                                            </form>
                                                            <div>
                                                                <div class="comment">
                                                                    <img src="../../../user/assets/img/avatars/adam-jansen.jpg" alt="" class="comment-avatar">
                                                                    <div class="comment-body">
                                                                        <div class="comment-text">
                                                                            <div class="comment-header">
                                                                                <a href="#" title="">Adam Jansen</a><span>about 2 minuts ago</span>
                                                                            </div>
                                                                            Story based around the idea of time lapse, animation to post soon!
                                                                        </div>
                                                                        <div class="comment-footer">
                                                                            <a href="#"><i class="fa fa-thumbs-o-up"></i></a>
                                                                            <a href="#"><i class="fa fa-thumbs-o-down"></i></a>
                                                                            <a href="#">Reply</a>
                                                                        </div>
                                                                    </div>

                                                                    <div class="comment">
                                                                        <img src="assets/img/avatars/John-Smith.jpg" alt="" class="comment-avatar">
                                                                        <div class="comment-body">
                                                                            <div class="comment-text">
                                                                                <div class="comment-header">
                                                                                    <a href="#" title="">John Smith</a><span>about 1 hour ago</span>
                                                                                </div>
                                                                                Wow impressive!
                                                                            </div>
                                                                            <div class="comment-footer">
                                                                                <a href="#"><i class="fa fa-thumbs-o-up"></i></a>
                                                                                <a href="#"><i class="fa fa-thumbs-o-down"></i></a>
                                                                                <a href="#">Reply</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="comment">
                                                                        <img src="assets/img/avatars/Matt-Cheuvront.jpg" alt="" class="comment-avatar">
                                                                        <div class="comment-body">
                                                                            <div class="comment-text">
                                                                                <div class="comment-header">
                                                                                    <a href="#" title="">Matt Cheuvront</a><span>about 2 hours ago</span>
                                                                                </div>
                                                                                Wow, that is really nice.
                                                                            </div>
                                                                            <div class="comment-footer">
                                                                                <a href="#"><i class="fa fa-thumbs-o-up"></i></a>
                                                                                <a href="#"><i class="fa fa-thumbs-o-down"></i></a>
                                                                                <a href="#">Reply</a>
                                                                            </div>
                                                                        </div>

                                                                        <div class="comment">
                                                                            <img src="assets/img/avatars/Stephanie-Walter.jpg" alt="" class="comment-avatar">
                                                                            <div class="comment-body">
                                                                                <div class="comment-text">
                                                                                    <div class="comment-header">
                                                                                        <a href="#" title="">Stephanie Walter</a><span>3 hours ago</span>
                                                                                    </div>
                                                                                    Nice work, makes me think of The Money Pit.
                                                                                </div>
                                                                                <div class="comment-footer">
                                                                                    <a href="#"><i class="fa fa-thumbs-o-up"></i></a>
                                                                                    <a href="#"><i class="fa fa-thumbs-o-down"></i></a>
                                                                                    <a href="#">Reply</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="comment">
                                                                    <img src="assets/img/avatars/divyia.jpg" alt="" class="comment-avatar">
                                                                    <div class="comment-body">
                                                                        <div class="comment-text">
                                                                            <div class="comment-header">
                                                                                <a href="#" title="">Kim Ryder</a><span>about 4 hours ago</span>
                                                                            </div>
                                                                            i'm in the middle of a timelapse animation myself! (Very different though.) Awesome stuff.
                                                                        </div>
                                                                        <div class="comment-footer">
                                                                            <a href="#"><i class="fa fa-thumbs-o-up"></i></a>
                                                                            <a href="#"><i class="fa fa-thumbs-o-down"></i></a>
                                                                            <a href="#">Reply</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="comment">
                                                                    <img src="assets/img/avatars/Nicolai-Larson.jpg" alt="" class="comment-avatar">
                                                                    <div class="comment-body">
                                                                        <div class="comment-text">
                                                                            <div class="comment-header">
                                                                                <a href="#" title="">Nicolai Larson</a><span>10 hours ago</span>
                                                                            </div>
                                                                            the parallax is a little odd but O.o that house build is awesome!!
                                                                        </div>
                                                                        <div class="comment-footer">
                                                                            <a href="#"><i class="fa fa-thumbs-o-up"></i></a>
                                                                            <a href="#"><i class="fa fa-thumbs-o-down"></i></a>
                                                                            <a href="#">Reply</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="timeline" class="tab-pane">
                                                    <ul class="timeline animated fadeInDown">
                                                        <li>
                                                            <div class="timeline-datetime">
                                                                <span class="timeline-time">
                                                                    8:19
                                                                </span><span class="timeline-date">Today</span>
                                                            </div>
                                                            <div class="timeline-badge blue">
                                                                <i class="fa fa-tag"></i>
                                                            </div>
                                                            <div class="timeline-panel">
                                                                <div class="timeline-header bordered-bottom bordered-blue">
                                                                    <span class="timeline-title">
                                                                        New Items Arrived
                                                                    </span>
                                                                    <p class="timeline-datetime">
                                                                        <small class="text-muted">
                                                                            <i class="glyphicon glyphicon-time">
                                                                            </i>
                                                                            <span class="timeline-date">Today</span>
                                                                            -
                                                                            <span class="timeline-time">8:19</span>
                                                                        </small>
                                                                    </p>
                                                                </div>
                                                                <div class="timeline-body">
                                                                    <p>Purchased new stationary items for head office</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="timeline-inverted">
                                                            <div class="timeline-datetime">
                                                                <span class="timeline-time">
                                                                    3:10
                                                                </span><span class="timeline-date">Today</span>
                                                            </div>
                                                            <div class="timeline-badge darkorange">
                                                                <i class="fa fa-map-marker font-120"></i>
                                                            </div>
                                                            <div class="timeline-panel bordered-right-3 bordered-orange">
                                                                <div class="timeline-header bordered-bottom bordered-blue">
                                                                    <span class="timeline-title">
                                                                        Visit Appointment
                                                                    </span>
                                                                    <p class="timeline-datetime">
                                                                        <small class="text-muted">
                                                                            <i class="glyphicon glyphicon-time">
                                                                            </i>
                                                                            <span class="timeline-date">Today</span>
                                                                            -
                                                                            <span class="timeline-time">3:10</span>
                                                                        </small>
                                                                    </p>
                                                                </div>
                                                                <div class="timeline-body">
                                                                    <p>Outdoor visit at California State Route 85 with John Boltana &amp; Harry Piterson regarding to setup a new show room.</p>
                                                                    <p>
                                                                        <i class="orange fa fa-exclamation"></i> New task added for <span><a href="#" class="info">James Dean</a></span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </li>

                                                        <li>
                                                            <div class="timeline-datetime">
                                                                <span class="timeline-time">
                                                                    8:19
                                                                </span><span class="timeline-date">Yesterday</span>
                                                            </div>
                                                            <div class="timeline-badge sky">
                                                                <i class="fa fa-bar-chart-o"></i>
                                                            </div>
                                                            <div class="timeline-panel bordered-top-3 bordered-azure">
                                                                <div class="timeline-header bordered-bottom bordered-blue">
                                                                    <span class="timeline-title">
                                                                        Bank Report
                                                                    </span>
                                                                    <p class="timeline-datetime">
                                                                        <small class="text-muted">
                                                                            <i class="glyphicon glyphicon-time">
                                                                            </i>
                                                                            <span class="timeline-date">Yesterday</span>
                                                                            -
                                                                            <span class="timeline-time">8:19</span>
                                                                        </small>
                                                                    </p>
                                                                </div>
                                                                <div class="timeline-body">
                                                                    <p>
                                                                        Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sem neque sed ipsum.
                                                                    </p>
                                                                    Tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="timeline-inverted">
                                                            <div class="timeline-datetime">
                                                                <span class="timeline-time">
                                                                    6:08
                                                                </span><span class="timeline-date">Yesterday</span>
                                                            </div>
                                                            <div class="timeline-badge sky">
                                                                <img src="assets/img/avatars/Sergey-Azovskiy.jpg" class="badge-picture" />
                                                            </div>
                                                            <div class="timeline-panel">
                                                                <div class="timeline-header bordered-bottom bordered-blue">
                                                                    <span class="timeline-title">
                                                                        <a href="">Sergey Azovskiy</a> has commented on your <a href="">status</a>
                                                                    </span>
                                                                    <p class="timeline-datetime">
                                                                        <small class="text-muted">
                                                                            <i class="glyphicon glyphicon-time">
                                                                            </i>
                                                                            <span class="timeline-date">Yesterday</span>
                                                                            -
                                                                            <span class="timeline-time">6:08</span>
                                                                        </small>
                                                                    </p>
                                                                </div>
                                                                <div class="timeline-body">
                                                                    <p>
                                                                        <i class="orange fa fa-quote-left"></i> Happy Birthday Lydia.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="timeline-datetime">
                                                                <span class="timeline-time">
                                                                    7:00
                                                                </span><span class="timeline-date">Yesterday</span>
                                                            </div>
                                                            <div class="timeline-badge danger">
                                                                <i class="fa fa-exclamation font-120"></i>
                                                            </div>
                                                            <div class="timeline-panel">
                                                                <div class="timeline-header bordered-bottom bordered-blue">
                                                                    <span class="timeline-title danger">
                                                                        Deadline Added
                                                                    </span>
                                                                    <p class="timeline-datetime">
                                                                        <small class="text-muted">
                                                                            <i class="glyphicon glyphicon-time">
                                                                            </i>
                                                                            <span class="timeline-date">Yesterday</span>
                                                                            -
                                                                            <span class="timeline-time">7:00</span>
                                                                        </small>
                                                                    </p>
                                                                </div>
                                                                <div class="timeline-body">
                                                                    <p>Dyvia Phillips added new milestone <span><a class="danger" href="#">UI</a></span> Lorem ipsum dolor sit amet consiquest dio</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="timeline-inverted">
                                                            <div class="timeline-datetime">
                                                                <span class="timeline-time">
                                                                    3:09
                                                                </span><span class="timeline-date">Yesterday</span>
                                                            </div>
                                                            <div class="timeline-badge">
                                                                <i class="fa fa-picture-o darkpink"></i>
                                                            </div>
                                                            <div class="timeline-panel">
                                                                <div class="timeline-header bordered-bottom bordered-blue">
                                                                    <p class="timeline-datetime">
                                                                        <small class="text-muted">
                                                                            <i class="glyphicon glyphicon-time">
                                                                            </i>
                                                                            <span class="timeline-date">Yesterday</span>
                                                                            -
                                                                            <span class="timeline-time">3:09</span>
                                                                        </small>
                                                                    </p>
                                                                </div>
                                                                <div class="timeline-body">
                                                                    <a href="#">John Travolta</a> shared an image on <a href="#">Dribble</a>
                                                                    <div class="tl-wide text-center" style="padding: 5px; margin-top:10px; margin-bottom: 10px;">
                                                                        <img src="../../../user/assets/img/temp1.png" alt="" style="max-height: 158px;max-width: 100%;">
                                                                    </div>
                                                                    <i class="text-muted text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="timeline-node">
                                                            <a class="btn btn-yellow">LOAD MORE</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div id="contacts" class="tab-pane">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="profile-contacts">

                                                                <div class="profile-badge orange"><i class="fa fa-phone orange"></i><span>Contacts</span></div>
                                                                <div class="contact-info">
                                                                    <p>
                                                                        Phone	: +1 1 2345 6789 <br>
                                                                        Cell		: +1 9 876 5432
                                                                    </p>
                                                                    <p>
                                                                        Email		: kim@gmail.com
                                                                        <br>
                                                                        Skype		: kim.ryder
                                                                    </p>
                                                                    <p>
                                                                        Facebook	: facebook.com/Kim.Ryder
                                                                        <br>
                                                                        Twitter	: @KimRyder
                                                                    </p>
                                                                </div>
                                                                <div class="profile-badge azure">
                                                                    <i class="fa fa-map-marker azure"></i><span>Location</span>
                                                                </div>
                                                                <div class="contact-info">
                                                                    <p>
                                                                        Address<br>
                                                                        Department 98<br>
                                                                        44-46 Morningside Road<br>
                                                                        Toronto, Canada
                                                                    </p>
                                                                    <p>
                                                                        Office<br>
                                                                        44-46 Morningside Road<br>
                                                                        Toronto, Canada
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div id="contact-map" class="animated flipInY"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="settings" class="tab-pane">
                                                    <form role="form">
                                                        <div class="form-title">
                                                            Personal Information
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <span class="input-icon icon-right">
                                                                        <input type="text" class="form-control" placeholder="Name">
                                                                        <i class="fa fa-user blue"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <span class="input-icon icon-right">
                                                                        <input type="text" class="form-control" placeholder="Family">
                                                                        <i class="fa fa-user orange"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <span class="input-icon icon-right">
                                                                        <input type="text" class="form-control" placeholder="Phone">
                                                                        <i class="glyphicon glyphicon-earphone yellow"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <span class="input-icon icon-right">
                                                                        <input type="text" class="form-control" placeholder="Mobile">
                                                                        <i class="glyphicon glyphicon-phone palegreen"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr class="wide">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <span class="input-icon icon-right">
                                                                        <input class="form-control date-picker" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy" placeholder="Birth Date">
                                                                        <i class="fa fa-calendar"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <span class="input-icon icon-right">
                                                                        <input type="text" class="form-control" placeholder="Birth Place">
                                                                        <i class="fa fa-globe"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-title">
                                                            Social Networks
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <span class="input-icon icon-right">
                                                                        <input type="text" class="form-control" placeholder="Facebook">
                                                                        <i class="fa fa-facebook purple"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <span class="input-icon icon-right">
                                                                        <input type="text" class="form-control" placeholder="Twitter">
                                                                        <i class="fa fa-twitter azure"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <span class="input-icon icon-right">
                                                                        <input type="text" class="form-control" placeholder="Pinterest">
                                                                        <i class="fa fa-pinterest red"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <span class="input-icon icon-right">
                                                                        <input type="text" class="form-control" placeholder="Flickr">
                                                                        <i class="fa fa-flickr blue"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-title">
                                                            Contact Information
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <span class="input-icon icon-right">
                                                                        <input type="text" class="form-control" placeholder="Address 1">
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <span class="input-icon icon-right">
                                                                        <input type="text" class="form-control" placeholder="Address 1">
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Save Profile</button>
                                                    </form>
                                                </div>
                                            </div>
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
        <!-- /Page Container -->
        <!-- Main Container -->

    </div>

    <!--Basic Scripts-->
    <script src="../../../user/assets/js/jquery.min.js"></script>
    <script src="../../../user/assets/js/bootstrap.min.js"></script>
    <script src="../../../user/assets/js/slimscroll/jquery.slimscroll.min.js"></script>

    <!--Beyond Scripts-->
    <script src="../../../user/assets/js/beyond.min.js"></script>

    <!--Page Related Scripts-->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
    <script src="https://maps.gstatic.com/intl/en_us/mapfiles/api-3/17/0/main.js" type="text/javascript"></script>

    <script src="assets/js/charts/flot/jquery.flot.js"></script>
    <script src="assets/js/charts/flot/jquery.flot.resize.js"></script>

    <script>
        //Google Map
        $('#contacttab').click(function () {
            function initialize() {
                var myLatlng = new google.maps.LatLng(43.6531935, -79.3806243);
                var mapOptions = {
                    zoom: 15,
                    scrollwheel: false,
                    center: myLatlng,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                }
                var map = new google.maps.Map(document.getElementById('contact-map'), mapOptions);
                var marker = new google.maps.Marker({
                    position: myLatlng,
                    map: map,
                    title: 'Map'
                });
            }
            google.maps.event.addDomListener(window, 'click', initialize);
        });

        $(window).bind("load", function () {

            /*Sets Themed Colors Based on Themes*/
            themeprimary = getThemeColorFromCss('themeprimary');
            themesecondary = getThemeColorFromCss('themesecondary');
            themethirdcolor = getThemeColorFromCss('themethirdcolor');
            themefourthcolor = getThemeColorFromCss('themefourthcolor');
            themefifthcolor = getThemeColorFromCss('themefifthcolor');

            //--------------------------Visitor Chart --->
            var data = [{
                color: themeprimary,
                label: "Visits",
                data: [[3, 10], [4, 13], [5, 12], [6, 16], [7, 19], [8, 19], [9, 24], [10, 19], [11, 18], [12, 21], [13, 17],
                    [14, 14], [15, 12], [16, 14], [17, 15]]
            }];
            var options = {
                series: {
                    lines: {
                        show: true,
                        fill: true,
                        fillColor: { colors: [{ opacity: 0.2 }, { opacity: 0 }] }
                    },
                    points: {
                        show: true
                    }
                },
                legend: {
                    show: false
                },
                xaxis: {
                    tickDecimals: 0,
                    tickLength: 0,
                    color: '#ccc'
                },
                yaxis: {
                    min: 0,
                    tickLength: 0,
                    color: '#ccc'
                },
                grid: {
                    hoverable: true,
                    clickable: false,
                    borderWidth: 0,
                    aboveData: false,
                    color: '#fbfbfb'

                },
                tooltip: true
            };
            var placeholder = $("#visit-chart");
            var plot = $.plot(placeholder, data, options);
        });
    </script>
    
</body>
<!--  /Body -->
</html>
