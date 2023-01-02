@extends('layouts.app')

@section('content')
<div class="container-fluid px-4">

    <div class="card mt-4">
        <div class="card-header">
            <h4 class="mt-4">Make Payment</h4>
        </div>
        <div class="card-body">
        <div class="text-success">
                @if (session('status'))
                {{ session('status') }}
            @endif
        </div>
        <form action="{{route('lipa')}}" method="post">
            @csrf
            <div class="form-group mb-3">
                <label for="amount_paid">Enter Amount To Be Paid</label>
                <input type="number" class="form-control  @error('amount') border border-danger @enderror" id="amount_paid" name="amount_paid">

                @error('amount_paid')
                    <div class="fw-light text-danger" >
                        {{$message}}

                    </div>
                @enderror
            </div>
       
            <button type="submit" class="btn btn-success" onclick="return confirm('Are you sure You want to make this payment')">Pay</button>
            <button type="reset" class="btn btn-danger">Cancel</button>

        </form>
</div>
</div>
</div>
@endsection