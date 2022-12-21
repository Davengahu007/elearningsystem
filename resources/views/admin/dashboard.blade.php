@extends('layouts.app')

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
                                        Pending Student Applications
                                        {{-- <h3>{{$users}}</h3> --}}
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        {{-- <a class="small text-white stretched-link" href="{{url('admin/viewusers')}}">View Details</a> --}}
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-secondary text-white mb-4">
                                    <div class="card-body">
                                        Students Enrolled
                                        {{-- <h3>{{$managers}}</h3> --}}
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        {{-- <a class="small text-white stretched-link" href="{{url('admin/viewhod')}}">View Details</a> --}}
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-secondary text-white mb-4">
                                    <div class="card-body">
                                        Approved Students Applications
                                        {{-- <h3>{{$onleave}}</h3> --}}
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        {{-- <a class="small text-white stretched-link" href="{{url('admin/usersonleave')}}">View Details</a> --}}
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-secondary text-white mb-4">
                                    <div class="card-body">
                                        Pending Staff Applications
                                        {{-- <h3>{{$pleaves}}</h3>  --}}  
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                       {{--  <a class="small text-white stretched-link" href="{{url('admin/viewpleaves')}}">View Details</a> --}}
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-secondary text-white mb-4">
                                    <div class="card-body">
                                        Staff Employed
                                        {{-- <h3>{{$aleaves}}</h3> --}}
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        {{-- <a class="small text-white stretched-link" href="{{url('admin/viewaleaves')}}">View Details</a> --}}
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-secondary text-white mb-4">
                                    <div class="card-body">
                                        Approved Staff Applications
                                        {{-- <h3>{{$rleaves}}</h3> --}}
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        {{-- <a class="small text-white stretched-link" href="{{url('admin/viewrleaves')}}">View Details</a> --}}
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="departments">
                            <h1>Departments</h1>
                            {{-- <div class="owl-carousel owl-theme">
                                @foreach ($departments as $department)
                                <div class="department item">
                                    <h1>{{ $department->departmentname }} staff at work</h1>
                                    @php
                                    $count = 0;
                                    @endphp

                                    @foreach($usersArray as $user)
                                        @php
                                        if ($user->department == $department->departmentname) {
                                            $count = $count + 1;
                                        }
                                        @endphp
                                    @endforeach
                                    @php
                                    $totalUsers = $usersArray->count();
                                    @endphp
                                    <p>{{$count}} Employees | {{round($count/$totalUsers*100,1)}}% </p>
                                    <div class="percent" style="width: 10vw;">
                                        <div class="percent-child" style="width:{{$count/$totalUsers*10 }}vw"></div>
                                    </div>
                                </div>
                                @endforeach
                            </div> --}}
                        </div>
                    </div>
@endsection