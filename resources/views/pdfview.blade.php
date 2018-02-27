@extends('layouts.app')
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
        height: 20px;
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
</style>
@section('content')
    <div class="container file">
        <a href="{{ route('pdfview/21',['download'=>'pdf']) }}">Download PDF</a>
        <div class="row">
            @foreach ($items as $data)
                <div class="col-md-4 margin-top-20">
                    <div class="row">
                        <div class="col-sm-4">
                            <address>
                                {{$data->address}}
                            </address>
                            <p class="name">  {{$data->name}}</p>
                        </div>
                        <div class="col-sm-8">
                            <div class="text-center">  {{$data->date}}</div>
                            <img src="" alt="log">
                            <div class="type text-center">  {{$data->type_of_shipment}}</div>
                            <div class="code text-center">{{$data->code}}</div>
                            <div class="return-address text-center">
                                <strong>If undeliverd,return to:</strong>
                                <p>AEL@ *A Adswood Lane West,
                                    Stockport. SK3 8HT Top Quality Products Superb Prices.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
@endsection
