@extends('layouts.app')

@section('content')

<form action ="{{url('/WApply')}}" method="post">
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
        <label for="id_no" class="sr-only">ID number</label>
        <input type="number" name="id_no" id="id_no"  placeholder="Enter your national ID number" value="{{old('id_no') }}" >

        @error('id_no')
        <div class="error"style="color:red;">
           {{$message}}
        </div>
       @enderror

    </div>

    <div class="form">
        <label for="job" class="sr-only">Position applying for</label>
        <input type="text" name="job" id="job"  placeholder="Enter the job position you are applying for" value="{{old('job') }}">

        @error('job')
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