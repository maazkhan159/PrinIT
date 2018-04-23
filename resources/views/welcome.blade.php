@extends('layouts/main')

@section('body_content')

<div class="about w3layouts-agileinfo" id="about" style="background-color: #fff;">
    <div class="container">
        <h3 class="title-w3l"><span>W</span>elcome</h3>

    </div>
    <div>

    </div>
    <div class="container">
        <div class="row grid">

            <div class="col-md-12 col-sm-6 col-md-6 col-lg-3 col-md-3 card grid-item">
                <div class="thumbnail" style="background-color: transparent;
border-color: transparent;">
                    <i class="fa fa-shopping-cart" style="font-size:90px; color: #f77924; border-color: #f77924;" aria-hidden="true"></i>
                   <!--  <img src="{{ URL::to('/assets/images/black.png')}}" >
 -->                    <div class="caption">
                        <h3 id="thumbnail-label" style="color: balck;">Help you list items</h3>
                        <span style="display: inline-block;width: 70px;height: 1px;border-top: 1px solid #bbb;border-bottom: 1px solid;margin: auto;"></span>
                        <p style="color: #555; font-weight: 400; font-size: 15px; font-family: sans-serif;">Cut down the time it takes to list an Amazon item onto eBay from 10-15 minutes to 2-3 minutes.</p>
                        <!-- <a href="#" class="btn btn-success" style="width: 106px;
height: 35px; background-color:black; border-color:black; font-size: 15px;">Select</a> -->
                    </div>
                    <div class="caption card-footer">

                    </div>
                </div>
            </div>

            <div class="col-md-12 col-sm-6 col-md-6 col-lg-3 col-md-3 card grid-item">
                <div class="thumbnail" style="background-color: transparent;border-color: transparent;">
                    <i class="fa fa-pencil-square-o" aria-hidden="true" style="font-size:90px; color: #f77924; border-color: #f77924;"></i>
                    <div class="caption">
                        <h3 id="thumbnail-label" style="color:black;">Update prices for you</h3>
                        <span style="display: inline-block;width: 70px;height: 1px;border-top: 1px solid #bbb;border-bottom: 1px solid;margin: auto;"></span>
                        <p style="color: #555; font-weight: 400; font-size: 15px; font-family: sans-serif;">Prices on Amazon can change frequently. To maximise profits and avoid selling at a loss, you NEED to use a tool. </p>
        
                    </div>
                    <div class="caption card-footer">
                        <ul class="list-inline">

                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-sm-6 col-md-6 col-lg-3 col-md-3 card grid-item">
                <div class="thumbnail" style="background-color: transparent;border-color: transparent;">
                   <i class="fa fa-dot-circle-o" aria-hidden="true" style="font-size:90px; color: #f77924; border-color: #f77924;"></i>
                    <div class="caption">
                        <h3 id="thumbnail-label" style="color:black;">Provide tools</h3>
                        <span style="display: inline-block;width: 70px;height: 1px;border-top: 1px solid #bbb;border-bottom: 1px solid;margin: auto;"></span>
                        <p style="color: #555; font-weight: 400; font-size: 15px; font-family: sans-serif;">Use our simple and easy to use site without the need for going to Amazon, eBay or checking your email. </p>
                        <!-- <a href="#" class="btn btn-success" style="width: 106px;
height: 35px; background-color:#3b3bc2; border-color: #3b3bc2; font-size: 15px;">Select</a -->
                    </div>
                    <div class="caption card-footer">

                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-6 col-md-6 col-lg-3 col-md-3 card grid-item">
                <div class="thumbnail" style="background-color: transparent;border-color: transparent;">
                    <i class="fa fa-check-square-o" aria-hidden="true" style="font-size:90px; color: #f77924; border-color: #f77924;"></i>
                    <div class="caption">
                        <h3 id="thumbnail-label" style="color:Black;">Does this really work?</h3>
                        <span style="display: inline-block;width: 70px;height: 1px;border-top: 1px solid #bbb;border-bottom: 1px solid;margin: auto;"></span>
                        <p style="color: #555; font-weight: 400; font-size: 15px; font-family: sans-serif;">Yes! We built this website for ourselves, now you can use it too.</p>
                        
                    </div>
                    <div class="caption card-footer">

                    </div>
                </div>
            </div>


        </div><!-- thumbnail -->
    </div><!-- card -->

</div><!-- row -->
</div> <!-- container grid -->

<div class="clearfix"> </div>
<div class="container-fluid">
    <div class="row">
    
    <div class="col-md-6 no-padding" style="padding-right: 0px;
padding-left: 0px;     max-width: 101%;">
    <img src="{{ URL::to('/assets/images/vector4555.png')}}" class="img-responsive" >
</div>

<div class="col-md-6 no-padding" style="background-color: #8080801a">
    <h3 style="    text-transform: uppercase;font-weight: 900;margin-bottom: -10px; font-size: 1.8em; font-color: #060606; padding: 50px;
">Core features of
<span style="color: #f77924;">Easy Label Printing</span>

</h3>
<div>
    <i class="fa fa-shopping-cart" style="width: 50px;height: 50px;line-height: 50px;text-align: center;background-color: #32c5d2;color: #fff;font-size: 17px; border-radius: 50%; margin-left: 50px;" aria-hidden="true"></i>
    </div>
    <div style="padding-left: 113px;margin-top: -66px;">
        <h4 style="font-weight: 700;font-size: 15px;color: #000;text-transform: uppercase;margin-bottom: 5px;">Quick and easy eBay listings</h4>
        <p style="color: #555;font-weight: 400;font-size: 14px;line-height: 28px;padding-bottom: 25px;font-family: Open Sans, sans-serif; ">It's a two step process to get a listing's details from Amazon and post it on eBay. Use profit, shipping and other defaults from your user settings. </p>
         </div>
<div>

    <i class="fa fa-pencil-square-o" style="width: 50px;height: 50px;line-height: 50px;text-align: center;background-color: #32c5d2;color: #fff;font-size: 17px; border-radius: 50%; margin-left: 50px;" aria-hidden="true"></i>
</div>
<div style="padding-left: 113px;margin-top: -66px;">
        <h4 style="font-weight: 700;font-size: 15px;color: #000;text-transform: uppercase;margin-bottom: 5px;">Automated price and stock updates</h4>
        <p style="color: #555;font-weight: 400;font-size: 14px;line-height: 28px;
        padding-bottom:25px;font-family: "Open Sans", sans-serif; ">Price and stock on Amazon fluctuate frequently. Avoid common issues such as selling at a loss, listing items at prices that are now too high and listing items that have gone out of stock.  </p>
        </div>
        <div>
            
            <i class="fa fa-bar-chart" style="width: 50px;height: 50px;line-height: 50px;text-align: center;background-color: #32c5d2;color: #fff;font-size: 17px; border-radius: 50%; margin-left: 50px;" aria-hidden="true"></i>
        </div>
        <div style="padding-left: 113px;margin-top: -66px;">
        <h4 style="font-weight: 700;font-size: 15px;color: #000;text-transform: uppercase;margin-bottom: 5px;">Sales and status reports</h4>
        <p style="color: #555;font-weight: 400;font-size: 14px;line-height: 28px;font-family: "Open Sans", sans-serif;">View how many sales you've made each month, compared to previous months.   </p>
        </div>
        

</div>

</div>
</div>
<div class="clearfix"> </div>
</div>
<br><br>
<br><br><br><br>



<!-- //footer -->

@endsection