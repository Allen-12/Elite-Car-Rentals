@extends('layouts.user')

@section('content')
    {{--    <!--Multifrom Navigation Section Here-->--}}
    {{--    <div id="container">--}}
    {{--      <div class="d-flex justify-content-between">--}}
    {{--        <button class="test_section btn btn-primary" type="button" name="button">Step 1</button>--}}
    {{--        <button class="test_section btn btn-warning" type="button" name="button">Step 2</button>--}}
    {{--        <button class="test_section btn btn-danger" type="button" name="button">Step 3</button>--}}
    {{--        <button class="test_section btn btn-info" type="button" name="button">Step 4</button>--}}
    {{--      </div>--}}
    {{--    </div>--}}

          <!--SUMMARY OF CURRENT BOOKING IS SHOWN HERE-->
        <div class="mt-3">
            <div class="row">
                <div class="col-lg-10">
                    <p><strong class="h5">Pick Up</strong><br>
                        <!--Retrieve Pick Up-->
                        <small class="text-muted">Location: {{ $sessionData['pickUpCounty'] }} , {{$sessionData['pickUpCountyLocation']}}</small><br>
                        <!--Retrieve Pick Up Day and Time-->
                        <em class="text-muted">Date: {{ $sessionData['pickUpDate'] }}</em><br>
                        <em class="text-muted">Time: {{ $sessionData['pickUpTime'] }}</em>
                    </p>
                </div>

                <div class="col-lg-2 d-flex" style="text-align: right">
                    <p><strong class="h5">Drop Off</strong><br>
                        <!--Retrieve Drop Off-->
                        <small>Location: {{ $sessionData['dropOffCounty'] }} , {{$sessionData['dropOffCountyLocation']}}</small> <br>
                        <!--Retrieve Drop Off Day and Time-->
                        <em class="text-muted">Date: {{ $sessionData['dropOffDate'] }}</em><br>
                        <em class="text-muted">Time: {{ $sessionData['dropOffTime'] }}</em>
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($vehicles as $vehicle)
                <div class="col-md-6 col-lg-4">
                    <a href="#" style="color: inherit">
                        <div class="card" style="width: 25rem ;margin-bottom: 20px">
                            <img class="card-img-top" src="{{ asset('storage/'.$vehicle->image) }}" alt="Card image cap" style="height: 200px">
                            <div class="card-body">
                                <h5 class="card-title">{{ $vehicle->make }} {{ $vehicle->model }}</h5>
                                <p class="card-text">{{ $vehicle->carType->name }}</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Automatic Transmission</li>
                                @if($vehicle->availability == 1)
                                    <li class="list-group-item">Status: Available</li>
                                @else
                                    <li class="list-group-item">Status: Not Available</li>
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
