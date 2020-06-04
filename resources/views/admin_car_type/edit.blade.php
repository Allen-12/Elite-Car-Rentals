@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">Edit Car Type</div>
        <div class="card-body">
            <form method="POST" action="/admin/cartypes/{{ $carType->id }}">
                @csrf

                @method('PATCH')

                <div class="form-group">
                    <label for="exampleInputEmail1">Car Type</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ $carType->name }}" aria-describedby="nameHelp" placeholder="Enter the type of the car">
                    <small id="nameHelp" class="form-text text-muted">The type of car you want to be created. E.g. SUV or saloon</small>
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <button type="submit" class="btn btn-dark">Edit Car Type</button>
            </form>
        </div>
    </div>
@endsection
