@extends('layouts.master2')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/lecturer" class="btn btn-outline-primary btn-sm">Go back</a>
                <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
                    <h1 class="display-4">Edit Announcement</h1>
        
                    <hr>

                    <form action="{{url('lecturer/update/'.$posts->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="title"> Title</label>
                                <input type="text" id="title" class="form-control" name="title"
                                       placeholder="Enter Post Title" value="{{ $posts->title }}" required>
                            </div>
                            <div class="control-group col-12 mt-2">
                                <label for="body"> Body</label>
                                <textarea id="body" class="form-control" name="body" placeholder="Enter Post Body"
                                          rows="5" required>{{ $posts->body }}</textarea>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="control-group col-12 text-center">
                                <button id="btn-submit" class="btn btn-primary">
                                    Update 
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection