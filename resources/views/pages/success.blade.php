@extends('layouts.checkout')

@section('title','Checkout')
@section('content')

  <main>
    <div class="section-success d-flex align-items-center">
      <div class="col text-center">
        <img width="100px" src="{{ url('frontend/images/success.png') }}" alt="" srcset="">
        <h1>Yay! Success</h1>
        <p> We've sent you mail for trip information
          <br>
          please read it as well
        </p>
        <a href="{{ route('home') }}" class="btn btn-home-page mt-3 px-5">
          Home Page
        </a>
      </div>
    </div>
  </main>

  @endsection