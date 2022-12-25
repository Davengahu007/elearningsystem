@extends('layouts.master')

@section('content')
<div class="container-fluid px-4">

    <div class="card mt-4">
        <div class="card-header">
            <h4 class="mt-4">Add A New Course</h4>
        </div>
        <div class="card-body">
        <div class="text-success">
                @if (session('status'))
                {{ session('status') }}
            @endif
        </div>
        <form action="{{url('admin/update_course/'.$courses->course_code)}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group mb-3">
                <label for="course_name">Course Name</label>
                <input type="text" class="form-control  @error('course_name') border border-danger @enderror" id="course_name" name="course_name" value="{{$courses->course_name}}">

                @error('course_name')
                    <div class="fw-light text-danger" >
                        {{$message}}

                    </div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="course_code">Course Code</label>
                <input type="number" class="form-control @error('course_code') border border-danger @enderror" id="course_code" name="course_code" value="{{$courses->course_code}}">
              
                @error('course_code')
                    <div class="fw-light text-danger" >
                        {{$message}}

                    </div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="school">School of course</label>
                <input type="school" class="form-control @error('school') border border-danger @enderror" id="school" name="school" value="{{$courses->school}}">
            
                @error('school')
                    <div class="fw-light text-danger" >
                        {{$message}}

                    </div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="duration">Duration(Years)</label>
                <input type="number" class="form-control @error('duration') border border-danger @enderror" id="duration" name="duration" value="{{$courses->duration}}">
            
                @error('duration')
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