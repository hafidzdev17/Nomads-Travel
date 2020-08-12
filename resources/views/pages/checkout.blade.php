@extends('layouts.checkout')

@section('title','Checkout')
<link rel="stylesheet" href="{{ url('frontend/styles/custom.css') }}">
@section('content')


<main>
    <section class="section-details-header"> </section>
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
                        @if ($errors->any())
                        <div class="alert alert-danger" role="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li> {{ $error }} </li>
                                @endforeach
                            </ul>
                        </div>

                        @endif

                        <h2> Who is going?</h2>
                        <p>
                            Trip to {{ $item->travel_package->title  }},{{ $item->travel_package->location }}
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

                                    @forelse ($item->details as $detail)
                                    <tr>
                                        <td>
                                            <img src="https://ui-avatars.com/api/?name={{ $detail->username }}" alt=""
                                                width="40px" height="40px"
                                                class="justify-content-center rounded-circle">
                                        </td>
                                        <td class="align-middle">
                                            {{$detail->username}}
                                        </td>
                                        <td class="align-middle">
                                            {{ $detail->nationality }}
                                        </td>
                                        <td class="align-middle">
                                            {{$detail->is_visa ? '30 Days' : 'N/A'}}
                                        </td>
                                        <td class="align-middle">
                                            {{ \Carbon\Carbon::createFromDate($detail->doe_passport) > \Carbon\Carbon::now() ? 
                  'Active' : 'Inactive'  }}
                                        </td>
                                        <td class="align-middle">
                                            <a href="{{ route('checkout-remove',$detail->id) }}">
                                                <img src="https://w7.pngwing.com/pngs/41/41/png-transparent-red-x-button-icon-error-http-404-icon-red-cross-mark-file-miscellaneous-trademark-heart.png"
                                                    width="20px" height="20px">
                                            </a>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="6" class="text-center">
                                            No Visitor</td>
                                    </tr>
                                    @endforelse

                                </tbody>
                            </table>
                        </div>

                        <div class="member mt-3">
                            <h2> Add Member </h2>

                            <form class="form-inline" method="POST" action="{{ route('checkout-create',$item->id) }}">
                                @csrf

                                <label for="inputUsername" class="sr-only">Name</label>
                                <input type="text" name="username" id="inputUsername" class="form-control mb-2 mr-sm-2"
                                    placeholder="Username">

                                <label for="nationality" class="sr-only">Nationality</label>
                                <input type="text" name="nationality" id="nationality" class="form-control mb-2 mr-sm-2"
                                    placeholder="Nationality" style="width: 50px" required>

                                <label for="is_visa" class="sr-only">Visa</label>
                                <select name="is_visa" id="is_visa" class="custom-select mb-2 mr-sm-2">
                                    <option value="" selected>Visa</option>
                                    <option value="1">30 Days</option>
                                    <option value="0">N/A</option>
                                </select>


                                <label for="doePassport" class="sr-only">DOE Passport</label>
                                <div class="input-group mb-2 mr-sm-2">
                                    <input type="text" class="form-control datepicker" name="doe_passport"
                                        id="doePassport" placeholder="DOE Passport">
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
                                    {{ $item->details->count() }}
                                </td>
                            <tr>
                                <th width="50%">Additional Visa</th>
                                <td width="50%" class="text-right">
                                    ${{$item->additional_visa}},00
                                </td>
                            <tr>
                                <th width="50%">Trip Price</th>
                                <td width="50%" class="text-right">
                                    $ {{ $item->travel_package->price }},00 / Person
                                </td>
                            <tr>
                                <th width="50%">Sub Total</th>
                                <td width="50%" class="text-right">
                                    $ {{ $item->transaction_total }}
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Total (+Unique)</th>
                                <td width="50%" class="text-right text-total">
                                    <span class="text-blue"> $ {{ $item->transaction_total }},</span>
                                    <span class="text-orange">{{ mt_rand(0,99) }}</span>
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
                                <img src="https://blog.perkakasku.com/wp-content/uploads/2018/04/bni.jpg"
                                    class="bank-image">
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
                                <img src="data:image/png;base64,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"
                                    class="bank-image">
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
                            <a href="{{ route('checkout-success', $item->id) }}"
                                class="btn btn-block btn-join-now mt-3 py-2">
                                Checkout
                            </a>
                        </div>
                        <div class="text-center mt-3">
                            <a href="{{ route('detail',$item->travel_package->slug) }}" class="text-muted"></a>
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
    $(document).ready(function () {
        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd',
            uilibrary: 'bootstrap4',
            icons: {
                rightIcon: '<img src="https://toppng.com/uploads/preview/time-and-date-icon-11549792838b97dvthvmd.png" width="20px">'
            }
        });
    });

</script>
@endpush
