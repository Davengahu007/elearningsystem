@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                
                <h1 class="display-one">{{ ucfirst($posts->title) }}</h1>
                <p>{!! $posts->body !!}</p> 
            
                <hr>
                <a href="/lecturer" class="btn btn-outline-primary btn-sm">Go back</a>
               
            </div>
        </div>
    </div>

@endsection
