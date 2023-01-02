@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/blog" class="btn btn-outline-primary btn-sm">Go back</a>
               

                <h1 class="display-one">{{ ucfirst($posts->title) }}</h1>
                <p>{!! $posts->body !!}</p> 
                <hr>
                <a href="{{url('blog/edit/'.$posts->id )}}" class="btn btn-outline-primary">Edit Post</a>
         
                <br><br>
                <a href="{{url('blog/delete/'.$posts->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure You want to delete the blog?:[{{$posts->id}}] from the system ')">Delete</a>

            </div>
        </div>
    </div>

@endsection
