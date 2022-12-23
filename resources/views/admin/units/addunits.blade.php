@extends('layouts.master')

@section('content')
<div class="container-fluid px-4">

    <div class="card mt-4">
        <div class="card-header">
            <h4 class="mt-4">Add A New Unit</h4>
        </div>
        <div class="card-body">
        <div class="text-success">
                @if (session('status'))
                {{ session('status') }}
            @endif
        </div>
        <form action="{{route('addunit')}}" method="post">
            @csrf
            <div class="form-group mb-3">
                <label for="unit_name">Unit Name</label>
                <input type="text" class="form-control  @error('unit_name') border border-danger @enderror" id="unit_name" name="unit_name" value="{{old('unit_name')}}">

                @error('unit_name')
                    <div class="fw-light text-danger" >
                        {{$message}}

                    </div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="unit_code">Unit Code</label>
                <input type="number" class="form-control @error('unit_code') border border-danger @enderror" id="unit_code" name="unit_code" value="{{old('unit_code')}}">
              
                @error('unit_code')
                    <div class="fw-light text-danger" >
                        {{$message}}

                    </div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="course_code">Course Code</label>
                <input type="course_code" class="form-control @error('course_code') border border-danger @enderror" id="course_code" name="course_code" value="{{old('course_code')}}">
            
                @error('course_code')
                    <div class="fw-light text-danger" >
                        {{$message}}

                    </div>
                @enderror
            </div>
            

            
            <button type="submit" class="btn btn-success">Submit</button>
            <button type="reset" class="btn btn-danger">Cancel</button>

        </form>
</div>
</div>
</div>
@endsection