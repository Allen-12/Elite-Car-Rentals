@extends('layouts.admin')

@section('content')


<div class=" hero w-100 p-4"  style="width: 100px; height: 700px; background-color: rgba(251, 251, 253, 0.1); background: url({{ asset('images/three.jpg') }}) no-repeat center ; background-size: cover;" >
    <div class="card-header text-center " style="background-color:rgba(243, 133, 7, 0.514)"><h2>User Dashboard</h2></div>
    <div class="card " style="margin: auto; opacity:0.95">
        <div class="card-body">
             <div class="card promoting-card" >
                <div class="card-body d-flex flex-row">
                    <div class="view overlay">
                        <h5>Edit Your Profile</h5>
                        <a href="/edit/user/" class="btn btn-dark">Profile</a>
                       
                    </div>
                </div>
            </div>
             <div class="card promoting-card" >
                <div class="card-body d-flex flex-row">
                    <div class="view overlay">
                        <div class="mt-2">
                            <h5>You Can Also Edit Your reservations!</h5>
                            <a href="/bookings/edit" class="btn btn-dark">Reservations</a>
                        </div>


                    </div>
                </div>
            </div>

        </div>
    </div>

</div>





@endsection