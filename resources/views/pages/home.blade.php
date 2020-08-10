@extends('layouts.app')

@section('title','Halaman Home')
@section('content')

<main>
  <!-- Header -->
  <header class="header">
      <div class="text-center">
          <h1>
              Mount Bromo is famous as a major tourist
              <br>
              attraction in East Java
          </h1>
          <p class="mt-3">
              This mountain has an altitude of 2,329 meters
              <br>
              above sea level
          </p>
          <a href="#" class="btn btn-get-started my-lg-0 my-2 my-sm-0 px-4">
              <i class="fas fa-luggage-cart mr-2"></i>
              Get started
          </a>
      </div>
  </header>

<section class="section-statics-bg">
      <div class="container">
          <div class="row text-center">
              <div class="col">
                  <div class="counter">
                      <i class="fas fa-users fa-2x"></i>
                      <h2 class="timer count-title count-number" data-to="20000" data-speed="1500"></h2>
                      <p class="count-text ">Members</p>
                  </div>
              </div>
          <div class="col">
              <div class="counter">
                  <i class="fas fa-globe-asia fa-2x"></i>
                      <h2 class="timer count-title count-number" data-to="12" data-speed="1500"></h2>
                  <p class="count-text ">Countries</p>
              </div>
          </div>
          <div class="col">
              <div class="counter">
                  <i class="fas fa-hotel fa-2x"></i>
                      <h2 class="timer count-title count-number" data-to="3000" data-speed="1500"></h2>
                  <p class="count-text ">Hotels</p>
              </div>
          </div>
          <div class="col">
              <div class="counter">
                  <i class="fas fa-handshake fa-2x"></i>
                      <h2 class="timer count-title count-number" data-to="72" data-speed="1500"></h2>
                  <p class="count-text ">Partners</p>
              </div>
          </div>
      </div>
</section>


  <section class="section-popular">
      <div class="container">
          <div class="row">
              <div class="col text-center section-popular-heading">
                  <h2>
                      Our Popular To Package
                  </h2>
                  <p>
                      Somethink that you never try
                      <br>
                      before in this world
                  </p>
              </div>
          </div>
      </div>
  </section>

  <section class="section-popular-content" id="popularContent">
          <div class="container">
              <div class="section-popular-travel row justify-content-center">
                   
                @foreach ($items as $item)
                <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="card text-white text-center hovereffect">
                          <img src="{{  $item->galleries->count() ? Storage::url($item->galleries->first()->image) : ''  }}" class="card-img-full" alt="...">
                          <div class="card-img-overlay overlay">
                              <div class="card-title-country text-uppercase">{{ $item->location }}</div>
                              <div class="card-title-location">{{ $item->title }}</div>
                              <div class="travel-button mt-auto">
                                  <a href="{{ route('detail', [$item->slug]) }}" class="btn btn-travel-details my-2 my-sm-0 px-4">
                                      <i class="fas fa-eye mr-2"></i>
                                      View Explorer
                                  </a>
                              </div>
                          </div>
                      </div>
                  </div>
                  @endforeach
                                  </div>
          </div>
      </section>


  <section class="section-partners" id="partners">
      <div class="container">
          <div class="row">
              <div class="col-md-4">
                  <h2>Our Partners</h2>
                  <p>
                      Some partners who have worked
                      <br>
                      with us, to handle our traveler.
                  </p>
              </div>
              <div class="col-md-8 text-center">
                  <img src="frontend/images/our_parners.png" alt="Logo Partner" class="img-partner">
              </div>
          </div>
      </div>
  </section>

  <section class="section-testimonial-heading" id="testimonialHeading">
      <div class="container">
          <div class="row">
              <div class="col text-center">
                  <h2>They're Loving Us</h2>
                  <p>
                      What do they say who have entrusted using
                      <br>
                      our travel services.
                  </p>
              </div>
          </div>
      </div>
  </section>
  
  <section class="section-testimonial-two">
      <div class="container">
          <div class="row">
              <div class="col-md-4">
                  <div class="card-box text-center">
                      <div class="user-pic">
                          <img src="frontend/images/user-pic1%402x.png" class="img-fluid" alt="User Pic">
                      </div>
                      <h3>Mark Austine</h3>
                      <img src="frontend/images/star1.png" alt="Rate" class="mb-6">
                      <div class="content-testimonial">
                          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                      </div>
                      <hr>
                      <p class="trip-to mt-2">
                          Trip to Dubai, Middle East
                      </p>
                  </div>
              </div>
  
              <div class="col-md-4">
                  <div class="card-box text-center">
                      <div class="user-pic">
                          <img src="frontend/images/user-pic2%402x.png" class="img-fluid" alt="User Pic">
                      </div>
                      <h3>Jhon August</h3>
                      <img src="frontend/images/star2.png" alt="Rate" class="mb-6">
                      <div class="content-testimonial">
                          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                      </div>
                      <hr>
                      <p class="trip-to mt-2">
                          Trip to Bromo, Indonesia
                      </p>
                  </div>
              </div>
  
              <div class="col-md-4">
                  <div class="card-box text-center">
                      <div class="user-pic">
                          <img src="frontend/images/user-pic3%402x.png" class="img-fluid" alt="User Pic">
                      </div>
                      <h3>Jane Doo</h3>
                      <img src="frontend/images/star3.png" alt="Rate" class="mb-6">
                      <div class="content-testimonial">
                          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                      </div>
                      <hr>
                      <p class="trip-to mt-2">
                          Trip to Deratan Bali, Indonesia
                      </p>
                  </div>
              </div>
          </div>
          <div class="section-btn-get justify-content-center">
                  <div class="row">
                      <div class="col-md-12 text-center">
                          <div class="my-2 my-lg-0">
                              <a href="https://api.whatsapp.com/send?phone=085236639572" target="_blank"
                                  class="btn btn-need-help my-2 my-sm-0 px-4">
                                  <i class="fab fa-whatsapp mr-2"></i>
                                  I Need Help
                              </a>
                              <a href="{{ route('register') }}" class="btn btn-get-started my-2 my-sm-0 px-4">
                                  <i class="fas fa-user-lock mr-2"></i>
                                  Get Started
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
      </div>
  </section>
</main>

@endsection