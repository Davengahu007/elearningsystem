@extends('layouts.app')

@section('content')
<div class="container-fluid px-4">

    <div class="card mt-4">
        <div class="card-header">
            <h4 class="mt-4">Add A Submission</h4>
        </div>
        <div class="card-body">
        <div class="text-success">
                @if (session('status'))
                {{ session('status') }}
            @endif
        </div>
        <form action="{{route('give')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-3">
                <label for="unit" >Unit</label>
                <select name="unit" id="" class="form-control">
                   <option value="" selected disabled> Select Unit</option>
                   @foreach ($units as $unit)
                   <option value={{$unit->unit_code}}> {{$unit->unit_name}} </option>
                   @endforeach
               </select>
                
                @error('unit')
                <div class="fw_light text-danger">
                   {{$message}}
                </div>
                @enderror
    
             </div>

            <div class="form-group mb-3">
                <label for="document">Assignment</label>
                <input type="file" class="form-control  @error('document') border border-danger @enderror" id="document" name="document">

                @error('document')
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