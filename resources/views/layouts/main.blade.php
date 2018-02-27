<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>PrintIT | Home Page</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Business Field web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--// Meta tag Keywords -->
    <!-- css files -->
    <link rel="stylesheet" href="{{ URL::to('/assets/css/bootstrap.css') }}"> <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="{{ URL::to('/assets/css/style.css')}}" type="text/css" media="all" /> <!-- Style-CSS -->
    <link rel="stylesheet" href="{{ URL::to('/assets/css/font-awesome.css')}}"> <!-- Font-Awesome-Icons-CSS -->
    <!-- //css files -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/3.3.2/masonry.pkgd.js"></script>
    <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Athiti:200,300,400,500,600,700&amp;subset=latin-ext,thai,vietnamese" rel="stylesheet">
</head>
<body>

<!-- banner -->
<div class="main-agile">
    <div class="banner-w3l">
        <!-- header -->
        <div class="header">

            <div class="logo">
                <h1><a href="index.html"><span>B</span>usiness<label>Field</label></a></h1>
            </div>
            <div class="clearfix"> </div>
        </div>
        <!-- //header -->
        <!-- top-nav -->

        <nav class="cd-stretchy-nav edit-content">
            @if(Auth::check())
                <a href="{{ url('/logout') }}" class="btn btn-warning" style="position: absolute;right: 90px ;background-color: #f77924;
                   border-color: #f77924;"
                >
                    <span><i class="fa fa-btn fa-sign-out">Logout</i></span>
                </a></li>
            @endif

            <a class="cd-nav-trigger" href="#0"> Menu <span aria-hidden="true"></span> </a>
            <ul>
                <li><a href="{{ url('/user_dashboard') }}" class="scroll active"><span>Home</span></a></li>
                <li><a href="{{ url('/about') }}"><span>About</span></a></li>
                <li><a href="{{ url('/contact') }}"><span>Contact</span></a></li>
                @if(!Auth::check())
                <li><a href="{{ url('/login') }}"><span>SignIn</span></a></li>

                <li><a href="{{ url('/register') }}"><span>SignUp</span></a></li>
                @endif


            </ul>
            <span aria-hidden="true" class="stretchy-nav-bg"></span>
        </nav>
        <!-- //top-nav -->
        <div class="container">

            <div class="agile_banner_info">

                <div class="agile_banner_info1">
                    <h3>Welcome To <span>Business</span></h3>
                    <div id="typed-strings" class="agileits_w3layouts_strings">
                        <p>start your <i>business</i> to complete your dream</p>
                        <p>Our <i>business</i> is Your business</p>
                        <p>Best Of <i>business</i> Planning advisors & specialist</p>
                    </div>
                    <span id="typed" style="white-space:pre;"></span>
                </div>
                <!-- 	<div class="banner_agile_para">
                        <p>Excepteur sint occaecat cupidatat non proident.</p>
                    </div> -->
                <!-- 	<div class="wrapper-inner-tab-backgrounds">
                        <div class="wrapper-inner-tab-backgrounds-first"><a href="single.html"><div class="sim-button button17">Read More</div></a></div>
                    </div> -->
            </div>
        </div>
    </div>
</div>

@yield('body_content')
<div class="footer-top">
    <div class="container">
        <h3 class="title-w3l-2"><span>N</span>ewsLetter</h3><br>
        <form action="#" method="post">
            <input type="email" placeholder="E-mail" name="email" required="">
            <input type="submit" value="Subscribe">
        </form>
    </div>
</div>
@yield('before_footer')
<footer>
    <div class="agileits-w3layouts-footer-top">
        <div class="container">
            <div class="col-md-6 agileits-w3layouts-footer-top-left">
                <p><i class="fa fa-phone" aria-hidden="true"></i> +1 234 567 8901</p>
            </div>
            <div class="col-md-6 agileits-w3layouts-footer-top-left">
                <p><i class="fa fa-envelope" aria-hidden="true"></i> Email :<a href="mailto:example@email.com"> abc@abc.com</a></p>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="agileits-footer-bottom">
        <div class="container">
            <div class="agileits-footer-bottom-grids">
                <div class="col-md-4 footer-bottom-left">
                    <h2>About Us</h2>


                    <div class="footer-img-info">
                        <p>Suspendisse potenti. Pellentesque pulvinar tellus at est ullamcorper, at elementum nibh laoreet. Nunc id diam in nulla sollicitudin auctor. Donec elementum felis turpis, vel interdum libero congue non. Mauris non magna convallis</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4  footer-bottom-right">
                <h5 >We are social</h5>
                <div class="agileinfo-social-grids">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-vk"></i></a></li>
                    </ul>

                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    </div>
    <div class="copyright">
        <div class="container">
            <p>© All rights reserved | Design by MAAZ&HAIDER Solutions.</p>
        </div>
    </div>
</footer>
<!-- js-scripts -->
<!-- js -->
<script type="text/javascript" src="{{ URL::to('/assets/js/jquery-2.1.4.min.js')}}"></script>
<script type="text/javascript" src="{{ URL::to('/assets/js/bootstrap.js')}}"></script> <!-- Necessary-JavaScript-File-For-Bootstrap -->
<!-- //js -->
<!-- menu-js -->
<script src="{{ URL::to('/assets/js/modernizr.js')}}"></script> <!-- Modernizr -->
<script src="{{ URL::to('/assets/js/menu.js')}}"></script> <!-- Resource jQuery -->
<!-- //menu-js -->
<!-- smooth scrolling -->
<script src="{{ URL::to('/assets/js/SmoothScroll.min.js')}}"></script>
<!-- //smooth scrolling -->
<!-- banner-type-text -->
<script src="{{ URL::to('/assets/js/typed.js')}}" type="text/javascript"></script>
<script>
    $(function(){

        $("#typed").typed({
            // strings: ["Typed.js is a <strong>jQuery</strong> plugin.", "It <em>types</em> out sentences.", "And then deletes them.", "Try it out!"],
            stringsElement: $('#typed-strings'),
            typeSpeed: 30,
            backDelay: 500,
            loop: false,
            contentType: 'html', // or text
            // defaults to false for infinite loop
            loopCount: false,
            callback: function(){ foo(); },
            resetCallback: function() { newTyped(); }
        });

        $(".reset").click(function(){
            $("#typed").typed('reset');
        });

    });

    function newTyped(){ /* A new typed object */ }

    function foo(){ console.log("Callback"); }
</script>
<!-- //banner-type-text -->
<!-- responsiveslider -->
<script src="{{ URL::to('/assets/js/responsiveslides.min.js')}}"></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
        // Slideshow 4
        $("#slider3").responsiveSlides({
            auto: true,
            pager:false,
            nav:false,
            speed: 500,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });

    });
</script>
<!-- //responsiveslider -->
<!-- //js-scripts -->

</body>
</html>