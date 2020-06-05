@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">Add New Location for {{ $county->county_name }}</div>
        <div class="card-body">
            <form method="POST" action="/admin/counties/{{ $county->id }}/countylocations">
                @csrf

                <div class="form-group">
                    <label for="exampleInputEmail1">Location Name</label>
                    <input type="text" class="form-control" name="name" id="locationName" aria-describedby="countyNameHelp" placeholder="Enter the location">
                    <small id="nameHelp" class="form-text text-muted">The specific location in the county where vehicles can be picked up or dropped off e.g. Kileleshwa</small>
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <button type="submit" class="btn btn-dark">Add County Location</button>
            </form>
        </div>

        <div class="card-body mt-4">
            <div class="card-header">Available County Locations</div>
            <table class="table table-bordered">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">County</th>
                    <th scope="col">Location Name</th>
                    <th scope="col"></th>
                </thead>
                <tbody>
                    @foreach($countyLocations as $countyLocation)
                        <tr>
                            <td>{{$countyLocation->id}}</td>
                            <td>{{$countyLocation->county->county_name}}</td>
                            <td>{{$countyLocation->name}}</td>
                            <td><a href="/admin/cartypes/{{ $county->id }}/countylocations/edit" class="btn btn-warning">Edit</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
