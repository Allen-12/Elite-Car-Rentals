@extends('layouts.user')

@section('content')




        <!--Navbar Here-->


  <!--Multifrom Navigation Section Here-->

<div class="container-fluid">
          <!--SUMMARY OF CURRENT BOOKING IS SHOWN HERE-->
        <div class="mt-3" style="color:white;">
            <div class="row">
                <div class="col-lg-10">
                    <p><strong class="h5">Pick Up</strong><br>
                        <!--Retrieve Pick Up-->
                        <small class="">Location: {{ $sessionData['pickUpLocation'] }}</small><br>
                        <!--Retrieve Pick Up Day and Time-->
                        <em class="">Date: {{ $sessionData['pickUpDate'] }}</em><br>
                        <em class="">Time: {{ $sessionData['pickUpTime'] }}</em>
                    </p>
                </div>

                <div class="col-lg-2 d-flex" style="text-align: right;">
                    <p><strong class="h5">Drop Off</strong><br>
                        <!--Retrieve Drop Off-->
                        <small>Location: {{ $sessionData['dropOffLocation'] }}</small> <br>
                        <!--Retrieve Drop Off Day and Time-->
                        <em class="">Date: {{ $sessionData['dropOffDate'] }}</em><br>
                        <em class="">Time: {{ $sessionData['dropOffTime'] }}</em>
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($vehicles as $vehicle)
                <div class="col-md-6 col-lg-4">
                    <a href="#" style="color: inherit">
                        <div class="card" style="width: 25rem ;margin-bottom: 20px; background-color:#D0D0D0;">
                            <img class="card-img-top" src="{{ asset('storage/'.$vehicle->image) }}" alt="Card image cap" style="height: 200px">
                            <div class="card-body">
                                <h5 class="card-title"><strong>{{ $vehicle->make }} {{ $vehicle->model }}</strong> </h5>
                                <p class="card-text">{{ $vehicle->carType->name }}</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item ">Automatic Transmission</li>
                                  <li class="list-group-item">Price per Day: KES {{ $vehicle->base_price_per_day }}</li>
                                @if($vehicle->availability == 1)
                                    <li class="list-group-item">Status: Available</li>

                                @else
                                    <li class="list-group-item disabled">Status: Not Available</li>
                                @endif


                            </ul>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>

<!--TABLE SHOWING VEHICLES IS HERE NOW-->

{{--<table class="table table-striped table-bordered table-responsive mt-3">--}}
{{--    <thead class="thead-dark">--}}
{{--        <tr>--}}
{{--          <th colspan="">Image</th>--}}
{{--          <th colspan="">Details</th>--}}
{{--          <th colspan="">Pricing</th>--}}
{{--        </tr>--}}
{{--    </thead>--}}

{{--    <tbody>--}}
{{--        @foreach($vehicles as $vehicle)--}}
{{--            <tr>--}}
{{--                <!--Retrieve Image URLs-->--}}
{{--                <td width="300em" height="150em"><img class="img-fluid"  src="{{ asset('storage/'.$vehicle->image) }}" alt=""></td>--}}
{{--                <!--Retrieve Vehicle Details-->--}}
{{--                <td width="300em">--}}
{{--                    <strong class="h3">{{ $vehicle->make }} {{ $vehicle->model }}</strong><br>--}}
{{--                    <em>{{ $vehicle->carType->name }}</em><br>--}}
{{--                    Automatic Transmission<br>--}}
{{--                    @if($vehicle->availability == 1)--}}
{{--                        <p class="card-text">Status: Available</p>--}}
{{--                    @else--}}
{{--                        <p class="card-text">Status: Not Available</p>--}}
{{--                    @endif--}}
{{--                    <a href="#">View Vehicle Information</a>--}}
{{--                </td>--}}
{{--                <!--Retrieve Price Details-->--}}
{{--                <td width="300em">--}}
{{--                    Price per Day: {{ $vehicle->base_price_per_day }}<br>--}}
{{--                    <a class="button_table btn btn-primary" href="/sessions/vehicleReservation" name="select">SELECT</a>--}}
{{--                </td>--}}
{{--            </tr>--}}
{{--        @endforeach--}}
{{--    </tbody>--}}
{{--</table>--}}
@endsection
