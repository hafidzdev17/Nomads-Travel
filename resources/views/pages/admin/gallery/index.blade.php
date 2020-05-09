@extends('layouts.admin')

@section('content')

      <!-- Begin Page Content -->
      <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Paket Gallery</h1>
    <a href="{{ route('gallery.create') }}" class="brtn btn-sm btn-primary shadow-sm">
    <i class="fas fa-plus fa-sm text-white-50"></i>
  Tambah Paket Gallery
  </a>
        </div>

     <div class="row">
       <div class="card-body">

        <div class="col">
          @if (session('status'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <span class="alert-inner--icon"><i class="ni ni-like-2"></i></span>
                  <span class="alert-inner--text"><strong>Berhasil,</strong> {{ session('status') }} </span>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
          @endif

         <div class="table-responsve">
           <table class="table table-bordered" width="100%" cellspacing="0">
             <thead>
              <tr>
               <td>ID</td>
               <td>Travel</td>
               <td>Gambar</td>
               
               </tr>
             </thead>
           <tbody>
             <tr>
              @forelse ($gallery as $item)
              <td>{{ $item->id }}</td>
              <td> {{ $item->travel_package->title }} </td>
              <td> 
                <img src="{{ Storage::url($item->image) }}" alt="" style="width: 150px" class="img-thumbnail">
              </td>
             
              <td>
               <a href="{{ route('gallery.edit',$item->id) }}">
                 <i class="fa fa-pencil-alt"></i>
               </a>
               <form action="{{ route('gallery.destroy', $item->id) }}" method="POST" class="d-inline">
                 @csrf
                 @method('delete')
                 <button class="btn btn-danger">
                   <i class="fa fa-trash"></i>
                 </button>
               </form>
              </td>
              </tr>
        @empty
        <tr>
          <td colspan="7" class="text-center">
          <center> <b> Data Kosong </b> </center>
          </td>
        </tr>
          @endforelse
           </tbody>
          </table>
          </div>
       </div>
     </div>


      </div>
      <!-- /.container-fluid -->

@endsection