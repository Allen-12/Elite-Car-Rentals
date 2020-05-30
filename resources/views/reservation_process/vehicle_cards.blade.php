<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Elite Car Rentals</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

      </head>
      <body>
    <!--Navbar Here-->
          <nav class="navbar navbar-dark bg-dark">
                <a class="navbar-brand">Elite Car Rental</a>
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="#">Log In</a>
            </div>
          </nav>
    <!--Multifrom Navigation Section Here-->
    <div id="container">
      <div class="d-flex justify-content-between">
        <button class="test_section btn btn-primary" type="button" name="button">Step 1</button>
        <button class="test_section btn btn-warning" type="button" name="button">Step 2</button>
        <button class="test_section btn btn-danger" type="button" name="button">Step 3</button>
        <button class="test_section btn btn-info" type="button" name="button">Step 4</button>
      </div>
    </div>

      <!--SUMMARY OF CURRENT BOOKING IS SHOWN HERE-->
     <div class="container">
      <div class="row">
        <div class="col-sm-4">

        <p> <strong class="h5">Pick Up</strong> <br>
        <!--Retrieve Pick Up-->
          <small class="dsiplay-4">Location: Base fulani tu</small><br>
        <!--Retrieve Pick Up Day and Time-->
        <em class="text-muted">Thu, May 28, 12:00 AM</em></p>

        </div>

        <div class="col-sm-4">

          <p> <strong class="h5">Return</strong> <br>
        <!--Retrieve Drop Off-->
        <small>Location: Base fulani tena</small> <br>
        <!--Retrieve Drop Off Day and Time-->
        <em class="text-muted">Sun ,May 31, 12:00 AM</em></p>

        </div>
      </div>
    </div>

    <div class="row m-0 p-5">
        @foreach($vehicles as $vehicle)
            <div class="col-xl-6">
                <div class="card mb-2" style="width: 38rem;">
                    <img class="card-img-top" src="{{ asset('storage/'.$vehicle->image) }}" alt="Card image cap" style="object-fit: cover;" height="300px">
                    <div class="card-body">
                        <h5 class="card-title">{{ $vehicle->make }} {{ $vehicle->model }}</h5>
                        <p class="card-text">{{ $vehicle->number_plate }}</p>
                        <p class="card-text">Price per Day: {{ $vehicle->base_price_per_day }}</p>
                        @if($vehicle->availability == 1)
                            <p class="card-text">Status: Available</p>
                        @else
                            <p class="card-text">Status: Not Available</p>
                        @endif
                        <div class="card-footer align-content-center">
                            <a href="/admin/cardescriptions/{{ $vehicle->id }}/edit" class="btn btn-warning">Edit</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
  </body>
  </html>
