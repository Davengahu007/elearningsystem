@extends('layouts.app')

@section('content')
<div class="container-fluid px-4">

    <div class="card mt-4">
        <div class="card-header">
            <h4 class="mt-4">Update Payment Info</h4>
        </div>
        <div class="card-body">
        <div class="text-success">
                @if (session('status'))
                {{ session('status') }}
            @endif
        </div>
        <form action="{{route('add_details')}}" method="post">
            @csrf
            <div class="form-group mb-3">
                <label for="card_number">Enter Card Number</label>
                <input type="number" class="form-control  @error('card_number') border border-danger @enderror" id="card_number" name="card_number">

                @error('card_number')
                    <div class="fw-light text-danger" >
                        {{$message}}

                    </div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="expiry_date">Expiry Date</label>
                <input type="text" class="form-control  @error('expiry_date') border border-danger @enderror" id="expiry_date" name="expiry_date">

                @error('expiry_date')
                    <div class="fw-light text-danger" >
                        {{$message}}

                    </div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="cvv">CVV</label>
                <input type="number" class="form-control  @error('cvv') border border-danger @enderror" id="cvv" name="cvv">

                @error('cvv')
                    <div class="fw-light text-danger" >
                        {{$message}}

                    </div>
                @enderror
            </div>
       
            <button type="submit" class="btn btn-success" onclick="return confirm('Are you sure You want to update your bank details')">Submit</button>
            <button type="reset" class="btn btn-danger">Cancel</button>

        </form>
</div>
</div>
</div>
@endsection