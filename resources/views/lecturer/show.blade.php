@extends('layouts.master2')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/blog" class="btn btn-outline-primary btn-sm">Go back</a>
               

                <h1 class="display-one">{{ ucfirst($posts->title) }}</h1>
                <p>{!! $posts->body !!}</p> 
                
            </div>
        </div>
    </div>

@endsection
