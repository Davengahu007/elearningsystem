@extends('layouts.master')

@section('content')
@if (session('message'))
        <h5 class="alert alert-success mb-2">{{ session('message') }}</h5>
    @endif
<div class="container-fluid px-4 dashboard-container">

                        <h1 class="mt-4 dashboard-heading">ADMIN </h1>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-secondary text-white mb-4">
                                    <div class="card-body">
                                        Student Applications
                                         <h3>{{$stdpending}}</h3> 
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                         <a class="small text-white stretched-link" href="{{route('stdpending')}}">View Details</a> 
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-secondary text-white mb-4">
                                    <div class="card-body">
                                        The Enrolled Students 
                                         <h3>{{$stdenrolled}}</h3> 
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="{{route('view_students')}}">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-secondary text-white mb-4">
                                    <div class="card-body">
                                        Approved Student Applications
                                         <h3>{{$stdapproved}}</h3> 
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-secondary text-white mb-4">
                                    <div class="card-body">
                                        Pending Staff Applications
                                         <h3>{{$wpending}}</h3>  
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="{{route('wpending')}}">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-secondary text-white mb-4">
                                    <div class="card-body">
                                         Non-Teaching Staff 
                                         <h3>{{$wemployed}}</h3> 
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="{{route('view_workers')}}">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

                            
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-secondary text-white mb-4">
                                    <div class="card-body">
                                        Approved Staff Applications
                                        <h3>{{$wapproved}}</h3> 
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                              <div class="card bg-secondary text-white mb-4">
                                    <div class="card-body">
                                     Employed Lecturers
                                     <h3>{{$lemployed}}</h3> 
                                     </div>
                                     <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                             </div>
                            </div>
                        
                        </div>

                        </div>
                        </div>
                    </div>
@endsection