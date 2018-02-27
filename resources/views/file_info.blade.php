<html>
<head>
    <title>Title</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" media="all" >

    <style>
        address {
            font-weight: bolder;
        }

        .file .date {
            font-size: larger
        }

        .file .name {
            font-size: larger
        }

        .file img {
            border: 1px solid;
            width: 100%;
            height: 150px;
            padding: 5px;
        }

        .file .type, .file .code {
            width: 100%;
            border: 1px solid;
            font-size: larger
        }

        .file .return-address {
            width: 100%;
            border: 1px solid;
            margin-bottom: 10px;
        }
        .margin-top-20{
            margin-top: 20px;
        }
        .row {

            margin-right: -15px;
            margin-left: -15px;
        }
        .text-center {
            text-align: center;
        }
        .container{
            padding: 15px;
        }


    </style>
</head>
</html>

<body onload="window.print()">
<div class="container file">

    <div class="row">
        @foreach ($file_info as $data)
            <div>
            <div class="margin-top-20"  style="float: left; width: 47% ;margin-left: 10px">
                <div class="row"  style="height: 230px">
                    <div class="col-sm-4" style="float: left; width: 32%; margin-left: 25px">
                        <p class="name">  {{$data->name}}</p>
                        <address>
                            {{$data->address}}
                        </address>
                        <p class="name">  {{$data->quantity}} /  {{$data->product_name}}</p>
                    </div>
                    <div class="" style="float: left; width: 57%; margin-left: 1px">
                        <div class="text-center">  {{$data->date}}</div>
                        <img src="{{ URL::to('/assets/images/download.png') }}" alt="log">
                        <div class="type text-center">  {{$data->type_of_shipment}}</div>
                        <div class="code text-center">{{$data->code}}</div>
                        <div class="return-address text-center">
                            <strong>If undeliverd,return to:</strong>
                            <p>
                                {{$address->address}}   {{$address->city}}  {{$address->state}}  {{$address->country}}  {{$address->postal_code}}

                            </p>
                        </div>
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


