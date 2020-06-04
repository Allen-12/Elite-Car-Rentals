<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>{{ config('app.name') }}</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <style media="screen">
            .details_summary
            {
            padding-top:5px;
            padding: 2em;
            margin-left: 1em;
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
        </style>
</head>

<body>
<!--Navbar Here-->
      <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand">{{ config('app.name') }}</a>
        <div class="navbar-nav">
            <a class="nav-item nav-link" href="#">Log In</a>
        </div>
      </nav>

<!--Multifrom Navigation Section Here-->
<div id="container">
  <div class="d-flex justify-content-between">
    <a type="button" href="/" class="test_section btn btn-primary" type="button" name="button">Step 1</a>
    <a type="button" href="/reservations" class="test_section btn btn-warning" type="button" name="button">Step 2</a>
    <a type="button" href="/reservation_details" class="test_section btn btn-danger" type="button" name="button">Step 3</a>
  <a type="button" href="email_demo" class="test_section btn btn-info" type="button" name="button">Step 4</a>
  </div>
</div>

<div class="details_summary">
<div class="row">
<div class="col-sm-7">
  <div class="row">
    <div class="col-12 border-bottom">
      <h3 class="mt-3 mb-3" >LOCATION & DATE</h3>
      <p><strong class="h5">Pick Up</strong><br>
          <!--Retrieve Pick Up-->
          <small class="text-muted">Location</small><br>
          <!--Retrieve Pick Up Day and Time-->
          <em class="text-muted">Date</em>
      </p>
      <p><strong class="h5">Drop Off</strong><br>
          <!--Retrieve Drop Off-->
          <small>Location</small> <br>
          <!--Retrieve Drop Off Day and Time-->
          <em class="text-muted">Date</em>
      </p>
  </div>
  <div class="col-12">
    <h3 class="mt-3 mb-3">CAR CLASS</h3>
    <h4>Compact</h4>
    <strong>Mistubishi Evo</strong>
    <em>Automatic Transmission</em>
  </div>
</div>
</div>
<div class="col-sm-4 border-left m-2">
  <h3 class="mt-3 mb-3">COSTS & EXPENSES</h3>
  <label class="col-form-label" for="base_rate">Base Rate</label>  <br>
  <label class="col-form-label" for="full_days">Full Days</label>  <br>
  <label class="col-form-label" for="hours">Hours</label>    <br>
  <label class="col-form-label" for="fees_taxes">Fees & Taxes</label> <br>
  <label class="col-form-label" for="discount">Discount</label>  <br>

</div>


</div>


</div>
