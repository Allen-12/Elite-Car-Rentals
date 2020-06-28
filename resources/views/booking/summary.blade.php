@extends('layouts.user')

@section('content')
    <style >
        body{
            /*background-color: ;*/
        }
        .col-sm-4
        {
            border-right-style: inset ;
            margin: 30px;
            justify-content: space-between;
        }
        #container
        {
            background-color: #c0c0c0;
        }
        .tab {
            padding-left: 8px;
        }
        hr{
            border: 1px solid;
        }
        .col-sm-7{
            border-right: 1px solid;
        }
        .test_section
        {
            display: inline-block;
            width: 12%;
            border-radius: 50%;
            background-color:#fc983c;
            color: white;
            padding: 14px 18px;
            font-size: 16px;
            margin: 15px 80px;
            text-align: center;
        }
    </style>
    <body>
    {{--    <!--Multifrom Navigation Section Here-->--}}
    {{--    <div id="container">--}}
    {{--      <div class="d-flex justify-content-between">--}}
    {{--      <a type="button" href="/" class="test_section btn btn-primary" type="button" name="button">Step 1</a>--}}
    {{--      <a type="button" href="/booking" class="test_section btn btn-warning" type="button" name="button">Step 2</a>--}}
    {{--      <a type="button" href="/summary" class="test_section btn btn-danger" type="button" name="button">Step 3</a>--}}
    {{--      <a type="button" href="email_demo" class="test_section btn btn-info" type="button" name="button" disabled>Step 4</a>--}}
    {{--      </div>--}}
    {{--    </div>--}}
    <div class="container">
        <div class="jumbotron mb-0">
            <hr>
            <h3 class="text-center"><strong>BOOKING SUMMARY</strong></h3>
            <hr>
            <div class="row">
                <div class="col-sm-7">
                    <h5 class=""><strong> LOCATION & DATE</strong> </h5>
                    <div class="row">
                        <div class="col-sm-6 ">
                            <!--Pick Up Details-->
                            <p style="color:red; line-height:0px;">Pick Up </p>
                            <p>  County: {{ $locations['pickUpCounty'][0]->county_name }} <br>
                                Location in County: {{ $locations['pickUpCountyLocation'][0]->name }} <br>
                                <em class="">Date: {{ $sessionData['pickUpDate'] }}</em> <br>
                                <em class="">Time: {{ $sessionData['pickUpTime'] }}</em>
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <!--Drop Off Details-->
                            <p style="color:red; line-height:0px;">Drop Off</p>
                            <p>County: {{ $locations['dropOffCounty'][0]->county_name }} <br>
                                Location in County: {{ $locations['dropOffCountyLocation'][0]->name }} <br>
                                <em class="">Date: {{ $sessionData['dropOffDate'] }}</em><br>
                                <em class="">Time: {{ $sessionData['dropOffTime'] }}</em>
                            </p>
                        </div>
                    </div>
                    <hr>
                    <h5><strong> CAR DETAILS</strong> </h5>
                    <div class="row">
                        <div class="col-sm-6 mb-3">
                            <strong>{{ $vehicles['make'] }}  {{  $vehicles['model'] }}</strong><br>
                            <em>{{ $vehicles['car_type']['name'] }}</em> <br>
                            <em>Number Plate: {{$vehicles['number_plate'] }}</em> <br>
                            Automatic Transmission
                        </div>
                        <div class="col-md-6 mb-3">
                            <img class="img-responsive" src="{{ asset('storage/'.$vehicles['image']) }}" alt="" height="100" width="151">
                        </div>
                    </div>
                    <hr>
                    <h5><strong> RATE TERMS</strong> </h5>
                    <div class="row">
                        <div class="col-md-12">
                            <p class="text-justify"> <strong>These rate terms apply for this specific rental.</strong>

                                If for any reason you change your rental parameters (pick up dates, times, etc.), those changes must follow these terms or your rate will also change.

                                Your rate was calculated based on the information provided. Some modifications may change this rate. Thank you</p>
                        </div>
                    </div>
                    <hr>
                </div>

                <div class="col-sm-5">
                    <h5><strong>PRICING</strong> </h5>
                    <p>We accept various payment methods</p>
                    <p class="text-justify" style="line-height:3.5em; font-size:1.2em;"><strong>Base Rate/day: <span class="tab"> Kshs {{$vehicles['base_price_per_day']}} </strong>
                        <br>
                        <em> Duration(in days): {{$date_diff}} Days </em>   <br>
                        <strong><em>TOTAL FEE:  KES {{$total_price}}</em> </strong>
                    </p>
                    <a class="btn btn-warning" href="/bookings/completeBooking">COMPLETE BOOKING</a>
                </div>
            </div>
        </div>
    </div>
    </body>
@endsection
