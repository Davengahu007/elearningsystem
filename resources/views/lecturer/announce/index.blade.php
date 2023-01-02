@extends('layouts.master2')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                 <div class="row">
                    <div class="col-8">
                        <h1 class="display-one">Announcements!</h1>
                        <p>Find below the posted announcements </p>
                    </div>
                    <div class="col-4">
                        <p>Create new Announcement</p>
                        <a href="/lecturer/create/post" class="btn btn-primary btn-sm">Add Announcement</a>
                    </div>
                </div>                
                @forelse($posts as $post)
                    <ul>
                        <li><a href="./lecturer/{{ $post->id }}">{{ ucfirst($post->title) }}</a></li>
                    </ul>
                @empty
                    <p class="text-warning">No Announcement Made</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection