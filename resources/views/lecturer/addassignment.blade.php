@extends('layouts.master2')

@section('content')
<div class="container-fluid px-4">

    <div class="card mt-4">
        <div class="card-header">
            <h4 class="mt-4">Add A New Assignment</h4>
        </div>
        <div class="card-body">
        <div class="text-success">
                @if (session('status'))
                {{ session('status') }}
            @endif
        </div>
        <form action="{{route('addassignment')}}" method="post">
            @csrf
            <div class="form-group mb-3">
                <label for="assignment_name">Assignment Name</label>
                <input type="text" class="form-control  @error('assignment_name') border border-danger @enderror" id="assignment_name" name="assignment_name" value="{{old('assignment_name')}}">

                @error('assignment_name')
                    <div class="fw-light text-danger" >
                        {{$message}}

                    </div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="due_date">Due Date</label>
                <input type="date" class="form-control @error('due_date') border border-danger @enderror" id="due_date" name="due_date" value="{{old('due_date')}}">
              
                @error('due_date')
                    <div class="fw-light text-danger" >
                        {{$message}}

                    </div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="instruction">Instructions</label>
                <input type="textarea" class="form-control @error('instruction') border border-danger @enderror" id="instruction" name="instruction" value="{{old('instruction')}}">
            
                @error('instruction')
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