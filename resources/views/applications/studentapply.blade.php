@extends('layouts.app')

@section('content')

<form action ="{{url('/StdApply')}}" method="post">
    @csrf
   

    <div class="form">
        <label for="name" class="sr-only">Full Name</label>
        <input type="text" name="name" id="name" placeholder="Enter your Full Name"  value="{{old('name') }}">

        @error('name')
        <div class="error"style="color:red;">
        {{$message}}
        </div>
       @enderror

    </div>

    <div class="form">
        <label for="email" class="sr-only">Email</label>
        <input type="email" name="email" id="email" placeholder="Enter your email"  value="{{old('email') }}">

        @error('email')
        <div class="error"style="color:red;">
        {{$message}}
        </div>
       @enderror

    </div>

    <div class="form">
        <label for="age" class="sr-only">Age</label>
        <input type="number" name="age" id="age"  placeholder="Enter your age" value="{{old('age') }}" >

        @error('age')
        <div class="error"style="color:red;">
           {{$message}}
        </div>
       @enderror

    </div>

    <div class="form">
        <label for="former_school" class="sr-only">Former School</label>
        <input type="text" name="former_school" id="former_school"  placeholder="Enter your former school" value="{{old('former_school') }}" >

        @error('age')
        <div class="error"style="color:red;">
           {{$message}}
        </div>
       @enderror

    </div>

    <div class="form">
        <label for="grade" class="sr-only">Grade</label>
        <input type="text" name="grade" id="grade"  placeholder="Enter your final examination grade" value="{{old('grade') }}">

        @error('grade')
        <div class="error"style="color:red;">
           {{$message}}
        </div>
       @enderror

    </div>


    <div class="form">
        <label for="course" class="sr-only">Course</label>
        <input type="text" name="course" id="course"  placeholder="Enter the course you would like to apply for" value="{{old('course') }}">

        @error('course')
        <div class="error"style="color:red;">
           {{$message}}
        </div>
       @enderror

    </div>

    <div class="form">
        <label for="description" class="sr-only">About you</label>
        <input type="text" name="description" id="description"  placeholder="Tell us about yourself in a few words" value="{{old('description') }}">

        @error('description')
        <div class="error"style="color:red;">
           {{$message}}
        </div>
       @enderror

    </div>
    
    
    <div>
        <button type="submit" class=button> Apply </button>
    </div>
    </form>
    

@endsection