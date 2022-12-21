<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

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
    <a class="navbar-brand" href="#">MYSCHOOL</a>
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="{{route('home')}}">Home</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard')}}">Dashboard</a>
        </li>
    </ul>

     <ul class="navbar-nav">
       
       @auth 

       <li class="nav-item">
        <a class="nav-link" href="{{url('profile')}}">[ {{ auth()->user()->name }} ]</a>
       </li>

       <li class="nav-item">
        <form action="{{route('logout')}}" method="post">
          {{ csrf_field() }}  
          <button type="submit" class="btn nav-link ">Logout</button>
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

    @yield('content')
</body>
</html>
