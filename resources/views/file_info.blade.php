<html>
<head>
    <title>Title</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" media="all" >

    <style>
        address {
            font-weight: bold;
            width: 110px;
        }

        .file .date {
            font-size: small;

        }

        .file .name {
            font-size: small;
             font-weight: bolder;
            width: 50px;
        }
        .file .baddress{
            font-size: small;
            width: 110px;
            height: 10px;
        }

        .file img {
            border: 1px solid;
            width: 150px;
            height: 67px;
            padding: 5px;
            margin-bottom: 5px;
        }

        .file .type, .file .code {
            width: 200px;
            border: 1px solid;
            font-size:small;
            margin-bottom: 5px;
        }

        .file .return-address {
            width: 200px;
            border: 1px solid;
            margin-bottom: 5px;
        }

        .row {

            margin-right: -15px;
            margin-left: -15px;
        }
        .text-center {
            text-align: center;
        }
        .container{
            padding: 01px;
        }


    </style>
</head>
</html>

<body onload="window.print()">
<div class="container file">

    <div class="row">
        @foreach ($file_info as $data)
            <div>
            <div class=""  style="float: left; width: 47% ;margin-left: 10px ;margin-top:0px">
                <div class="row"  style="height: 230px">
                    <div class="col-sm-4" style="float: left; width: 32%; margin-left: 25px;margin-top: 15px">
                        <p class="name" style="width: 50px">  {{$data['name']}}</p>
                        <address  >
                            {{$data['address'].' '.$data['state'].' '.$data['city'].' '.$data['country'].' '.$data['postal']}}
                        </address>
                        <p class="baddress">  {{$data['quantity']}} /  {{$data['product_name']}}</p>
                    </div>
                    <div class="" style="float: left; width: 35%; margin-left: 1px">
                        <div class="text-center">  {{$data['date']}}</div>

                        <img src="{{URL::to ($address->logo)}}" alt="logo" class="img-responsive img-thumbnail">
                        <div class="type text-center">  {{$data['type_of_shipment']}}</div>
                        <div class="code text-center">{{$data['code']}}</div>
                        <div class="return-address text-center">
                            <strong>If undeliverd,return to:</strong>
                            <p>
                                {{$address->address}}   {{$address->city}}  {{$address->state}}  {{$address->country}}  {{$address->postal_code}}

                            </p>

                        </div>
                        <p>www.haider&maaz.com</p>
                    </div>
                </div>
            </div>
            </div>

        @endforeach

    </div>

</div>
<script src="{{URL::to ('/assets/js/jquery.min.js')}}"></script>
<script>

    window.onafterprint = function(e){
        $(window).off('mousemove', window.onafterprint);
       window.location = "{{url('user_dashboard')}}"
    };





</script>
</body>


