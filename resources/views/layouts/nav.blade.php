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
                        href="{{ route('welcome') }}">Welcome</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}"
                        href="{{ route('admin.home') }}">Admin Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}"
                        href="{{ route('clerk.home') }}">clerk Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}"
                        href="{{ route('student.home') }}">Student Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'profile' ? 'active' : '' }}"
                        href="{{ route('admin.profile.index') }}">Admin Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'profile' ? 'active' : '' }}"
                        href="{{ route('clerk.profile') }}">Clerk Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'profile' ? 'active' : '' }}"
                        href="{{ route('student.profile') }}">Student Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'about' ? 'active' : '' }}"
                        href="{{ route('about') }}">About</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
