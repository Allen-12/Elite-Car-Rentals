<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Elite-Car-Rentals</title>

    <style>

  .logo-postioner
  {
  margin: auto;
  width: 50%;
  /*border: 3px solid green;*/
  padding: 10px;
  }

    <link media="all" href="{{ asset('css/style1.css') }}" rel="stylesheet">

    <style>

    </style>
  </head>
  <body>

  <div class="logo-positioner" style="margin: auto; width: 13%;">
    <img src = "images/elitelogo2.png" style="height: 100px; width: 100px;" ></a>
  </div>


    <header class="clearfix">
      <div id="logo">
        <img src="{{ asset('images/elitelogo2.png') }}">
      </div>
      <h1>ELITE CAR RENTALS</h1>
      <div id="company" class="clearfix">
        <div>Elite Car Rentals</div>
        <div>P.O. BOX 32408-00600<br />Nairobi, Kenya</div>
        <div>+254 020 357 9838</div>
        <div>+254 0722761623</div>
        <div><a href="mailto:company@example.com">elitecarrentalke@gmail.com</a></div>
      </div>
      <div id="project">
        <div><span>PROJECT</span> Invoice Report</div>
        <div><span>CLIENT</span> John Doe</div>
        <div><span>ADDRESS</span> Nairobi, Kenya</div>
        <div><span>EMAIL</span> <a href="mailto:john@example.com">john@example.com</a></div>
        <div><span>DATE</span> August 17, 2015</div>
        <div><span>DUE DATE</span> September 17, 2015</div>
      </div>
    </header>
    <main>
      <table>
        <thead>
          <tr>
            <th class="service">SERVICE</th>
            <th class="desc">DESCRIPTION</th>
            <th>PRICE</th>
            <th>DURATION(DAYS)</th>
            <th>TOTAL</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="service">Car Renting</td>
            <td class="desc">Car model X was rented by John Doe on 12th May, 2020</td>
            <td class="unit">4450</td>
            <td class="drn">2</td>
            <td class="total">8900</td>
          </tr>
          <tr>
            <td class="service">Car Servicing</td>
            <td class="desc">Car Model X was serviced at our station on 12th May, 2020</td>
            <td class="unit">1500</td>
            <td class="drn">1</td>
            <td class="total">1500</td>
          </tr>
          <tr>
            <td class="service">Car Delivery</td>
            <td class="desc">Car was delivered to Serena Hotel, Nairobi at 11:00am on 12th May, 2020</td>
            <td class="unit">1600</td>
            <td class="drn">1</td>
            <td class="total">$800.00</td>
          </tr>
          <tr>
            <td class="service">Car Wash</td>
            <td class="desc">The car model X was washed at our station on 12th May,2020</td>
            <td class="unit">800</td>
            <td class="drn">1</td>
            <td class="total">800</td>
          </tr>
          <tr>
            <td colspan="4">SUBTOTAL</td>
            <td class="total">12800</td>
          </tr>
          <tr>
            <td colspan="4">TAX 25%</td>
            <td class="total">1560</td>
          </tr>
          <tr>
            <td colspan="4" class="grand total">GRAND TOTAL</td>
            <td class="grand total">14360</td>
          </tr>
        </tbody>
      </table>
      <div id="notices">
        <div>NOTICE:</div>
        <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
      </div>
    </main>
    <footer>
      Invoice was created on Elite Car Rentals computers and is valid without the signature and seal.
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
