@extends('layouts.admin')

@section('content')

      <!-- Begin Page Content -->
      <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Edit Transaction</h1>

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
      <form action="{{ route('transaction.update',[$item->id]) }}" method="post">
        @csrf
        @method('PUT')

        <div class="form-group">
          <label for="status">Transaction Status</label>
          <select name="transaction_status" id="status" class="form-control" required>
            <option value="{{ $item->transaction_status }}">
              Jangan ubah {{ $item->transaction_status }}
            </option>
            <option value="IN_CART">IN CART</option>
            <option value="PENDING">PENDING</option>
            <option value="SUCCESS">SUCCESS</option>
            <option value="CANCEL">CANCEL</option>
            <option value="FAILED">FAILED</option>
          </select>
        </div>

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