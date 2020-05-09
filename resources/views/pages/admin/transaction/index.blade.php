@extends('layouts.admin')

@section('content')

      <!-- Begin Page Content -->
      <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Paket Transaction</h1>
   
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
               <td>User</td>
               <td>Visa</td>
               <td>Total</td>
               <td>Status</td>
               <td>Action</td>
               </tr>
             </thead>
           <tbody>
             <tr>
              @forelse ($transaction as $item)
              <td>{{ $item->id }}</td>
              <td> {{ $item->travel_package->title }} </td>
              <td> {{ $item->user->name }} </td>
              <td> ${{ $item->additional_visa }} </td>
              <td> ${{ $item->transaction_total }} </td>
              <td> {{ $item->transaction_status }} </td>
              <td>
               <a href="{{ route('transaction.show',$item->id) }}">
                 <i class="fa fa-eye"></i>
               </a>
               <a href="{{ route('transaction.edit',$item->id) }}">
                 <i class="fa fa-pencil-alt"></i>
               </a>
               <form action="{{ route('transaction.destroy', $item->id) }}" method="POST" class="d-inline">
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