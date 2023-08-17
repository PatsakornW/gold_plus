<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GOLDPLUS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@300&family=Prompt:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL('css/style.css')}}">
</head>

<body>
    <!-- <div class="">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class=" bi bi-arrow-left text-danger" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
            </svg>
        </div> -->
    <form method="POST" action="{{ route('login') }}">
        @csrf
        @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif
        <section class="vh-100">
            <div class="container ">
                <div class="row d-flex justify-content-center align-items-center h-100 ">
                    <div class="col-10 col-md-8 col-lg-6 col-xl-4">
                        <div class="card  shadow-lg rounded-4 border-0" style="background-color: #B0120A;">
                            <div class="card-body text-center">
                                <div class="container">
                                    <img src="{{URL('assets/logo.png')}}" width="75" height="75" class="rounded-circle mb-2 ">
                                    <p class="fw-bold mb-3 text-white">เข้าสู่ระบบ</p>

                                    <div class="flex-column ">
                                        <div class="col-7 mb-2 ms-auto me-auto">
                                            <input type="email" class="form-control-sm form-control border-1 rounded-3" placeholder="อีเมล" name="email" id="email" class="block mt-1 w-full" required autofocus>
                                        </div>

                                        <div class="col-7 mb-2 ms-auto me-auto">
                                            <input type="password" class="form-control-sm form-control border-1 rounded-3" placeholder="รหัสผ่าน" name="password" id="password" class="block mt-1 w-full" required autocomplete="current-password">
                                        </div>
                                        <!-- <label for="remember_me" class="flex items-center">
                                            <x-jet-checkbox id="remember_me" name="remember" ce />
                                            <span class="ml-2 text-sm text-gray-600">{{ __('จดจำ') }}</span>
                                        </label> -->
                                    </div>
                                    @if ($errors->any())
                                    <div class="fw-bold text-warning">
                                            @foreach ($errors->all() as $error)
                                            <p>{{ $error }}</p>
                                            @endforeach
                                    </div>
                                    @endif

                                    <button type="submit" class="fw-bold btn btn-light border-0 rounded-3 mt-3 ">
                                        <a class="text-danger" style="text-decoration: none; ">เข้าสู่ระบบ</a>
                                    </button>

                                </div>

                                <div class="d-flex justify-content-center text-white">
                                    <div class="w-100">
                                        <hr>
                                    </div>
                                </div>

                                <div class="row  m-0">
                                    <div class="col">
                                        <p><a id="forgetpass-btn" class="fw-bold text-white" href="{{ route('password.request') }}">ลืมรหัสผ่าน ?</a></p>
                                    </div>

                                    <div class="col">
                                        <a id="register-btn" href="{{ route('register') }}" class="fw-bold text-white ">เปิดบัญชี </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
</body>
