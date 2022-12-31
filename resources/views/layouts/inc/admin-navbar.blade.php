<nav class="navbar navbar-expand-md mb-6">
    <img class="navbar-logo" src="../logo.svg" alt="">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="{{url('admin/dashboard')}}">MYSCHOOL</a>
            
            <!-- Navbar-->
            <div class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('profile')}}">[ {{ auth()->user()->name }} ]</a>
                </li>
                
                <li class="nav-item">
                    <form>
                    <a class="nav-link" href="{{url('change-password')}}">  
                    <button type="submit" class="btn nav-link ">Change Password</button>
                    </form>  
                </li>

                <li class="nav-item">
                    <form action="{{route('logout')}}" method="post">
                    {{ csrf_field() }}
                    <button type="submit" class="btn nav-link ">Logout</button>
                    </form>
                </li>
                </ul>
            </div>
            
        </nav>