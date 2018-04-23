<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Easy Label Printing</title>
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="//fonts.googleapis.com/css?family=Athiti:200,300,400,500,600,700&amp;subset=latin-ext,thai,vietnamese" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
    
    .navbar-inverse .navbar-nav > li > a:focus, .navbar-inverse .navbar-nav > li > a:hover {
    color:#f77924;
    background-color: transparent;

}
</style>
<body>



<nav class="navbar navbar-inverse" style="border-radius: 0px; border-color: #e7e7e7; background-color: #e7e7e7; padding: 10px 0; min-height: 70px; width: 100%; margin: 0px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <img style="margin-left: -21px;" src="{{URL::to ('assets/images/123456.png')}}" alt="">
      <a class="navbar-brand" href="#" style="font-weight: 700;color:#f77924 !important;font-size: 30px;line-height: 20px;font-style: normal;text-transform: uppercase;">
      </a>

    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">

        <li style="font-size: 15px;font-weight: 600; text-transform: uppercase;font-family: "Raleway", sans-serif; "><a href="{{ url('/') }}" class="scroll active">HOME</a></li>
        <li style="font-size: 15px;font-weight: 600;text-transform: uppercase;font-family: "Raleway", sans-serif;"><a href="{{ url('/about') }}">ABOUT</a></li>
         <li style="font-size: 15px;font-weight: 600;text-transform: uppercase;font-family: "Raleway", sans-serif;"><a href="{{ url('/pricing') }}">PRICING</a></li>
        <li style="font-size: 15px;font-weight: 600;text-transform: uppercase;font-family: "Raleway", sans-serif;"><a href="{{ url('/contact') }}">Contact</a></li>
          @if(Auth::check())
              <li style="font-size: 15px;font-weight: 600;text-transform: uppercase;font-family: sans-serif;"><a href="{{ url('/logout') }}" ><span class="fa fa-sign-out"></span> Log Out</a></li>

          @endif
          @if(!Auth::check())
              <li style="font-size: 15px;font-weight: 600;text-transform: uppercase;font-family: sans-serif;"><a href="{{ url('/login') }}"><span class="fa fa-sign-in" ></span> Login</a></li>
              <li style="font-size: 15px;font-weight: 600;text-transform: uppercase;font-family: sans-serif;"><a href="{{ url('/register') }}"><span class="fa fa-user-plus"></span> Sign Up</a></li>

          @endif



      </ul>
    </div>
  </div>
</nav>
    <!-- <div class="banner-w3l"> -->
        <!-- header -->
        <div>

            <!-- <div class="logo">
                <h1><a href="{{url('/')}}"><span>B</span>usiness<label>Field</label></a></h1>
            </div> -->
            <div class="clearfix"> </div>
        </div>
        <!-- //header -->
        <!-- top-nav -->

        <!-- <nav class="cd-stretchy-nav edit-content">
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
        </nav> -->
        <!-- //top-nav -->
        <div class="container-fluid">

            <div class="agile_banner_info" style="padding: 0em 0;">

                <!-- <div class="agile_banner_info1">
                    <h3>Welcome To <span>Business</span></h3>
                    <div id="typed-strings" class="agileits_w3layouts_strings">
                        <p>start your <i>business</i> to complete your dream</p>
                        <p>Our <i>business</i> is Your business</p>

                    </div>
                    <span id="typed" style="white-space:pre;"></span>
                </div> -->


  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="{{URL::to ('assets/images/11.jpg')}}" alt="Los Angeles" width="100%" height="100%">
        <!-- <div class="carousel-caption">
          <h3>Los Angeles</h3>
          <p>LA is always so much fun!</p>
        </div> -->
      </div>

      <div class="item">
        <img src="{{URL::to ('assets/images/12.jpg')}}" alt="Chicago" width="100%" height="100%" >
        <!-- <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago!</p>
        </div> -->
      </div>

      <div class="item">
        <img src="{{URL::to ('assets/images/13.jpg')}}" alt="New York" width="100%" height="100%" >
        <!-- <div class="carousel-caption">
          <h3>New York</h3>
          <p>We love the Big Apple!</p>
        </div> -->
      </div>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
            </div>
        </div>
    </div>


@yield('body_content')


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
    <div class="copyright">
        <div class="container">
            <p>© All rights reserved | Design by MAAZ&HAIDER Solutions.</p>
        </div>
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
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5ab4ec3f4b401e45400dfd94/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<!-- //responsiveslider -->
<!-- //js-scripts -->

</body>
</html>