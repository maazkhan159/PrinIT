@extends('layouts/main')

@section('body_content')

<div class="about w3layouts-agileinfo" id="about" style="background-color: #8080801a;">
    <div class="container">
        <!-- <div>
        <a href="signin.php"><i class="fa fa-sign-in" title="Sign In" style="font-size: 50px; color: green; margin-right: 1092px; margin-top: -25px;"></i></a></div>
        <div>
        <a href="signup.php"><i class="fa fa-user-plus" title="Sign up" style="font-size: 50px; color: green; margin-right: 950px; margin-top: -25px;"></i></a></div> -->
        <h3 class="title-w3l"><span>W</span>elcome</h3>

    </div>
    <div>

    </div>
    <div class="container">
        <div class="row grid">

            <div class="col-md-12 col-sm-6 col-md-6 col-lg-3 col-md-3 card grid-item">
                <div class="thumbnail">
                    <img src="{{ URL::to('/assets/images/black.png')}}" >
                    <div class="caption">
                        
                        <h3 id="thumbnail-label" style="color: balck;">Starter</h3>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <a href="#" class="btn btn-success" style="width: 106px;
height: 35px; background-color:black; border-color:black; font-size: 15px;">Select</a>
                    </div>
                    <div class="caption card-footer">

                    </div>
                </div>
            </div>

            <div class="col-md-12 col-sm-6 col-md-6 col-lg-3 col-md-3 card grid-item">
                <div class="thumbnail">
                    <img src="{{ URL::to('/assets/images/green.png')}}" class="">
                    <div class="caption">
                        <h3 id="thumbnail-label" style="color:#17aa17;">Basic</h3>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <a href="#" class="btn btn-success" style="width: 106px;
height: 35px; background-color:#17aa17; border-color:#17aa17; font-size: 15px;">Select</a>
                    </div>
                    <div class="caption card-footer">
                        <ul class="list-inline">

                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-sm-6 col-md-6 col-lg-3 col-md-3 card grid-item">
                <div class="thumbnail">
                    <img src="{{ URL::to('/assets/images/blue.png')}}" class="">
                    <div class="caption">
                        <h3 id="thumbnail-label" style="color:#3b3bc2;">Advance</h3>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <a href="#" class="btn btn-success" style="width: 106px;
height: 35px; background-color:#3b3bc2; border-color: #3b3bc2; font-size: 15px;">Select</a>
                    </div>
                    <div class="caption card-footer">

                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-6 col-md-6 col-lg-3 col-md-3 card grid-item">
                <div class="thumbnail">
                    <img src="{{ URL::to('/assets/images/red.png')}}" class="">
                    <div class="caption">
                        <h3 id="thumbnail-label" style="color: #d21212;">Business</h3>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <a href="#" class="btn btn-success" style="width: 106px;
height: 35px; background-color:#d21212; border-color: #d21212; font-size: 15px;">Select</a>
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
</div>



<!-- //footer -->

@endsection