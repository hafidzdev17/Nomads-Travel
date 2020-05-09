@extends('layouts.checkout')

@section('title','Checkout')
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
              <li class="breadcrumb-item ">
                  Details
              </li>
              <li class="breadcrumb-item active">
                  Checkout
              </li>
          </ol>
      </nav>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-8 pl-lg-0">
      <div class="card card-details">
        <h2> Who is going?</h2>
        <p>
         Lorem ipsum dolor sit amet.
        </p>
        <div class="attendee">
          <table class="table table-responsive-sm text-center">
            <thead>
              <tr>
                <td>Picture</td>
                <td>Name</td>
                <td>Nationallity</td>
                <td>Visa</td>
                <td>Passport</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <img src="{{ url('frontend/images/hafid.png') }}" alt="" width="40px" height="40px" class="justify-content-center rounded-circle">
                </td>
                <td class="align-middle">
                  M Hafid
                </td>
                <td class="align-middle">
                 Indonesia
                </td>
                <td class="align-middle">
                  N/A
                </td>
                <td class="align-middle">
                  Active
                </td>
                <td class="align-middle">
                  <img src="{{ url('frontend/images/square_error_warning_button_clip_art_9113.jpg') }}" width="20px" height="20px">
                </td>
              </tr>
              <tr>
                <td>
                  <img src="{{ url('frontend/images/Screenshot_214.png') }}" alt="" width="40px" height="40px" class="justify-content-center rounded-circle">
                </td>
                <td class="align-middle">
                 Urashiki Outsusuki
                </td>
                <td class="align-middle">
                 Konoha
                </td>
                <td class="align-middle">
                  N/A
                </td>
                <td class="align-middle">
                  Active
                </td>
                <td class="align-middle">
                  <img src="{{ url('frontend/images/square_error_warning_button_clip_art_9113.jpg') }}" width="20px" height="20px">
                </td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="member mt-3">
          <h2> Add Member </h2>
          <form class="form-inline">
        <label for="inputUsername" class="sr-only">Name</label>
        <input type="text" name="inputUsername" id="inputUsername" class="form-control mb-2 mr-sm-2" placeholder="Username">
        <label for="inputVisa" class="sr-only">Visa</label>
        <select name="inputVisa" id="inputVisa" class="custom-select mb-2 mr-sm-2">
          <option value="VISA">Visa</option>
          <option value="30 Days">30 Days</option>
          <option value="N/A">N/A</option>
          <option value="VISA">Visa</option>
        </select>

        <label for="doePassport" class="sr-only">DOE Passport</label>
        <div class="input-group mb-2 mr-sm-2">
          <input type="text" class="form-control datepicker" id="doePassport" placeholder="DOE Passport"><i class="fa fa-calendar-times"></i>
        </div>

        <button type="submit" class="btn btn-add-now px-4">
          Add Now
        </button>
          </form>

          <h3 class="mt-2 mb-0">Note</h3>
          <p class="disclaimer mb-0">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, error!
          </p>
        </div>



      </div>
    </div>

<div class="col-lg-4">
  <div class="card card-details card-right">

    <h2> Checkout Information </h2>
    <table class="trip-information">
      <tr>
        <th width="50%">Members</th>
        <td width="50%" class="text-right">
          2 Person
        </td>
        <tr>
          <th width="50%">Additional Visa</th>
          <td width="50%" class="text-right">
            $ 190.00
          </td>
          <tr>
            <th width="50%">Trip Price</th>
            <td width="50%" class="text-right">
              $ 80.00 / Person
            </td>
            <tr>
              <th width="50%">Sub Total</th>
              <td width="50%" class="text-right">
                $ 280.00
              </td>
            </tr>
            <tr>
              <th width="50%">Total (+Unique)</th>
              <td width="50%" class="text-right text-total">
                <span class="text-blue">$ 279,</span>
                <span class="text-orange">33</span>
              </td>
            </tr>
          </table>
          <hr>
          <h2>Payment Instruction</h2>
          <p class="payment-instruction">
            please complete your payment before to continue the wonderful trip
          </p>
          <div class="bank">
            <div class="bank-item pb-3">
              <img src="{{ url('frontend/images/photo_2018-03-22_05-50-40.jpg') }}s"  class="bank-image">
              <div class="description">
              <h3>PT Nomads ID</h3>
              <p>
                0881 7838 9339 8239
                <br>
                Bank Central Asia
                </p>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="bank-item pb-3">
              <img src="{{ url('frontend/images/photo_2018-03-22_05-50-40.jpg') }}"  class="bank-image">
              <div class="description">
              <h3>PT Nomads ID</h3>
              <p>
                0881 7838 9339 8239
                <br>
                Bank Central Asia
                </p>
              </div>
              <div class="clearfix"></div>
            </div>
  </div>

<hr>
  <div class="join-container">
    <a href="#" class="btn btn-block btn-join-now mt-3 py-2">
      I Have Made Payment
    </a>
  </div>
  <div class="text-center mt-3">
    <a href="#" class="text-muted"></a>
    Cancel Booking
  </div>
</div>

  </div>
</div>
  </section>
</main>

@endsection

@push('prepend-style')
<link rel="stylesheet" href="{{ url('frontend/libraries/gijgo/css/gijgo.min.css') }}">
@endpush


@push('addon-script')
<script src="{{ url('frontend/libraries/gijgo/js/gijgo.min.js') }}"></script>
<script>
    $(document).ready(function() {
      $('.datepicker').datepicker({
        uilibrary: 'bootstrap4',
        icons: {
          rightIcon: '<i class="fas fa-github"></i>'
        }
      });
    });
</script>
@endpush