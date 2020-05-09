@extends('layouts.app')

@section('title','Detail Travel')
@section('content')

<main>
  <section class="section-details-header">  </section>
   <section class="section-details-content">
<div class="container">
  <div class="row">
    <div class="col p-0">
      <nav>
          <ol class="breadcrumb">
              <li class="breadcrumb-item">
                  Paket Travel
              </li>
              <li class="breadcrumb-item active">
                  Details
              </li>
          </ol>
      </nav>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-8 pl-lg-0">
      <div class="card card-details">
        <h2> Nusa Peninda </h2>
        <p>
          Republik Of Indonesia Raya
        </p>
        <div class="gallery">

          <div class="xzoom-container">
            <img src="frontend/images/hd-wallpapers-beijing-blured-forbidden-city-full-hd-wallpaper.jpg" class="xzoom" id="xzoom-default" xoriginal="frontend/images/hd-wallpapers-beijing-blured-forbidden-city-full-hd-wallpaper.jpg">
          </div>

          <div class="xzoom-thumbs">
            <a href="frontend/images/japan-kyoto-toji-pagoda.jpg">
            <img src="frontend/images/japan-kyoto-toji-pagoda.jpg" class="xzoom-gallery" width="128" xpreview="frontend/images/japan-kyoto-toji-pagoda.jpg">
            </a>

            <a href="frontend/images/170606121226-japan---travel-destination---shutterstock-230107657.jpg">
              <img src="frontend/images/170606121226-japan---travel-destination---shutterstock-230107657.jpg" class="xzoom-gallery" width="128" xpreview="frontend/images/170606121226-japan---travel-destination---shutterstock-230107657.jpg">
              </a>

              <a href="frontend/images/150787.jpg">
                <img src="frontend/images/150787.jpg" class="xzoom-gallery" width="128" xpreview="frontend/images/150787.jpg">
                </a>
          </div>
        </div>
        <h2> Tentang Wisata </h2>
        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora repellat id ea aut distinctio architecto cumque quidem temporibus earum hic? </p>

        <div class="featerus row">
          <div class="col-md-4">
            <div class="description">
              <img width="40px" src="frontend/images/photo_2018-03-22_05-50-40.jpg" class="featerus-image">
              <div class="description">
                <h3>Featerud Event</h3>
              <p> Tari Kecak </p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="description">
              <img width="40px" src="frontend/images/unuja.jpg" class="featerus-image">
              <div class="description">
                <h3>Languange</h3>
                <p> English </p>
              </div>
            </div>
          </div>


          <div class="col-md-4">
            <div class="description">
              <img width="40px" src="frontend/images/photo_2019-07-24_00-29-27.jpg" class="featerus-image">
              <div class="description">
                <h3>Foods</h3>
                <p> Local Foods </p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>

<div class="col-lg-4">
  <div class="card card-details card-right">
    <h2> Member Are Going </h2>
    <div class="members my-2">
      <img src="frontend/images/hafid.png" class="member-image rounded-circle mr-1"
      />
      <img src="frontend/images/didik.png" class="member-image rounded-circle mr-1"
      />
      <img src="frontend/images/sam.png" class="member-image rounded-circle mr-1"
      />
      <img src="frontend/images/unuja.jpg" class="member-image rounded-circle mr-1"
      />
      <img src="frontend/images/photo_2018-03-22_05-50-40.jpg" class="member-image rounded-circle mr-1"
      />
    </div>
    <hr>
    <h2> Trip Information </h2>
    <table class="table-information">
      <tr>
        <th width="50%">Date Of Departure</th>
        <td width="50%" class="text-right">
          22 Aug 2019
        </td>
        <tr>
          <th width="50%">Duration</th>
          <td width="50%" class="text-right">
            40 MIN
          </td>
          <tr>
            <th width="50%">Type</th>
            <td width="50%" class="text-right">
             Open Trip
            </td>
            <tr>
              <th width="50%">Price</th>
              <td width="50%" class="text-right">
                $100 / Person
              </td>
      </tr>
    </table>
  </div>

  <div class="join-container">
    <a href="#" class="btn btn-block btn-join-now mt-3 py-2">
      Join Now
    </a>
  </div>

</div>

  </div>
</div>
  </section>
</main>
@endsection

@push('prepend-style')
<link rel="stylesheet" href="{{ url('frontend/libraries/xzoom/xzoom.css') }}">
@endpush


@push('addon-script')
<script src="{{ url('frontend/libraries/xzoom/xzoom.min.js') }}"></script>
<script>
    $(document).ready(function() {
      $('.xzoom, .xzoom-gallery').xzoom({
        zoomWidth: 500,
        title: false,
        tint: '#333',
        Xoffset: 15
      });
    });
</script>
@endpush