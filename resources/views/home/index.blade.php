@extends('layouts.master')

@section('content')
    <div class="hero-wrap" style="background-image: url('images/car1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text justify-content-start align-items-center">
                <div class="col-lg-6 col-md-6 ftco-animate d-flex align-items-end">
                    <div class="text">
                        <h1 class="mb-4">Now <span>It's easy for you</span> <span>rent a car</span></h1>
                        <p style="font-size: 18px;">Daily car rental deals on saloons, suvs, vans, compact 4wd</p>
                        <a href="https://vimeo.com/45830194" class="icon-wrap popup-vimeo d-flex align-items-center mt-4">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="ion-ios-play"></span>
                            </div>
                            <div class="heading-title ml-5">
                                <span>View deals</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col"></div>
                <div class="col-lg-4 col-md-6 mt-0 mt-md-5 d-flex">
                    <form action="/sessions/landingpage" method="POST" class="request-form ftco-animate">
                        @csrf

                        <h2>Make your trip</h2>
                        <div class="d-flex">
                            <div class="form-group mr-3">
                                <label for="countiesPickUp" class="label">Select a County for pickup</label>
                                <select class="form-control" id="countiesPickUp" name="countiesPickUp">
                                    <option>Select a county</option>
                                    @foreach($counties as $id => $county)
                                        <option class="dropdown-item" value="{{ $id }}">{{ $county }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="countyLocationsPickUp" class="label">Pick-Up Location</label>
                                <select class="form-control" id="countyLocationsPickUp" name="countyLocationsPickup">
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="form-group mr-2">
                                <label for="pickup_date" class="label">Pick-up date</label>
                                <input type="text" name="pickup_date" class="form-control" id="pickUpDate" autocomplete="off" placeholder="Date">
                            </div>
                            <div class="form-group">
                                <label for="pickup_time" class="label">Pick-up time</label>
                                <input type="text" name="pickup_time" class="form-control" id="pickUpTime" placeholder="Time">
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="form-group mr-4">
                                <label for="countiesDropOff" class="label">Select a County for drop-off</label>
                                <select class="form-control" id="countiesDropOff" name="countiesDropOff">
                                    <option>Select a County</option>
                                    @foreach($counties as $id => $county)
                                        <option class="dropdown-item" value="{{ $id }}">{{ $county }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="countyLocationsDropOff" class="label">Drop-off Location</label>
                                <select class="form-control" id="countyLocationsDropOff" name="countyLocationsDropOff">
                                    <option></option>
                                </select>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="form-group mr-2">
                                <label for="drop_off_date" class="label">Drop-off date</label>
                                <input type="text" name="drop_off_date" class="form-control" id="dropOffDate" autocomplete="off" placeholder="Date">
                            </div>

                            <div class="form-group">
                                <label for="drop_off_time" class="label">Drop-off time</label>
                                <input type="text" name="drop_off_time" class="form-control" id="dropOffTime" placeholder="Time">
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary py-3 px-4">Search for Available Vehicles</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section ftco-no-pb ftco-no-pt">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="search-wrap-1 ftco-animate mb-5">
                        <h1 class="mb-4">EXPERIENCE ELITE WITH OUR  RENTAL OFFERS JUST FOR YOU!</h1>
                        <div class="row">
                            <div class="col">
                                <div class="mx-auto w-50 p-3  text-center">
                                    <input type="submit" value="Search Vehicle" class="btn btn-primary py-3 px-4">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/three.jpg);">
                </div>
                <div class="col-md-6 wrap-about py-md-5 ftco-animate">
                    <div class="heading-section mb-5 pl-md-5">
                        <span class="subheading">About us</span>
                        <h2 class="mb-4">The best car rental company in Kenya</h2>

                        <p>Welcome to Elite Car Rental we pride ourselves in providing you with the best car rental services in Kenya. If you'd like to receive a free no-obligation quotation for your car rental in Kenya, please fill the form below. Our very affordable car rental services include: saloon car rental, 4X4 car Rental, Offroad Car Rental, Bus and Van Rental, Station Wagon Rental, Double cabin Rental, Truck rental and more</p>
                        <p>You can pick and drop off our cars in Nairobi at Jomo Kenyatta International AIrport, Wilson Airport or at any Hotel in Nairobi. In Kisumu you can pick and drop our cars in Kisumu Airport, in Kisumu Railway station and in any Hotel in Kisumu. In Mombasa, you can pick our cars at the Moi International Airport, in Malindi, Lamu, Watamu and any hotel in both north and south Coast areas.</p>
                        <p><a href="#" class="btn btn-primary">Search Vehicle</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Terms</span>
                    <h2>Terms and Conditions</h2>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="blog-single.html" class="block-20" style="background-image: url('images/perfect.jpg');">
                        </a>
                        <div class="text pt-4">
                            <div class="meta mb-3">

                            </div>
                            <h3 class="heading mt-2"><a href="#">Cancellations</a></h3>
                            <p>Car Rental reservations made through the elite car rental kenya website are at special rates which reflect our Cancellation and No-show policies.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="blog-single.html" class="block-20" style="background-image: url('images/one.jpg');">
                        </a>
                        <div class="text pt-4">
                            <div class="meta mb-3">

                            </div>
                            <h3 class="heading mt-2"><a href="#">Luxury Vehicles Delivery Charges</a></h3>
                            <p>Delivery charges will apply for all luxury rentals. These will be confirmed to you upon receipt of your reservation request and paid for at start of hire.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry">
                        <a href="blog-single.html" class="block-20" style="background-image: url('images/seven.jpg');">
                        </a>
                        <div class="text pt-4">
                            <div class="meta mb-3">


                            </div>
                            <h3 class="heading mt-2"><a href="#">Overseas Hires</a></h3>
                            <p>All cars (other than luxury vehicles), people carriers with fewer than 8 seats (including the driver) may be taken outside Kenya to the following countries only:- Tanzania, Uganda, Juba at an extra cost.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section services-section img" style="background-image: url(images/bg_2.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                    <span class="subheading">Work flow</span>
                    <h2 class="mb-3">How it works</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services services-2">
                        <div class="media-body py-md-4 text-center">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>
                            <h3>Pick Destination</h3>
                            <p>A small river named Duden flows by their place and supplies it with you</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services services-2">
                        <div class="media-body py-md-4 text-center">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-select"></span></div>
                            <h3>Select Term</h3>
                            <p>A small river named Duden flows by their place and supplies it with you</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services services-2">
                        <div class="media-body py-md-4 text-center">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-rent"></span></div>
                            <h3>Choose A Car</h3>
                            <p>A small river named Duden flows by their place and supplies it with you</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services services-2">
                        <div class="media-body py-md-4 text-center">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-review"></span></div>
                            <h3>Enjoy The Ride</h3>
                            <p>A small river named Duden flows by their place and supplies it with you</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection



