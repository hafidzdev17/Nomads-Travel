@extends('layouts.admin')

@section('content')

      <!-- Begin Page Content -->
      <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Tambah Gallery</h1>

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
      <form action="{{ route('gallery.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
          <label for="travel">Pilih Travel</label>
          <select class="form-control" name="travel_packages_id" id="travel">
           @foreach ($travel_package as $item)
               <option value="{{ $item->id }}">
                {{ $item->title }}
              </option>
           @endforeach
          </select>
        </div>

        <div class="form-group">
          <label for="image">Image</label>
          <input type="file" class="form-control-file" name="image" id="image" placeholder="" aria-describedby="fileHelpId">
        </div>

       
        <button type="submit" class="btn btn-primary btn-block">
          <i class="fa fa-save"></i>
          Simpan
        </button>

        </form>
      </div>
       </div>
     </div>
    </div>

      </div>
      <!-- /.container-fluid -->

@endsection