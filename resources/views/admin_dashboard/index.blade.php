@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header text-center">Administrator Dashboard</div>

                    <div class="card-body">
                        <h5>Create a vehicle for a specific car type</h5>
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Available Types
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                @foreach($carTypes as $carType)
                                    <a class="dropdown-item" href="/admin/cartypes/{{ $carType->id }}/cardescription/create">{{ $carType->name }}</a>
                                @endforeach
                            </div>
                        </div>

                        <h5>View vehicles for a specific car type</h5>
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Available Types
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                @foreach($carTypes as $carType)
                                    <a class="dropdown-item" href="/admin/cartypes/{{ $carType->id }}/cardescriptions">{{ $carType->name }}</a>
                                @endforeach
                            </div>
                        </div>

                        <div class="mt-2">
                            <h5>Can't find the car type? Create it now!</h5>
                            <a href="/admin/cartypes/create" class="btn btn-dark">Add a new Car Type</a>
                        </div>

                        <div class="mt-2">
                            <h5>Add a County in which your vehicles can be picked from</h5>
                            <a href="/admin/counties/create" class="btn btn-dark">Add a county</a>
                        </div>

                        <h5 class="mt-2">Add a specific location in a county that will be used for pickup and drop off of vehicles</h5>
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Available Counties
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                @foreach($counties as $county)
                                    <a class="dropdown-item" href="/admin/counties/{{ $county->id }}/countylocations/create">{{ $county->county_name }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
