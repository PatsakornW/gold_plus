<nav class="navbar navbar-expand-sm p-0 " aria-label="Offcanvas navbar large" style="background-color: #B0120A;">
    <div class="container-fluid">
        <a class="navbar-brand ps-5" href="/">
            <img src="{{URL('assets/logo.png')}}" class="img-fluid" width="50" height="50">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas-sm offcanvas-start "  id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label" style="background-color: #B0120A;">
            <div class="offcanvas-header ">
                <h5 class="offcanvas-title fw-bold text-white" id="offcanvasNavbar2Label">GOLDPLUS</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end  pe-3  align-items-center">
                    <li class="nav-item">
                        <a class="nav-link text-white" aria-current="page" href="{{route('home')}}">หน้าแรก</a>
                    </li>
                    @auth
                    <li class="nav-item">
                        <div class="dropdown">
                            <a class="border-0 border nav-link text-white btn  dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" aria-haspopup="true" >
                                รายการ
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{route('menu')}}">ธุรกรรม</a></li>
                                <li><a class="dropdown-item" href="{{route('topup')}}">ฝากเงิน</a></li>
                                <li><a class="dropdown-item" href="{{route('withdraw')}}">ถอนเงิน</a></li>
                                <li><a class="dropdown-item" href="{{route('trade')}}">แลกโทเคน</a></li>
                                <li><a class="dropdown-item" href="{{route('trade')}}">แลกทอง</a></li>
                            </ul>
                        </div>

                    </li>
                    @if (Route::has('login'))
                    @auth
                    @else
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="btn btn-light text-danger rounded-3 border-0 border nav-link  fw-bold ">เข้าสู่ระบบ</a>
                    </li>
                    @endauth
                    @endif

                    @if (Auth::user()->type == 1){{-- admin = 1 , user = 0 --}}
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{route('AdminDashboard')}}">Admin</a>
                    </li>
                    @endif
                    @endauth
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{route('contact')}}">ติดต่อเรา</a>
                    </li>
                    @if (Route::has('login'))
                    @auth
                    @else
                    <li class="nav-item">
                        <a href="{{ route('Login') }}" class="btn btn-light text-danger rounded-3 border-0 border nav-link  fw-bold ">เข้าสู่ระบบ</a>
                    </li>
                    @endauth
                    @endif
                    @if (Route::has('login'))
                    @auth



                    <div class="dropdown">
                        <a class="position-relative fw-bold btn btn-light text-danger btn-sm rounded-4 border-0 dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                            {{Auth::user()->name}}
                            <span class="position-absolute top-50 start-100 translate-middle badge">
                                <img src="{{URL('assets/user.png')}}" width="40" height="40">
                            </span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <div class="container-fluid">
                                    <div class="row ">
                                        <div class="col  d-flex justify-content-start">{{Auth::user()->name}}</div>
                                        <div class="col  d-flex justify-content-start fw-bold text-danger"> {{Auth::user()->balance_credit}} </div>
                                        <hr>
                                    </div>
                                </div>
                            </li>
                            <li> <a class="dropdown-item" href="{{route('profile')}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lines-fill me-2" viewBox="0 0 16 16">
                                        <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z" />
                                    </svg>ข้อมูลผู้ใช้</a></li>
                            <li><a class="dropdown-item" href="{{route('howto')}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                        <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                    </svg>
                                    </svg>วิธีใช้งาน</a></li>
                            <li> <a class="dropdown-item" href="{{route('list')}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-list me-2" viewBox="0 0 16 16">
                                        <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                                        <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z" />
                                    </svg>รายการ</a></li>
                            <li>
                                <a class="dropdown-item " href="{{route('logout')}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right me-2" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                                        <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                                    </svg>ออกจากระบบ</a>
                            </li>
                        </ul>
                    </div>


                    @endauth
                    @endif
                </ul>
            </div>
        </div>
    </div>
</nav>
