@extends('layouts.admin')

@section('content')
<div class="container h-100 hero w-100 p-4" style="width: 100px; height: 700px; background-color: rgba(251, 251, 253, 0.1); background: url('images/three.jpg') no-repeat center ; background-size: cover;">
<div class="row h-100 justify-content-center align-items-center"   ></div>
    <div class="card view overlay" style="max-width: 100rem;">
        <div class="header pt-3 peach-gradient"  style="background-color:rgba(243, 133, 7, 0.514)"><h4 class="h1-responsive  text-center my-4">Edit Details for {{ $carDescription->make }} {{ $carDescription->model }}</h4></div>
        <div class="card-body  card-body-cascade">
            <form class="col-20" method="POST" enctype="multipart/form-data" action="/admin/cardescriptions/{{ $carDescription->id }}">
                @csrf
                @method('PATCH')

                <div class="form-group">
                    <label for="make">Make</label>
                    <input type="text" class="form-control" name="make" id="make" aria-describedby="makeHelp" value="{{ $carDescription->make }}" placeholder="Enter the make of the vehicle">
                    <small id="makeHelp" class="form-text text-muted">The make of the car you want to be created. E.g. Nissan or Toyota</small>
                    @error('make')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="model">Model</label>
                    <input type="text" class="form-control" name="model" id="model" aria-describedby="modelHelp" value="{{ $carDescription->model }}" placeholder="Enter the model of the vehicle">
                    <small id="modelHelp" class="form-text text-muted">The model of the car you want to be created. E.g. Dualis or Axio</small>
                    @error('model')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="colour">Colour</label>
                    <input type="color" class="form-control" name="colour" id="colour" aria-describedby="colourHelp" value="{{ $carDescription->colour }}" placeholder="Enter the colour of the vehicle">
                    <small id="colourHelp" class="form-text text-muted">Select the colour for the car you want to be created</small>
                    @error('colour')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="number_plate">Vehicle Registration</label>
                    <input type="text" class="form-control" name="number_plate" id="number_plate" aria-describedby="numberPlateHelp" value="{{ $carDescription->number_plate }}" placeholder="Enter the registration of the vehicle">
                    <small id="numberPlateHelp" class="form-text text-muted">The number plate of the car you want to be created. E.g. KAA 111J</small>
                    @error('number_plate')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="number_plate">Base Price per Day</label>
                    <input type="text" class="form-control" name="base_price_per_day" id="basePrice" aria-describedby="basePriceHelp" value="{{ $carDescription->base_price_per_day }}" placeholder="Enter the base price of the vehicle">
                    <small id="basePriceHelp" class="form-text text-muted">The base price per day of the car you want to be created.</small>
                    @error('base_price_per_day')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <label for="available">Available</label>
                            <input type="radio" id="available" name="availability" value=1>
                        </div>
                        <div class="input-group-text">
                            <label for="notAvailable">Not Available</label>
                            <input type="radio" id="notAvailable" name="availability" value=0>
                        </div>
                    </div>
                </div>
                <div class="form-group mt-2">
                    <label for="image">Picture</label>
                    <input type="file" class="form-control" name="image" id="image" aria-describedby="imageHelp" value="{{ asset('storage/'.$carDescription->image) }}">
                    <small id="imageHelp" class="form-text text-muted">The image that you want to be displayed when the car is created</small>
                    @error('image')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <button type="submit" style="background-color:orange; border-color:orange; " class=" btn btn-raised btn-rounded z-depth-1 btn-warning">Edit Details</button>
            </form>
        </div>
    </div>
    
@endsection
