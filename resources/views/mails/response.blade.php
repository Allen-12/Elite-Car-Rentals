<!DOCTYPE html>
<html>
<head>
	<title>Response</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
	<nav class="navbar navbar-expand-md navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" style="background-image: url('http://127.0.0.1:8000/images/car1.jpg">
            <div class="container">
                <a class="navbar-brand" href="http://127.0.0.1:8000">    <img src="http://127.0.0.1:8000/images/elitelogo2.png" style="height: 100px; width: 130px;"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 
                </div>
            </div>
        </nav>

        <div class="container" style="padding-top: 10%!important;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="header pt-3 peach-gradient" style="background-color:rgba(243, 133, 7, 0.514)">
                	<h2 class="h1-responsive  text-center my-4" style="font-size: 20px!important;">Confirmation message </h2></div>

                <div class="card-body">
                  	<h3 class="h1-responsive  text-center my-4" style="font-size: 15px!important;">Kindly check your email for a copy of the invoice.</h3>
                  	<div style="text-align: center!important;">
	                  	<button onclick="window.location='{{ url('/') }}'"  type="button" style="background-color:orange; border-color:orange;text-align:center!important; " class=" btn btn-raised btn-rounded z-depth-1 btn-warning">Back</button>
                	</div>
              </div>

            </div>
        </div>
    </div>
</div>
	
</body>
</html>