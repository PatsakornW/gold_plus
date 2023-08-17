<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GOLDPLUS</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL('css/style.css')}}">


</head>

<body>
    @include('nav')
    <div class="row  m-auto p-3   g-2 d-flex justify-content-evenly ">
        <div class="col-sm-12 col-lg-4 col-md-10 col-xl-4 card border-0 shadow p-0  rounded-4">
            <div class="card-header" style="background-color: #B0120A;">
                <p class=" text-center text-white fs-5  m-1  fw-bold"> จำนวนเงินคงเหลือ </p>
            </div>
            <div class="card-body">
                <div class="container text-center ">
                    <div class="d-flex fs-5 ">
                        <p class="col "> เครดิต </p>
                        <p class="col fw-bold fs-4">{{Auth::user()->balance_credit}}</p>
                    </div>
                    <div>
                        <hr>
                    </div>
                    <div class="d-flex fs-5">
                        <p class="col "> โทเคน</p>
                        <p class="col fw-bold fs-4">{{Auth::user()->balance_token}}</p>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-sm-12 col-lg-4 col-md-10 col-xl-4 card border-0 shadow p-0 rounded-4">
            <div class="card-header " style="background-color: #B0120A;">
                <div class="row text-center">
                    <div class="col-12 ">
                        <p class="text-white fs-5  m-1 fw-bold "> ทองคำแท่ง | ความบริสุทธิ์ทองคำ 96.5 %<span class="fs-4" id="icon">
                        </span></p>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="container text-center">
                    <div class="d-flex fs-5">
                        <p class="col "> ราคารับซื้อ (บาท)</p>
                        <p class="col fw-bold fs-4" id="buy"></p>

                    </div>
                    <div>
                        <hr>
                    </div>
                    <div class="d-flex fs-5">
                        <p class="col "> ราคาขาย (บาท)</p>
                        <p class="col fw-bold fs-4" id="sell"></p>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- เมนู เริ่ม -->
    <div class="container">

        <div class="row d-flex justify-content-center align-items-center  text-white ">
            <div class="col-12 col-md-10 col-lg-8 col-xl-7">
                <div class="card  shadow border-0 rounded-4" style="background-color: #B0120A;">
                    <div class="row ">
                        <a href="{{route('topup')}}" class="btn col-6 col-md-3 col-lg-3 col-xl-3 rounded-0 border-0 text-white">
                            <img src="{{URL('assets/upload.png')}}" width="75" height="75 " class="mt-2">
                            <p class="mt-2">ฝากเงิน</p>
                        </a>
                        <a href="{{route('withdraw')}}" class="btn col-6 col-md-3 col-lg-3 col-xl-3 rounded-0 border-0 text-white">
                            <img src="{{URL('assets/download.png')}}" width="75" height="75 " class="mt-2">
                            <p class="mt-2">ถอนเงิน</p>
                        </a>
                        <a href="{{route('trade')}}" class="btn col-6 col-md-3 col-lg-3 col-xl-3 rounded-0 border-0 text-white">
                            <img src="{{URL('assets/coin.png')}}" width="75" height="75 " class="mt-2">
                            <p class="mt-2">แลกโทเคน</p>
                        </a>
                        <a href="{{route('trade')}}" class="btn col-6 col-md-3 col-lg-3 col-xl-3 rounded-0 border-0 text-white">
                            <img src="{{URL('assets/gold_ic.png')}}" width="75" height="75 " class="mt-2">
                            <p class="mt-2">แลกทอง</p>
                        </a>
                    </div>


                </div>
            </div>


        </div>


    </div>
    <!-- เมนู จบ -->
</body>
