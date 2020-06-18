@extends('layouts.admin')

@section('content')

    <div class="card">
        <div class="card-header text-center " style="background-color:rgba(243, 133, 7, 0.514)"><h2>Add New Car Type</h2></div>
        <div class="card-body view overlay" >
            
                
                    
            <form method="POST" action="/admin/cartypes">
                @csrf

                <div class="form-group">
                    <label for="exampleInputEmail1">Car Type</label>
                    <input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelp" placeholder="Enter the type of the car">
                    <small id="nameHelp" class="form-text text-muted">The type of car you want to be created. E.g. SUV or saloon</small>
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <button type="submit" class="btn btn-dark">Create Car Type</button>
            </form>
        </div>

        <div class="card-body mt-4">
            <div class="card-header">Available Car Types</div>
            <table class="table table-bordered">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Car Type</th>
                    <th scope="col"></th>
                </thead>
                <tbody>
                    @foreach($carTypes as $carType)
                        <tr>
                            <td>{{$carType->id}}</td>
                            <td>{{$carType->name}}</td>
                            <td><a href="/admin/cartypes/{{ $carType->id }}/edit" style="background-color:orange; border-color:orange; " class=" btn btn-raised btn-rounded z-depth-1 btn-warning">Edit</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
            
        
    
@endsection
