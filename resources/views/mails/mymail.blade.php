<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Elite-Car-Rentals</title>

  </head>
  <body style="  position: relative;

  height: 29.7cm;

  color: #001028;
  background: #FFFFFF;
  font-family: Arial, sans-serif;
  font-size: 12px;
  font-family: Arial !important;">


    <header class="clearfix">
      <div align="center" style="text-align: center;
  margin-bottom: 10px !important;">
        <!--<img style=" width: 90px !important;" src="{{ asset('images/elitelogo2.png') }}">-->
       <img style=" width: 90px !important;" src="{{ public_path('images/elitelogo2.png') }}">
      </div>
      <h1 style="border-top:1px solid rgb(11, 11, 12);border-bottom: 1px solid  rgb(11, 11, 12);color: rgb(11, 12, 12);font-size: 2.4em;line-height: 1.4em;font-weight: normal;text-align: center;margin: 0 0 20px 0 !important;">ELITE CAR RENTALS</h1>
      <div class="clearfix" style=" float: right;
  text-align: !important;">
        <div style="right;white-space:nowrap !important;">Elite Car Rentals</div>
        <div style="right;white-space:nowrap !important;">P.O. BOX 32408-00600<br />Nairobi, Kenya</div>
        <div style="right;white-space:nowrap !important;">+254 020 357 9838</div>
        <div style="right;white-space:nowrap !important;">+254 0722761623</div>
        <div style="right;white-space:nowrap !important;"><a style="color:#FFA500;  text-decoration: underline !important;" href="mailto:company@example.com">elitecarrentals.2020@gmail.com</a></div>
      </div>

      <div style="float: left !important;">
        <div style="white-space: nowrap !important;"><span style="color:#5D6975;text-align: right;width: 52px;margin-right: 10px;display:inline-block;font-size: 0.8em !important;">PROJECT</span> Invoice Report</div>
        <div style="white-space: nowrap !important;"><span style="color:#5D6975;text-align: right;width: 52px;margin-right: 10px;display:inline-block;font-size: 0.8em !important;">CLIENT</span>{{Auth::user()->first_name}} {{ Auth::user()->last_name }}</div>
        <div style="white-space: nowrap !important;"><span style="color:#5D6975;text-align: right;width: 52px;margin-right: 10px;display:inline-block;font-size: 0.8em !important;">ADDRESS</span> Nairobi, Kenya</div>
        <div style="white-space: nowrap !important;"><span style="color:#5D6975;text-align: right;width: 52px;margin-right: 10px;display:inline-block;font-size: 0.8em !important;">EMAIL</span> <a style="color:#FFA500;  text-decoration: underline !important;" href="mailto:john@example.com">{{Auth::user()->email}}</a></div>
        <div style="white-space: nowrap !important;"><span style="color:#5D6975;text-align: right;width: 52px;margin-right: 10px;display:inline-block;font-size: 0.8em !important;" id="rent_date">PICK-UP DATE</span> {{ session('pickDate') }}</div>
        <div style="white-space: nowrap !important;"><span style="color:#5D6975;text-align: right;width: 52px;margin-right: 10px;display:inline-block;font-size: 0.8em !important;"id="return_date">RETURN DATE</span> {{ session('dropDate') }}</div>
      </div>
    </header>

    <main>
      <table style="width:100%;border-collapse:collapse;border-spacing:0;
  margin-bottom:20px !important;">
        <thead>
          <tr>
            <th style=" padding:5px 20px;color:rgb(102,113,124);border-bottom: 1px solid #C1CED9;white-space:nowrap;
  font-weight:normal; text-align: left !important;">SERVICE</th>
            <th style=" padding:5px 20px;color:rgb(102,113,124);border-bottom: 1px solid #C1CED9;white-space:nowrap;
  font-weight:normal; text-align: left !important;">DESCRIPTION</th>
            <th style=" padding:5px 20px;color:rgb(102,113,124);border-bottom: 1px solid #C1CED9;white-space:nowrap;
  font-weight:normal; text-align: center !important;">PRICE</th>
            <th style=" padding:5px 20px;color:rgb(102,113,124);border-bottom: 1px solid #C1CED9;white-space:nowrap;
  font-weight:normal; text-align: center !important;">DURATION(DAYS)</th>
            <th style=" padding:5px 20px;color:rgb(102,113,124);border-bottom: 1px solid #C1CED9;white-space:nowrap;
  font-weight:normal; text-align: center !important;">TOTAL</th>
          </tr>
        </thead>


        <tbody>
          <tr style="background: #F5F5F5 !important;">
            <td style="padding: 20px;text-align: left;vertical-align: top !important;">Car Renting</td>
            <td style="padding:20px;text-align:left;vertical-align:top !important;">Car {{ session('desc')}} was rented by {{Auth::user()->first_name}} {{ Auth::user()->last_name }} on {{ session('pickDate') }}</td>
            <td style="font-size:1.2em;padding: 20px;
  text-align: center !important;">{{session('basePrice')}}</td>
            <td style="font-size:1.2em;padding: 20px;
  text-align: center !important;">{{ session('days') }}</td>
            <td style="font-size:1.2em;padding: 20px;
  text-align: center !important;">{{session('totalPay')}}</td>
          </tr>


          <tr>
            <td style="padding: 20px;text-align: left;vertical-align: top !important;">Car Servicing</td>
            <td style="padding:20px;text-align: left;vertical-align:top !important;">Car {{ session('desc')}} was serviced at our station on 15-07-2020</td>
            <td style="font-size:1.2em;padding: 20px;
  text-align: center !important;">{{session('service')}}</td>
            <td style="font-size:1.2em;padding: 20px;
  text-align: center !important;">1</td>
            <td style="font-size:1.2em;padding: 20px;
  text-align: center !important;">{{session('service')}}</td>
          </tr>


          <tr style="background: #F5F5F5 !important;">
            <td style="padding: 20px;text-align: left;vertical-align: top !important;">Car Delivery</td>
            <td style="padding:20px;text-align: left;vertical-align:top !important;">Car was delivered to {{session('pickUpLocation')}} at 11:00am on {{ session('pickDate') }}</td>
            <td  style="font-size:1.2em;padding: 20px;
  text-align: center !important;">0</td>
            <td style="font-size:1.2em;padding: 20px;
  text-align: center !important;">0</td>
            <td style="font-size:1.2em;padding: 20px;
  text-align: center !important;">0</td>
          </tr>

          <tr>
            <td colspan="4" style="padding:20px;text-align:right; border-top: 1px solid #5D6975 !important;">GRAND TOTAL</td>
            <td style="padding:20px;text-align:right; border-top: 1px solid #5D6975 !important;">{{session('gtotal')}}</td>
          </tr>

        </tbody>
      </table>
      <div style="color:#5D6975;font-size: 1.2em !important;">
        <div>NOTICE:</div>
        <div id="appended"></div>
        <div style="color:#5D6975;font-size: 1.2em !important;">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
      </div>
    </main>
    <footer style="color:#5D6975;width:100%;height:30px;position:absolute;
  bottom:0;border-top:1px solid #C1CED9;padding:8px 0;text-align: center;">
      Invoice was created on Elite Car Rentals computers and is valid without the signature and seal.
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>

</html>
