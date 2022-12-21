<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>
    
  <nav class="navbar">
    <ul class="navitems">
        <li>
            <a href="{{route('home')}}">Home</a>
        </li>

        <li>
            <a href="{{ route('dashboard')}}">Dashboard</a>
        </li>
    </ul>

    

 
     <ul class= "navitems">
       
       @auth 

       <li>
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
       <li>
        <a href="{{route('login')}}">Login</a>
       </li>
       
       <li>
        <a href="{{route('register')}}">Register</a>
       </li>

       <li>
        <a href="{{route('StdApply')}}">Apply for entrollment as a student</a>
      </li>

      <li>
        <a href="{{route('WApply')}}">Apply for a job</a>
      </li>




       @endguest
    
    </ul> 
</nav>

    @yield('content')
</body>
</html>
