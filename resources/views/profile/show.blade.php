
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GOLDPLUS</title>
    <link rel="icon" type="image/x-icon" href="{{URL('assets/favicon.ico')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@300&family=Prompt:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL('css/style.css')}}">

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
    
    <div class="container d-flex justify-content-center">
        <div class="col-12 col-md-12 col-lg-10 col-xl-5 mt-4 p-2">
            <div class=" card  border border-0 shadow  rounded-4 ">
                <div class="card-header" style="background-color: #B0120A;">
                    <p class=" text-center text-white fs-5 m-1 fw-bold ">ข้อมูลผู้ใช้</p>
                </div>
                <div class="card-body  p-0">
                    <div class="container ">
                        <div class="text-center mt-3"> <img src="{{URL('assets\user.png')}}" width="125" height="125"></div>
                        <div class="d-flex align-self-start pt-2 fw-bold">
                            <p class="fw-bold" style="color: #B0120A;">ข้อมูลส่วนตัว</p>
                        </div>
                        <div class="row">
                            <div class="col-6 mb-2 ms-auto me-auto">
                                <label class="ms-2 form-label " style="font-size: 16px;">ชื่อ-นามสกุล</label>
                                <input type="text" class="form-control-sm form-control  rounded-3" placeholder="{{Auth::user()->name}}" name="name" disabled>
                            </div>
                            <div class="col-6 mb-2 ms-auto me-auto">
                                <label class="ms-2 form-label" style="font-size: 16px;">วันเดือนปีเกิด</label>
                                <input type="text" class="form-control-sm form-control  rounded-3" placeholder="{{Auth::user()->birthdate}}" name="birthdate" disabled>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 mb-2 ms-auto me-auto">
                                <label class="ms-2 form-label " style="font-size: 16px;">อีเมล</label>
                                <input type="text" class="form-control-sm form-control  rounded-3" placeholder="{{Auth::user()->email}}" name="email" disabled>
                            </div>
                            <div class="col-6 mb-2 ms-auto me-auto">
                                <label class="ms-2 form-label" style="font-size: 16px;">เบอร์โทร</label>
                                <input type="text" class="form-control-sm form-control  rounded-3" placeholder="{{Auth::user()->tel}}" name="tel" disabled>
                            </div>
                        </div>
                        <div class="mb-2">
                            <label class="ms-2 form-label " style="font-size: 16px;">ที่อยู่</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="{{Auth::user()->address}}" name="address" disabled ></textarea>
                        </div>
                        <div class="d-flex align-self-start pt-2 fw-bold">
                            <p class="fw-bold" style="color: #B0120A;">บัญชีธนาคาร</p>
                        </div>
                        <div class="row">
                            <div class="col-6 mb-2 ms-auto me-auto">
                                <label class="ms-2 form-label " style="font-size: 16px;">ธนาคาร</label>
                                <input type="text" class="form-control-sm form-control  rounded-3" placeholder="{{Auth::user()->name_bank}}" name="name_bank" disabled>
                            </div>
                            <div class="col-6 mb-2 ms-auto me-auto">
                                <label class="ms-2 form-label" style="font-size: 16px;">สาขา</label>
                                <input type="text" class="form-control-sm form-control  rounded-3" placeholder="{{Auth::user()->major_bank}}" name="major_bank" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6 mb-2">
                                <label class="ms-2 form-label " style="font-size: 16px;">เลขบัญชี</label>
                                <input type="text" class="form-control-sm form-control  rounded-3" placeholder="{{Auth::user()->idbank}}" name="idbank" disabled>
                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </div>

    </div>


</body>

</html>
