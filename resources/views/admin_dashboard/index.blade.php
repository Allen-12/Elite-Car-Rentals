@extends('layouts.admin')

@section('content')


<div class=" hero w-100 p-4"  style="width: 100px; height: 700px; background-color: rgba(251, 251, 253, 0.1); background: url('images/three.jpg') no-repeat center ; background-size: cover;" >
    
               
                    <div class="card-header text-center " style="background-color:rgba(243, 133, 7, 0.514)"><h2>Administrator Dashboard</h2></div>
                    <div class="card " style="margin: auto">
                        
                    <div class="card-body">
                        
                        <div class="card promoting-card" >
                            <div class="card-body d-flex flex-row">
                                <div class="view overlay">
                        <h5>Create a vehicle for a specific car type</h5>
                        <div class="dropdown" >
                            <button class="btn btn-primary dropdown-toggle" style="background-color:orange; border-color:orange; " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Available Types
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                @foreach($carTypes as $carType)
                                    <a class="dropdown-item" href="/admin/cartypes/{{ $carType->id }}/cardescription/create">{{ $carType->name }}</a>
                                @endforeach
                            </div>
                        </div>
                            </div>
                        </div>
                    </div>
                            
                        
                    <div class="card promoting-card" >
                        <div class="card-body d-flex flex-row">
                            <div class="view overlay">
                        <h5>View vehicles for a specific car type</h5>
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" style="background-color:orange; border-color:orange;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Available Types
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                @foreach($carTypes as $carType)
                                    <a class="dropdown-item" href="/admin/cartypes/{{ $carType->id }}/cardescriptions">{{ $carType->name }}</a>
                                @endforeach
                            </div>
                        </div>
                            </div>
                        </div>
                    </div>
                            
                        
                    <div class="card promoting-card" >
                        <div class="card-body d-flex flex-row">
                            <div class="view overlay">
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
                
</div>
           


   

@endsection
