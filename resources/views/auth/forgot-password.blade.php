
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

<form action="{{ route('password.email') }}" method="post">
    @csrf
    <section class="vh-100">
        <div class="container ">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-10 col-md-8 col-lg-6 col-xl-4">
                    <div class="card  shadow-lg border-0 rounded-4" style="background-color: #B0120A;">
                        <div class="card-body  text-center">
                            <div class="container">
                                <img src="{{URL('assets/logo.png')}}" width="75" height="75" class="rounded-circle mb-2 ">
                                <p class=" mb-3 fw-bold text-white">ลืมรหัสผ่าน</p>

                                @if (session('status'))
                                <div class="mb-4  text-sm text-white">
                                    {{ session('status') }}
                                </div>
                                @endif

                                <div class="flex-column ">
                                    <div class="col-8 mb-2 ms-auto me-auto">
                                        <input type="email" class="form-control-sm form-control border-1 rounded-3" placeholder="กรอกอีเมลที่ได้ลงทะเบียนไว้" name="email" required autofocus>
                                    </div>
                                </div>
                                <button type="submit" class="fw-bold btn btn-light border-0 rounded-3 mt-3 ">
                                    <a class="text-danger" style="text-decoration: none;">ยืนยัน</a>
                                </button>
                            </div>
                            <div class="d-flex justify-content-center text-white">
                                <div class="w-100">
                                    <hr>
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

