<nav class="navbar fixed-top navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">

            <img width="50px" class="img-fluid mx-auto" src="{{ asset('assets/jru_logo.png') }}" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'welcome' ? 'active' : '' }}" aria-current="page"
                        href="{{ route('welcome') }}">Home</a>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <a class=" nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Admin
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('admin.home') }}">Home</a></li>
                            <li><a class="dropdown-item" href="{{ route('admin.profile.index') }}">Profile</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <a class=" nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Clerk
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('clerk.home') }}">Home</a></li>
                            <li><a class="dropdown-item" href="{{ route('clerk.profile') }}">Profile</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <a class=" nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Student
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('student.home') }}">Home</a></li>
                            <li><a class="dropdown-item" href="{{ route('student.profile') }}">Profile</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <div class="ms-auto">
            <ul class="navbar-nav">
                @auth
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="bi bi-person-circle "></i>
                        </a>
                    </li>

                @endauth
                @guest
                    <li class="nav-item">
                        <a href="{{route('auth.login.index')}}" class="nav-link">
                            Login
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            Register
                        </a>
                    </li>
                @endguest


            </ul>
        </div>
    </div>
</nav>
