<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>金 GOLDPLUS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@300&family=Prompt:wght@200&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ URL('css/style.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</head>

<body>
    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf
        <section class="vh-100">
            <div class="container pt-2">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card  bg-white shadow-lg border-0 rounded-4">
                            <div class="card-body  text-center">
                                <div class="container">
                                    <img src="{{ URL('assets/logo.png') }}" width="75" height="75"
                                        class="rounded-circle shadow mb-2 ">
                                    <p class="fw-bold mb-3 " style="color: #B0120A;">เปิดบัญชี</p>
                                    <div class="flex-column ">
                                        <div class="d-flex align-self-start pt-2 fw-bold">
                                            <p class="fw-bold" style="color: #B0120A;">ข้อมูลส่วนตัว</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 mb-2 ms-auto me-auto">
                                                <input type="text" class="form-control-sm form-control  rounded-3"
                                                    placeholder="ชื่อ-นามสกุล" name="name">
                                                @error('name')
                                                    <div class="my-2"><span class="text-danger">{{ $message }}</span>
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="col-6 mb-2 ms-auto me-auto">
                                                <input type="date" class="form-control-sm form-control  rounded-3"
                                                    placeholder="วันเดือนปีเกิด" name="birthdate">
                                                @error('birthdate')
                                                    <div class="my-2"><span class="text-danger">{{ $message }}</span>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 mb-2 ms-auto me-auto">
                                                <input type="text" class="form-control-sm form-control  rounded-3"
                                                    placeholder="เลขบัตรประชาชน" name="idcard">
                                                @error('idcard')
                                                    <div class="my-2"><span class="text-danger">{{ $message }}</span>
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="col-6 mb-2 ms-auto me-auto">
                                                <input type="text" class="form-control-sm form-control  rounded-3"
                                                    placeholder="เบอร์โทรศัพท์" name="tel">
                                                @error('tel')
                                                    <div class="my-2"><span class="text-danger">{{ $message }}</span>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 mb-2 ms-auto me-auto">
                                                <input type="email" class="form-control-sm form-control  rounded-3"
                                                    placeholder="อีเมล (สำหรับเข้าสู่ระบบ)" name="email">
                                                @error('email')
                                                    <div class="my-2"><span class="text-danger">{{ $message }}</span>
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="col-6 mb-2 ">
                                                <input type="password" class="form-control-sm form-control  rounded-3"
                                                    placeholder="รหัสผ่าน (สำหรับเข้าสู่ระบบ)" name="password">
                                                @error('password')
                                                    <div class="my-2"><span class="text-danger">{{ $message }}</span>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row ">
                                            <div class="col-6 mb-2">
                                                <input type="password" class="form-control-sm form-control  rounded-3"
                                                    placeholder="ยืนยันรหัสผ่าน (สำหรับเข้าสู่ระบบ)"
                                                    name="password_confirmation">
                                                @error('password')
                                                    <div class="my-2"><span
                                                            class="text-danger">{{ $message }}</span>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mb-2">
                                            <label for="exampleFormControlInput1"
                                                class="ms-2 form-label  d-flex justify-content-start "
                                                style="font-size: 16px;">ภาพหน้าบัตรประชาชน</label>
                                            <input type="file" class="form-control form-control-sm" id="formFile"
                                                aria-label="Upload" name="img_idcard">
                                            @error('img_idcard')
                                                <div class="my-2"><span class="text-danger">{{ $message }}</span>
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="mb-2">
                                            <label for="exampleFormControlInput1"
                                                class="ms-2 form-label  d-flex justify-content-start "
                                                style="font-size: 16px;">ภาพถ่ายกับบัตรประชาชน</label>
                                            <input type="file" class="form-control form-control-sm" id="formFile"
                                                aria-label="Upload" name="img_selfieidcard">
                                            @error('img_selfieidcard')
                                                <div class="my-2"><span class="text-danger">{{ $message }}</span>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="d-flex align-self-start pt-2 fw-bold">
                                            <p class="fw-bold" style="color: #B0120A;">ที่อยู่ปัจจุบัน</p>
                                        </div>
                                        <div class="mb-2">
                                            <textarea class="form-control" rows="3" placeholder="รายละเอียดที่อยู่" name="address"></textarea>
                                        </div>
                                        <div class="d-flex align-self-start pt-2 fw-bold ">
                                            <p class="fw-bold" style="color: #B0120A;">บัญชีธนาคาร</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 mb-2 ms-auto me-auto">
                                                <select class="form-select form-select-sm"
                                                    aria-label="Default select example" name="name_bank">
                                                    <option selected>เลือกธนาคาร</option>
                                                    <option value="กรุงไทย">กรุงไทย</option>
                                                    <option value="กสิกร">กสิกร</option>
                                                    <option value="กรุงเทพ">กรุงเทพ</option>
                                                </select>
                                            </div>
                                            @error('name_bank')
                                                <div class="my-2"><span class="text-danger">{{ $message }}</span>
                                                </div>
                                            @enderror
                                            <div class="col-6 mb-2 ">
                                                <input type="text" class="form-control-sm form-control  rounded-3"
                                                    placeholder="สาขา" name="major_bank">
                                                @error('major_bank')
                                                    <div class="my-2"><span
                                                            class="text-danger">{{ $message }}</span></div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row ">
                                            <div class="col-6 mb-2 ms-auto me-auto align-self-end">
                                                <input type="text" class="form-control-sm form-control  rounded-3"
                                                    placeholder="เลขบัญชี" name="idbank">
                                                @error('idbank')
                                                    <div class="my-2"><span
                                                            class="text-danger">{{ $message }}</span></div>
                                                @enderror
                                            </div>
                                            <div class="col-6 mb-2 ms-auto me-auto">
                                                <label for="exampleFormControlInput1"
                                                    class="text-dark form-label  d-flex justify-content-start"
                                                    style="font-size: 16px;">รูปหน้าสมุด
                                                    บัญชีธนาคาร</label>
                                                <input type="file" class="form-control form-control-sm"
                                                    id="formFile" aria-label="Upload" name="img_bookbank">
                                                @error('img_bookbank')
                                                    <div class="my-2"><span
                                                            class="text-danger">{{ $message }}</span></div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <button id="regis" class="fw-bold btn  rounded-3 mt-3" style="background-color: #B0120A;"
                                        data-bs-toggle="modal" data-bs-target="#alertregis">
                                        <a class="text-white" style="text-decoration: none;">เปิดบัญชี</a>
                                    </button>

                                    <!-- <div class="modal fade" id="alertregis" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered ">
                                            <div class="modal-content">
                                                <div class="modal-body text-dark">
                                                    <p class="text-dark">เปิดบัญชีสำเร็จ กรุณาเข้าสู่ระบบ</p>
                                                    <a class="fw-bold btn btn-light text-white border-0 rounded-3" type="submit" value="บันทึก" style="background-color: #04d733;">ตกลง</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>

    <!--  pdpa -->
    <div class="modal fade " id="pdpa" tabindex="-1" aria-hidden="true" data-bs-backdrop="static">
        <div class="modal-dialog  modal-dialog-centered ">
            <div class="modal-content rounded-4">

                <div class="modal-header m-0 p-1" style="background-color:#B0120A;">
                    <div class="w-100 d-flex justify-content-center ">
                        <h5 class="text-white fw-bold modal-title ">
                            นโยบายความเป็นส่วนตัว</h5>
                    </div>
                </div>
                <div class="modal-body text-dark">
                    <div class="container">
                        <p>บริษัท Gold Plus จำกัด
                            ตระหนักถึงความสำคัญของข้อมูลส่วนบุคคลและความเป็นส่วนตัวของท่าน
                            บริษัทในฐานะผู้ควบคุมข้อมูลส่วนบุคคลของท่าน
                            จึงได้จัดทำนโยบายความเป็นส่วนตัวนี้ขึ้น
                            เพื่อกำหนดวิธีการปฏิบัติต่อข้อมูลส่วนบุคคลของท่าน
                            ไม่ว่าจะเป็น การเก็บรวบรวม การใช้ การเปิดเผย
                            การประมวลผลข้อมูล
                            และการปกป้องซึ่งข้อมูลส่วนบุคคลที่ท่านให้กับบริษัทในระหว่างเยี่ยมชม
                            เว็บไซต์ www.goldplus.co.th ของบริษัท
                            หรือรับบริการจากบริษัทช่องทางอื่นใดไม่ว่าจะออนไลน์หรือออฟไลน์
                            รวมถึงการติดต่อสื่อสารใดกับบริษัท
                            นโยบายความเป็นส่วนตัวนี้ครอบคลุมถึงข้อมูลส่วนบุคคล
                            ซึ่งเป็นข้อมูลที่สามารถระบุถึงตัวท่านได้
                            ไม่ว่าทางตรงหรือทางอ้อม
                            และไม่ว่าจะได้รับจากท่านโดยตรงหรือเป็นการส่งต่อมาจากบุคคลที่สามก็ตาม
                            ซึ่งนโยบายนี้ถือเป็นส่วนหนึ่งของข้อกำหนดและเงื่อนไขสำหรับการให้บริการเว็บไซต์ของบริษัท
                            การเข้ารับบริการ รวมทั้งการติดต่อสื่อสารของท่าน
                            เพื่อแจ้งให้ท่านในฐานะเจ้าของข้อมูลส่วนบุคคลทราบถึงวัตถุประสงค์และรายละเอียดของการเก็บรวบรวม
                            ใช้ และ/หรือ เปิดเผยข้อมูลส่วนบุคคล ตลอดจนสิทธิต่างๆ
                            ของลูกค้าตามกฎหมาย</p>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" id="checkbox">
                        <label class="form-check-label">
                            <b>ยอมรับเงื่อนไข</b>
                        </label>
                    </div>

                    <div class="d-grid  col-8 mx-auto mt-2">
                        <button
                            class="btn w-100 d-flex justify-content-center fw-bold  text-white border border-0 rounded-3"
                            style="background-color:#B0120A;" id="myButton" disabled>ตกลง</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
