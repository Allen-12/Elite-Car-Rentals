

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Elite Car Rentals</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<style media="screen">
  .col-sm-4{
    border-right-style: inset ;
   margin: 30px;
    justify-content: space-between;
  }
#container{
  background-color: #c0c0c0;
}
.test_section{
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
.button_table{
    background-color:#fc983c;
}
</style>

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
<!--TTABLE SHOWING VEHICLES IS HERE NOW-->

  <table class="table table-striped table-responsive-lg">
  <thead class="thead-dark">
    <tr>
      <th>Image</th>
      <th>Details</th>
      <th>Pricing</th>
    </tr>
  </thead>

    <tbody>
      <!--Loop for displaying retrieved data-->
      <tr>
        <!--Retrieve Image URLs-->
        <td> <img class="img-fluid" src="uploads/toyota_premio.jpg" alt="">  </td>
        <!--Retrieve Vehicle Details-->
        <td><strong class="h3">Toyota Premio</strong> <br><em>Saloon Car</em> <br> Automatic Transmission <br><a href="#">View Vehicle Information</a> </td>
        <!--Retrieve Price Details-->
        <td>Kshs 3000 <br> <button class="button_table btn btn-primary" type="button" name="select">SELECT</button> </td>
      </tr>
      <tr>
        <!--Retrieve Image URLs-->
        <td> <img class="img-fluid" src="uploads/toyota_axio.jpg" alt=""> </td>
        <!--Retrieve Vehicle Details-->
      <td><strong class="h3">Toyota Axio</strong> <br><em>Saloon Car</em> <br> Automatic Transmission <br><a href="#">View Vehicle Information</a> </td>
        <!--Retrieve Price Details-->
        <td>Kshs 3000  <br> <button class="button_table btn btn-primary" type="button" name="select">SELECT</button> </td>
      </tr>
      <tr>
        <!--Retrieve Image URLs-->
        <td><img class="img-fluid" src="uploads/toyota_belta.jpg" alt="" > </td>
        <!--Retrieve Vehicle Details-->
        <td><strong class="h3">Toyota Belta</strong> <br><em>Saloon Car</em> <br> Automatic Transmission <br><a href="#">View Vehicle Information</a> </td>
        <!--Retrieve Price Details-->
        <td>Kshs 3000 <br> <button class="button_table btn btn-primary" type="button" name="select">SELECT</button> </td>
      </tr>
    </tbody>
  </table>

  </body>
</html>
