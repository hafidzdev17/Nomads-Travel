@extends('layouts.app')

@section('title','Halaman Home')
@section('content')

<!-- Header -->
<header class="text-center">
  <h1> Explore The Beatiful World
  <br />
  As Easy On Click
  </h1>
  <p class="mt-3">
    You Will See Beatiful
    <br />
    moment you never see before
  </p>
  <a href="#" class="btn btn-get-started px-4 mt-4">
    Get Started
  </a>
</header>

<!-- Statistik -->
<main>
  <div class="container">
    <section class="section-stats row justify-content-center" id="stats">
      <div class="col-3 col-md-2 stats-detail">
        <h2>20K</h2>
        <p>Members</p>
      </div>
      <div class="col-3 col-md-2 stats-detail">
        <h2>12</h2>
        <p>Countries</p>
      </div>
      <div class="col-3 col-md-2 stats-detail">
        <h2>3K</h2>
        <p>Hotel</p>
      </div>
      <div class="col-3 col-md-2 stats-detail">
        <h2>72</h2>
        <p>Partners</p>
      </div>
    </section>
  </div>

  <!-- Popular -->
  <section class="section-popular" id="popular">
      <div class="container">
        <div class="row">
          <div class="col text-center section-popular-heading">
            <h2>Wisata Popular</h2>
            <p>
              Berikut adalah destinasi
              <br />
             wisata terpopuler di dunia
            </p>
          </div>
        </div>
      </div>
  </section>

  <!-- Popular Content -->
  <section class="section-popular-content" id="popularContent">
    <div class="container">
      <div class="section-popular-travel row justify-content-center">

        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/bali.jpg');">
            <div class="travel-country text-uppercase">Indonesia</div>
            <div class="travel-location text-uppercase">Kuta, Bali</div>
            <div class="travel-button mt-auto">
              <a href="#" class="btn btn-travel-details px-4">
                View Details
              </a>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/japan-kyoto-toji-pagoda.jpg');">
              <div class="travel-country text-uppercase">Japan</div>
              <div class="travel-location text-uppercase">Drift, Tokyo</div>
              <div class="travel-button mt-auto">
                <a href="#" class="btn btn-travel-details px-4">
                  View Details
                </a>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/best destinations.jpg');">
                <div class="travel-country text-uppercase">Autstralia</div>
                <div class="travel-location text-uppercase">Sydney</div>
                <div class="travel-button mt-auto">
                  <a href="#" class="btn btn-travel-details px-4">
                    View Details
                  </a>
                </div>
              </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/170606121226-japan---travel-destination---shutterstock-230107657.jpg');">
                  <div class="travel-country text-uppercase">Korsel</div>
                  <div class="travel-location text-uppercase">Jeonbuk</div>
                  <div class="travel-button mt-auto">
                    <a href="#" class="btn btn-travel-details px-4">
                      View Details
                    </a>
                  </div>
                </div>
              </div>
      </div>
    </div>
  </section>

  <!-- Section Networks -->
  <section class="section-networks">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h2>
            Our Network
          </h2>
          <p>
            Lorem ipsum dolor sit amet.
          </p>
        </div>
        <div class="col-md-8 text-center">
          <img src="frontend/images/unuja.jpg" alt="img-partner">
          <img src="frontend/images/unuja.jpg" alt="img-partner">
          <img src="frontend/images/unuja.jpg" alt="img-partner">

        </div>
      </div>
    </div>
  </section>

  <section class="section-testimonial-heading">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <h2> They Are Loving Us </h2>
          <p>
            Moments were giving them
            <br />
            the best experience
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="section section-testimonial-content" id="testimonialContent">
    <div class="container">
      <div class="section-popular-travel row justify-content-center">
        <div class="col-sm-6 col-md-6 col-lg-4">
          <div class="card card-testimonial text-center">
            <div class="testimonial-content">
              <img src="frontend/images/hafid.png" alt="" class="mb-4 rounded-circle">
              <h3 class="mb-4">M Hafidz</h3>
              <p class="testimonial">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde, vero.
              </p>
            </div>
            <hr>
            <p class="trip-to mt-2">
              Trip To Ubud
            </p>
          </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-4">
          <div class="card card-testimonial text-center">
            <div class="testimonial-content">
              <img src="frontend/images/didik.png" alt="" class="mb-4 rounded-circle">
              <h3 class="mb-4">Didik NH</h3>
              <p class="testimonial">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde, vero.
              </p>
            </div>
            <hr>
            <p class="trip-to mt-2">
              Trip To Ubud
            </p>
          </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-4">
          <div class="card card-testimonial text-center">
            <div class="testimonial-content">
              <img src="frontend/images/sam.png" alt="" class="mb-4 rounded-circle">
              <h3 class="mb-4">Sam</h3>
              <p class="testimonial">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde, vero.
              </p>
            </div>
            <hr>
            <p class="trip-to mt-2">
              Trip To Ubud
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 text-center">
          <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">
            I Need Help
          </a>
          <a href="#" class="btn btn-get-started px-4 mt-4 mx-1">
            Get Started
          </a>
        </div>
      </div>
    </div>
  </section>
</main>

@endsection