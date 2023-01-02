<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>school management</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/my.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/my.css')}}">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</head>
<body>
<nav class="navbar navbar-expand-md mb-6">
  <a class="navbar-brand" href="{{route('home')}}">MYSCHOOL</a>
  <ul class="nav justify-content-end navbar-nav ms-auto">

    @auth
      
      <li class="nav-item">
        <a class="nav-link" href="{{url('profile')}}">[ {{ auth()->user()->name }} ]</a>
      </li>
      <li class="nav-item">
        <form action="{{route('logout')}}" method="post">
          {{ csrf_field() }}
          <button type="submit" class="btn nav-link " name="pfees" id="pfees">Logout</button>
        </form>
      </li>

    @endauth
    
    @guest
    <li class="nav-item">
      <a class="nav-link" href="{{route('login')}}">Login</a>
     </li>
     
     <li class="nav-item">
      <a class="nav-link" href="{{route('register')}}">Register</a>
     </li>

     <li class="nav-item">
      <a class="nav-link" href="{{route('StdApply')}}">Apply for entrollment as a student</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{route('WApply')}}">Apply for a job</a>
    </li>
    @endguest
      
</ul>
</nav>
<div id="layoutSidenav">

    @include('layouts.inc3.admin-sidebar')
    <div id="layoutSidenav_content">
                <main>
                    @yield('content')

                </main>
                
    </div>
</div>

<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/scripts.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<script src="assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="js/datatables-simple-demo.js"></script>

@yield('scripts')

</body>
</html>