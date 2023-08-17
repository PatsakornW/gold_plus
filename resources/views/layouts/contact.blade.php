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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>

<body>
    @include('nav')
    <!-- ปุ่มกลับ -->
    <div class="p-0 container-fluid ">
        <a class="nav-link" href="javascript:history.back()"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-chevron-left m-2" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
            </svg></a>
    </div>
    <!-- ปุ่มกลับ -->

    <div class="container-fluid p-4 ">
        <div class="row d-flex justify-content-center ">
            <div class="col-12 col-md-12 col-lg-8 col-xl-8">
                <div class="card mb-3 shadow border-0 border rounded-4 ">
                    <div class="row g-0" style="height:500px;">
                        <div class="col-12 col-md-12 col-lg-6 col-xl-6 align-self-center">
                            <div class="card-body p-0 my-2 mx-2 ">
                                <div class="container-fluid">
                                    <img src="{{URL('assets/logo_red.png')}}" class="img-fluid  rounded-4" width="60" height="60">
                                    <h5 class="card-title fw-bold my-2 "> บริษัทโกลด์พลัสจำกัด</h5>
                                    <hr class="w-25">
                                    <div class="row row-cols-2 d-flex justify-content-start">
                                        <div class="col-1  m-0 p-0 d-flex justify-content-end"><img class="me-2" width="25" height="25" src="https://cdn-icons-png.flaticon.com/512/355/355980.png"></div>
                                        <div class="col-11  m-0 p-0">{{ $dataAbout->about_address }}</div>
                                        <div class="col-1 mt-1 m-0 p-0 d-flex justify-content-end"><img class="me-2" width="25" height="25" src="https://cdn-icons-png.flaticon.com/512/5585/5585856.png"></div>
                                        <div class="col-11 mt-1 m-0 p-0">{{ $dataAbout->about_tel }}</div>
                                        <div class="col-1 mt-1 m-0 p-0 d-flex justify-content-end"><img class="me-2" width="25" height="25" src="https://cdn-icons-png.flaticon.com/512/6806/6806987.png"></div>
                                        <div class="col-11 mt-1 m-0 p-0">{{ $dataAbout->about_email}}</div>
                                    </div>
                                    <p class="fw-bold mt-2 mb-1">ติดตามเรา</p>
                                    <p>
                                        <span> <img width="35" height="35" src="https://cdn-icons-png.flaticon.com/512/733/733547.png"></span>
                                        <span> <img width="35" height="35" src="https://cdn-icons-png.flaticon.com/512/3536/3536785.png"></span>
                                        <span><img width="35" height="35" src="https://cdn-icons-png.flaticon.com/512/2111/2111463.png"></span>
                                        <span> <img width="35" height="35" src="https://cdn-icons-png.flaticon.com/512/3536/3536424.png"></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d239.1882419788288!2d102.85224008666178!3d16.424223456400732!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31228b7665964cfd%3A0xbdcd1af419ac6683!2sEnsure%20board%20game%26Library%20Cafe!5e0!3m2!1sth!2sth!4v1674530339088!5m2!1sth!2sth" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-100 h-100 img-fluid rounded-end"></iframe>
                        </div>

                    </div>
                </div>
                <!-- <div class="card rounded-4">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-6 col-lg-6 col-xl-6 ">
                            <img src="{{URL('assets/logo_red.png')}}" class="img-fluid" width="50" height="50">
                            <p>บริษัทโกลด์พลัสจำกัด</p>
                            <hr>
                            <p>บริษัทโกลด์พลัสจำกัด สำนักงานใหญ่ <br>
                                111/11 ต.ตำบล อ.อำเภอ จ.จังหวัด 12345
                            </p>
                            <p>01 1111 1110</p>
                            <p>gold_plus@gmail.ac.th</p>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d239.1882419788288!2d102.85224008666178!3d16.424223456400732!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31228b7665964cfd%3A0xbdcd1af419ac6683!2sEnsure%20board%20game%26Library%20Cafe!5e0!3m2!1sth!2sth!4v1674530339088!5m2!1sth!2sth" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-100 border-2 border rounded-4"></iframe>
                        </div>
                    </div>

                </div> -->
            </div>


        </div>
    </div>

</body>

</html>
