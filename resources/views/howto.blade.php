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
    <style>
        .container li {
            color: #B0120A;
        }
    </style>

</head>

<body>
    @include('nav')
    <div class="container d-flex justify-content-center">
        <div class="col-12 col-md-12 col-lg-9 col-xl-9 mt-4 p-2">
            <div class="card  border border-0 shadow  rounded-4 ">
                <div class="card-header " style="background-color: #B0120A;">
                    <p class="text-center text-white fs-5 m-1 fw-bold">ข้อมูลผู้ใช้</p>
                </div>
                <div class="card-body p-0">

                    <div class="container p-3">
                        <div>
                            <ul>
                                <p class=" fw-bold mt-3" style="color: #B0120A;">ขั้นตอนที่ 1 การเปิดบัญชีออมทอง</p>
                                <li class="ms-4 ">กรอกข้อมูลส่วนตัว</li>
                                <p class="ms-5 ">อัพโหลดภาพบัตรประจำตัวประชาชน และภาพถ่ายตนเองถ่ายกับบัตรประจำตัวประชาชน</p>
                                <li class="ms-4 ">กรอกข้อมูลที่อยู่อาศัยปัจจุบัน </li>
                                <li class="ms-4">กรอกข้อมูลบัญชีธนาคาร </li>
                                <p class="ms-5">อัพโหลดภาพหน้าสมุดบัญชีธนาคารที่ต้องการใช้ออมทอง</p>
                                <li class="ms-4">ยืนยันอีเมล</li>
                                <p class="ms-5">เมื่อกรอกข้อมูลเสร็จแล้วกด “เปิดบัญชี” แล้วให้กดยืนยันตัวตนในอีเมลที่ท่านกรอกข้อมูล
                                    เมื่อกดยืนยันอีเมลแล้วก็พร้อมเข้าสู่ระบบ</p>
                            </ul>
                        </div>
                        <div class="d-flex justify-content-center">
                            <img src="{{URL('assets/idcard.png')}}" class="img-fluid">
                        </div>
                        <div>
                            <ul>
                                <p class=" fw-bold mt-3" style="color: #B0120A;">ขั้นตอนที่ 2 เริ่มออมทองยังไง ?</p>
                                <li class="ms-4 ">ฝากเงินเข้าบัญชีออมทอง</li>
                                <p class="ms-5">โดยการคลิก “ฝากเงิน” เมื่อเข้าไปยังหน้าฝากเงิน ให้โอนเงินเข้าบัญชี Gold Plus และ
                                    ระบุจำนวนเงินที่ลูกค้าฝากเข้าบัญชี และอัพโหลดหลักฐานการโอนเงิน และกดยืนยันรายการ</p>
                                <li class="ms-4 ">การแลกโทเคน</li>
                                <p class="ms-5">โดยการคลิก “แลกโทเคน” เมื่อเข้าไปยังหน้าแลกโทเคน ให้กรอกจำนวนเงินที่ต้องการ
                                    จากนั้นระบบจะทำการแปลงจำนวนเงินที่กรอกเป็นจำนวนโทเคน และกดยืนยันรายการ</p>
                                <li class="ms-4 ">การแลกทอง</li>
                                <p class="ms-5">โดยการคลิก “แลกทอง” เมื่อเข้าไปยังหน้าแลกทอง ให้เลือกน้ำหนักทอง จากนั้นระบบ
                                    จะคำนวณว่าต้องใช้จำนวนโทเคนเท่าไหร่ และกดยืนยันรายการ </p>
                                <li class="ms-4">ถอนเงิน</li>
                                <p class="ms-5">โดยการคลิก “ถอนเงิน” เมื่อเข้าไปยังหน้าถอนเงิน ให้กรอกจำนวนเงินที่ต้องการถอน
                                    ขั้นต่ำ 100 บาท จากนั้นกดยืนยันรายการ</p>
                            </ul>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>



</body>

</html>
