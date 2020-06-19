@extends('layouts.user')

@section('content')
<style media="screen">
  body{
    /*background-color: #000000;*/
  }
</style>
{{--    <!--Multifrom Navigation Section Here-->--}}
{{--    <div id="container">--}}
{{--      <div class="d-flex justify-content-between">--}}
{{--      <a type="button" href="/" class="test_section btn btn-primary" type="button" name="button">Step 1</a>--}}
{{--      <a type="button" href="/booking" class="test_section btn btn-warning" type="button" name="button">Step 2</a>--}}
{{--      <a type="button" href="/summary" class="test_section btn btn-danger" type="button" name="button">Step 3</a>--}}
{{--      <a type="button" href="/mailpdf" class="test_section btn btn-info" type="button" name="button" disabled>Step 4</a>--}}
{{--      </div>--}}
{{--    </div>--}}
<div class="container-fluid">
          <!--SUMMARY OF CURRENT BOOKING IS SHOWN HERE-->
        <div class="mt-3">
            <div class="row m-0 p-0">
                <div class="col-lg-10">
                    <p><strong class="h5">Pick Up Details</strong><br>
                        <!--Retrieve Pick Up-->
                        <small class="">County: {{ $locations['pickUpCounty'][0]->county_name }}</small><br>
                        <small class="">Location in County: {{ $locations['pickUpCountyLocation'][0]->name }}</small><br>
                        <!--Retrieve Pick Up Day and Time-->
                        <em class="">Date: {{ $sessionData['pickUpDate'] }}</em><br>
                        <em class="">Time: {{ $sessionData['pickUpTime'] }}</em>
                    </p>
                </div>

                <div class="col-lg-2 d-flex" style="text-align: right">
                    <p><strong class="h5">Drop Off Details</strong><br>
                        <!--Retrieve Drop Off-->
                        <small class="">County: {{ $locations['dropOffCounty'][0]->county_name }}</small><br>
                        <small class="">Location in County: {{ $locations['dropOffCountyLocation'][0]->name }}</small><br>
                        <!--Retrieve Drop Off Day and Time-->
                        <em class="">Date: {{ $sessionData['dropOffDate'] }}</em><br>
                        <em class="">Time: {{ $sessionData['dropOffTime'] }}</em>
                    </p>
                </div>
            </div>
        </div>

        <div class="row m-0 p-0" style="height: 30rem;">
            @foreach($vehicles as $vehicle)
                <div class="col-md-6 col-lg-4" style="height: 30rem;">
                    <a href="/sessions/bookings/{{ $vehicle->id }}" style="color: inherit">
                        <div class="card mb-2">
                            <img class="card-img-top" src="{{ asset('storage/'.$vehicle->image) }}" alt="Card image cap" style="height: 200px">
                            <div class="card-body">
                                <h5 class="card-title"><strong>{{ $vehicle->make }} {{ $vehicle->model }}</strong> </h5>
                                <p class="card-text">{{ $vehicle->carType->name }}</p>
{{--                                  <p id="vehicleID" hidden >{{$vehicle->id}}</p>--}}
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item ">Automatic Transmission</li>
                                <li class="list-group-item">Price per Day: KES {{ $vehicle->base_price_per_day }}</li>
                                @if($vehicle->availability == 1)
                                    <li class="list-group-item">Status: Available</li>
                                @else
                                    <li class="list-group-item disabled">Status: Not Available</li>
                                @endif
                                <li class="list-group-item">Price per Day: KES {{ $vehicle->base_price_per_day }}</li>
                            </ul>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
@endsection
