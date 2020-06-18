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
                    <p><strong class="h5">Pick Up Details</strong><br>
                        <!--Retrieve Pick Up-->
                        <small class="text-muted">County: {{ $locations['pickUpCounty'][0]->county_name }}</small><br>
                        <small class="text-muted">Location in County: {{ $locations['pickUpCountyLocation'][0]->name }}</small><br>
                        <!--Retrieve Pick Up Day and Time-->
                        <em class="text-muted">Date: {{ $sessionData['pickUpDate'] }}</em><br>
                        <em class="text-muted">Time: {{ $sessionData['pickUpTime'] }}</em>
                    </p>
                </div>

                <div class="col-lg-2 d-flex" style="text-align: right">
                    <p><strong class="h5">Drop Off Details</strong><br>
                        <!--Retrieve Drop Off-->
                        <small class="text-muted">County: {{ $locations['dropOffCounty'][0]->county_name }}</small><br>
                        <small class="text-muted">Location in County: {{ $locations['dropOffCountyLocation'][0]->name }}</small><br>
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
                    <a href="/sessions/bookings/{{ $vehicle->id }}" style="color: inherit">
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
@endsection
