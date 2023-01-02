@extends('layouts.master2')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
               
                <h1 class="display-one">{{ ucfirst($posts->title) }}</h1>
                <p>{!! $posts->body !!}</p> 
                <hr>
                <a href="/lecturer" class="btn btn-outline-primary btn-sm">Go back</a>

                <br><br>
                <a href="{{url('lecturer/edit/'.$posts->id )}}" class="btn btn-outline-primary">Edit </a>
         
               
                <a href="{{url('lecturer/delete/'.$posts->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure You want to delete the blog?:[{{$posts->id}}] from the system ')">Delete</a>

            </div>
        </div>
    </div>

@endsection
