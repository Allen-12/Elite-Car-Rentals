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
                            <a href="/admin/cartypes/create" class="btn btn-dark">Create a new Car Type</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
