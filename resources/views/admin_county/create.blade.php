@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header text-center " style="background-color:rgba(243, 133, 7, 0.514)"><h2>Add New County</h2></div>
        <div class="card-body">
            <form method="POST" action="/admin/counties">
                @csrf

                <div class="form-group">
                    <label for="name">County Name</label>
                    <input type="text" class="form-control" name="county_name" id="name" aria-describedby="countyNameHelp" placeholder="Enter the name of the county">
                    <small id="nameHelp" class="form-text text-muted">The county you want to add e.g. Nairobi</small>
                    @error('county_name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <button type="submit" class="btn btn-dark">Add County</button>
            </form>
        </div>

        <div class="card-body mt-4">
            <div class="card-header">Available Counties</div>
            <table class="table table-bordered">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">County Name</th>
                    <th scope="col"></th>
                </thead>
                <tbody>
                    @foreach($counties as $county)
                        <tr>
                            <td>{{$county->id}}</td>
                            <td>{{$county->county_name}}</td>
                            <td><a href="/admin/cartypes/{{ $county->id }}/edit" style="background-color:orange; border-color:orange; " class=" btn btn-raised btn-rounded z-depth-1 btn-warning">Edit</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
