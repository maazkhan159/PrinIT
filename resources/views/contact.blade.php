@extends('layouts/main')

@section('body_content')

    <div class="services-breadcrumb">
        <div class="agile_inner_breadcrumb">
            <ul class="w3_short">
                <li><a href="index.html">Home</a><i>||</i></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </div>
    <!-- //w3_short -->
    <!-- mail -->
    <div class="banner-bottom">
        <div class="container">
            <h3 class="title-w3l"><span>C</span>ontact</h3>
            <div class="w3_testimonials_grids">
                <div class="col-md-3 w3_contact_grid">
                    <div class="agile_call">
                        <div class="col-xs-3 w3l_contact_grid_left">
                            <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
                        </div>
                        <div class="col-xs-9 w3l_contact_grid_right">
                            <ul>
                                <li>+(000) 12 890 679</li>
                                <li>+(001) 13 456 656</li>
                            </ul>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="agileits_w3layouts_address">
                        <div class="col-xs-3 w3l_contact_grid_left">
                            <span class="fa fa-map-marker" aria-hidden="true"></span>
                        </div>
                        <div class="col-xs-9 w3l_contact_grid_right">
                            <ul>
                                <li>345 Diamond Street,</li>
                                <li>Greece.</li>
                            </ul>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="w3_agileits_mail">
                        <div class="col-xs-3 w3l_contact_grid_left">
                            <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                        </div>
                        <div class="col-xs-9 w3l_contact_grid_right">
                            <ul>
                                <li><a href="mailto:info@example1.com">info@example1.com</a></li>
                                <li><a href="mailto:info@example2.com">info@example2.com</a></li>
                            </ul>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="col-md-9 w3_contact_grid">
                    <form action="#" method="post">
                        <div class="col-md-6 wthree_contact_grid_left">
                            <input type="text" name="Name" placeholder="Name" required="">
                            <input type="email" name="Email" placeholder="Email" required="">
                            <input type="text" name="Website" placeholder="Website" required="">
                            <input type="text" name="Subject" placeholder="Subject" required="">
                        </div>
                        <div class="col-md-6 wthree_contact_grid_right">
                            <textarea placeholder="Message..." required=""></textarea>
                            <input type="submit" value="Send" >
                        </div>
                    </form>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <div class="map wow fadeInUp animated" data-wow-delay=".5s">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50996.31320435244!2d-122.06676498187694!3d36.97949802442312!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808e441b7c36d549%3A0x52ca104b2ad7f985!2sSanta+Cruz%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1469096018666" style="border:0"></iframe>
    </div>

    <!-- //mail -->

@endsection