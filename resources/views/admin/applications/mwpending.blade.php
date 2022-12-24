@extends('layouts.master')

@section('content')

<div class="container-fluid px-4">

    <div class="card mt-4">
        <div class="card-header">
            <h4 class="mt-4">Manage Worker Applications</h4>
        </div>
        <div class="card-body">
            <div class="text-success">
                @if (session('status'))
                {{ session('status') }}
            @endif
            </div>
            

        <form action="{{url('admin/awpending/'.$mwpending->id)}}" method="post">
            @csrf
            @method('PUT')

            <div class="form-group mb-3">
                <label for="sid">ID</label>
                <input type="number" value="{{$mwpending->id}}" class="form-control @error('sid') border border-danger @enderror" id="sid" name="sid" disabled>
            
                @error('sid')
                    <div class="fw-light text-danger" >
                        {{$message}}

                    </div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="name">Name</label>
                <input type="text" value="{{$mwpending->name}}" class="form-control @error('name') border border-danger @enderror" id="name" name="name" disabled>
            
                @error('name')
                    <div class="fw-light text-danger" >
                        {{$message}}

                    </div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="email">Email</label>
                <input type="email" value="{{$mwpending->email}}" class="form-control @error('email') border border-danger @enderror" id="email" name="email" disabled>
            
                @error('email')
                    <div class="fw-light text-danger" >
                        {{$message}}

                    </div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="age">Age</label>
                <input type="number" value="{{$mwpending->age}}" class="form-control @error('age') border border-danger @enderror" id="age" name="age" disabled>
            
                @error('age')
                    <div class="fw-light text-danger" >
                        {{$message}}

                    </div>
                @enderror
            </div>


            <div class="form-group mb-3">
                <label for="id_no">Id Number</label>
                <input type="text" value="{{$mwpending->id_no}}" class="form-control @error('id_no') border border-danger @enderror" id="id_no" name="id_no" disabled>
            
                @error('id_no')
                    <div class="fw-light text-danger" >
                        {{$message}}

                    </div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="job">Job</label>
                <input type="text" value="{{$mwpending->job}}" class="form-control @error('job') border border-danger @enderror" id="job" name="job" disabled>
            
                @error('job')
                    <div class="fw-light text-danger" >
                        {{$message}}

                    </div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="description">Description</label>
                <input type="text" value="{{$mwpending->description}}" class="form-control @error('description') border border-danger @enderror" id="description" name="description" disabled>
            
                @error('description')
                    <div class="fw-light text-danger" >
                        {{$message}}

                    </div>
                @enderror
            </div>
            
            <div class="form-group mb-3">
                <label for="documents">Documents</label>
                <input type="text" value="{{$mwpending->documents}}" class="form-control @error('documents') border border-danger @enderror" id="documents" name="documents" disabled>
            
                @error('documents')
                    <div class="fw-light text-danger" >
                        {{$message}}

                    </div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="status">Status</label>
                <input type="text" value="{{$mwpending->status}}" class="form-control @error('status') border border-danger @enderror" id="status" name="status" disabled>
            
                @error('status')
                    <div class="fw-light text-danger" >
                        {{$message}}

                    </div>
                @enderror
            </div>

            <button id="employ" name ="employ" type="submit" class="btn btn-primary"> Employ </button>
            <button id="reject" name ="reject" type="submit" class="btn btn-danger"> Reject </button>

        </form>

        </div>
    </div>
</div>

@endsection