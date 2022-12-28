@extends('layouts.master')

@section('content')
<div class="container-fluid px-4">

    <div class="card mt-4">
        <div class="card-header">
            <h4 class="mt-4">Unit Details</h4>
        </div>
        <div class="card-body">
        <div class="text-success">
                @if (session('status'))
                {{ session('status') }}
            @endif
        </div>
        <form action="{{url('student/register_unit/'.$unit->unit_code)}}" method="post">
            @csrf
            <div class="form-group mb-3">
                <label for="unit_name">Unit Name</label>
                <input type="text" class="form-control  @error('unit_name') border border-danger @enderror" id="unit_name" name="unit_name" value="{{$unit->unit_name}}">

                @error('unit_name')
                    <div class="fw-light text-danger" >
                        {{$message}}

                    </div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="unit_code">Unit Code</label>
                <input type="number" class="form-control @error('unit_code') border border-danger @enderror" id="unit_code" name="unit_code" value="{{$unit->unit_code}}">
              
                @error('unit_code')
                    <div class="fw-light text-danger" >
                        {{$message}}

                    </div>
                @enderror
            </div>
       
            <button type="submit" class="btn btn-success" onclick="return confirm('Are you sure You want to register for this unit')">Register</button>

        </form>
</div>
</div>
</div>
@endsection