<nav class="p-0 main-header navbar navbar-expand navbar-white navbar-light" style="background-color: #B0120A;">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav justify-content-end flex-grow-1 pe-4  align-items-center">
        <li class="nav-item">
            <a class="position-relative fw-bold btn btn-light text-danger btn-sm rounded-4 border-0 dropdown-toggle" href="{{route('home')}}" >
                {{Auth::user()->name}}
                <span class="position-absolute top-50 start-100 translate-middle badge">
                    <img src="{{URL('assets/user.png')}}" width="40" height="40">
                </span>
            </a>
        </li>
    </ul>
</nav>
