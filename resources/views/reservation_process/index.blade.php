

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>{{ config('app.name') }}</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <style media="screen">
            .col-sm-4
            {
            border-right-style: inset ;
            margin: 30px;
            justify-content: space-between;
            }
            #container
            {
              background-color: #c0c0c0;
            }
            .test_section
            {
              display: inline-block;
              width: 12%;
              border-radius: 50%;
              background-color:#fc983c;
              color: white;
              padding: 14px 18px;
              font-size: 16px;
              margin: 15px 80px;
              text-align: center;
            }
            .button_table
            {
                background-color:#fc983c;
            }
            body{
            color: #343a40;
            }
        </style>
</head>

<body>
<!--Navbar Here
    <nav class="navbar navbar-dark bg-dark">
            <a href="/."class="navbar-brand">{{ config('app.name') }}</a>
        <div class="navbar-nav">
            <a class="nav-item nav-link" href="#">Log In</a>
        </div>
      </nav>

-->


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
            <p><strong class="h5">Pick Up</strong><br>
                <!--Retrieve Pick Up-->
                <small class="text-muted">Location</small><br>
                <!--Retrieve Pick Up Day and Time-->
                <em class="text-muted">Date</em>
            </p>
        </div>

        <div class="col-sm-4">
            <p><strong class="h5">Drop Off</strong><br>
                <!--Retrieve Drop Off-->
                <small>Location</small> <br>
                <!--Retrieve Drop Off Day and Time-->
                <em class="text-muted">Date</em>
            </p>
        </div>
    </div>
</div>

<!--TABLE SHOWING VEHICLES IS HERE NOW-->


<table class="table table-striped table-dark table-responsive-lg">

    <thead class="thead-dark">
        <tr>
          <th colspan="">Image</th>
          <th colspan="">Details</th>
          <th colspan="">Pricing</th>
        </tr>
    </thead>

    <tbody>
        @foreach($vehicles as $vehicle)
            <tr>
                <!--Retrieve Image URLs-->
                <td width="300em" height="150em"><img class="img-fluid"  src="{{ asset('storage/'.$vehicle->image) }}" alt=""></td>
                <!--Retrieve Vehicle Details-->
                <td width="300em">
                    <strong class="h3" >{{ $vehicle->make }} {{ $vehicle->model }}</strong><br>
                    <em>{{ $vehicle->carType->name }}</em><br>
                    Automatic Transmission<br>
                    <a href="#">View Vehicle Information</a>
                </td>
                <!--Retrieve Price Details-->
                <td width="300em">
                <strong> <em> Kshs  {{ $vehicle->base_price_per_day  }} </strong><br> <br>
                    <button class="button_table btn btn-primary" type="button" name="select">SELECT</button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>
