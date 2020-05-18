@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">Add New Car for {{ $carType->name }} Category</div>
        <div class="card-body">
            <form method="POST" action="/admin/cartypes/{{ $carType->id }}/cardescription">
                @csrf

                <div class="form-group">
                    <label for="make">Make</label>
                    <input type="text" class="form-control" name="make" id="make" aria-describedby="makeHelp" placeholder="Enter the make of the vehicle">
                    <small id="makeHelp" class="form-text text-muted">The make of the car you want to be created. E.g. Nissan or Toyota</small>
                    @error('make')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="model">Model</label>
                    <input type="text" class="form-control" name="model" id="model" aria-describedby="modelHelp" placeholder="Enter the model of the vehicle">
                    <small id="modelHelp" class="form-text text-muted">The model of the car you want to be created. E.g. Dualis or Axio</small>
                    @error('model')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="colour">Colour</label>
                    <input type="color" class="form-control" name="colour" id="colour" aria-describedby="colourHelp" placeholder="Enter the colour of the vehicle">
                    <small id="colourHelp" class="form-text text-muted">Select the colour for the car you want to be created</small>
                    @error('colour')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="number_plate">Vehicle Registration</label>
                    <input type="text" class="form-control" name="number_plate" id="number_plate" aria-describedby="numberPlateHelp" placeholder="Enter the registration of the vehicle">
                    <small id="numberPlateHelp" class="form-text text-muted">The number plate of the car you want to be created. E.g. KAA 111J</small>
                    @error('number_plate')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="number_plate">Base Price per Day</label>
                    <input type="text" class="form-control" name="base_price_per_day" id="basePrice" aria-describedby="basePriceHelp" placeholder="Enter the base price of the vehicle">
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
                <button type="submit" class="btn btn-dark mt-3">Add Vehicle</button>
            </form>
        </div>
    </div>
@endsection
