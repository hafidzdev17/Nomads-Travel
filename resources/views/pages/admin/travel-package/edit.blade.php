@extends('layouts.admin')

@section('content')

      <!-- Begin Page Content -->
      <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Edit Paket Travel</h1>

        </div>

        @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif

     <div class="row">
      <div class="card-shadow card-body">
      <form action="{{ route('travel-package.update',[$item->id]) }}" method="post">
        @csrf
        @method('PUT')

        <div class="form-group">
          <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control form-control-alternative " placeholder="Title " value="{{ $item->title }}">
      
        </div>

        <div class="form-group">
          <label for="location">Location</label>
        <input type="text" name="location" id="location" class="form-control form-control-alternative " value="{{ $item->location }}">
        </div>

        <div class="form-group">
          <label for="about">About</label>
        <textarea name="about" id="about" cols="10" class="d-block w-100 form-control form-control-alternative" placeholder="About" >
        {{ $item->about }}
        </textarea>
        
        </div>

        <div class="form-group">
          <label for="featured_event">Featured Event</label>
        <input type="text" name="featured_event" id="featured_event" class="form-control form-control-alternative" placeholder="Featured Event" value="{{ $item->featured_event }}">
       
        </div>

        <div class="form-group">
          <label for="languange">Languange</label>
        <input type="text" name="languange" id="languange" class="form-control form-control-alternative "  value="{{ $item->languange }}">
        </div>

        <div class="form-group">
          <label for="foods">Foods</label>
        <input type="text" name="foods" id="foods" class="form-control form-control-alternative" value="{{ $item->foods }}" placeholder="Foods">
       
        </div>

        <div class="form-group">
          <label for="date">Departure Date</label>
        <input type="date" name="departure_date" id="date" class="form-control form-control-alternative " value="{{ $item->departure_date }}">
        
        </div>

        <div class="form-group">
          <label for="duration">Duration</label>
        <input type="text" name="duration" id="duration" class="form-control form-control-alternative " value="{{ $item->duration }}" placeholder="Duration">
 
        </div>

        <div class="form-group">
          <label for="type">Type</label>
        <input type="text" name="type" id="type" class="form-control form-control-alternative " value="{{ $item->type }}" placeholder="Type">
       
        </div>

        <div class="form-group">
          <label for="price">Price</label>
        <input type="number" name="price" id="price" class="form-control form-control-alternative " value="{{ $item->price }}" placeholder="Price">
      
        </div>
        <button type="submit" class="btn btn-primary btn-block">
          <i class="fa fa-save"></i>
        Ubah
        </button>

        </form>
      </div>
       </div>
     </div>
    </div>

      </div>
      <!-- /.container-fluid -->

@endsection