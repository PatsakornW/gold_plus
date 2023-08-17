<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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
    <!-- รูปสไลด์ เริ่ม-->
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active ">
                <img src="{{URL('assets/13.png')}} " class="img-fluid w-100" data-bs-interval="5000">
            </div>
            <div class="carousel-item">
                <img src="{{URL('assets/12.png')}}" class="img-fluid w-100" data-bs-interval="5000">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- รูปสไลด์ จบ -->


    <!-- ปุ่มเลื่อนหน้า เริ่ม -->
    <div class="fixed-bottom d-flex flex-row-reverse p-3">

        <a class="btn border-0 rounded-circle opacity-50" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="  text-warning  bi bi-arrow-up-circle-fill " viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
            </svg>
        </a>
    </div>
    <!-- ปุ่มเลื่อนหน้า จบ -->


    <div class="scrollspy-example container-fluid mt-3 " data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" tabindex="0">

        <!-- คำแนะนำการออมทอง -->
        <div class=" d-flex justify-content-center" id="scrollspyHeading1">
            <div class="col-sm-12  col-md-12 col-lg-6 text-center ">
                <h5 class="card-title fw-bold mt-3 mb-3">ออมทองคืออะไร ?</h5>
                <p class="card-text"><b>การออมทอง </b> คือ การซื้อทองคำในอีกรูปแบบหนึ่ง เป็นการทยอยสะสมทองคำด้วยเงินทุนก้อนน้อย ๆ เพียงหลักร้อยก็สามารถเป็นเจ้าของทองคำ โดยไม่ต้องใช้เงินก้อนใหญ่มาซื้อทอง</p>
                <p class="card-text"><b>การออมทอง</b> ถือเป็นวิธีเก็บเงินหรือการออมเงินอีกวิธีหนึ่ง อีกทั้งยังเป็นการออมเงินระยะยาวเพื่ออนาคตได้อีกด้วย เพียงแต่'สิ่ง'ที่เก็บไว้ในระบบ จะถูกเก็บออมไว้ในรูปแบบของทองคำออนไลน์ ซึ่งทองออนไลน์ที่ว่านี้สามารถถอนทองคำแท่งออกมาจากระบบได้อีกด้วย</p>
                <p class="card-text"><b>ออมทอง 2023 เลือกออมทองกับ GOLD PLUS ลงทุนน้อย ถอนง่าย สะดวกสบาย ออมทองได้ทุกที่ ตลอด 24 ชั่วโมง ราคาเรียลไทม์ </b></p>
                <a class=" btn  text-white fw-bold" id="btnsavegold" href="{{route('menu')}}
                " style="background-color: #B0120A;">ออมทอง</a>
            </div>
        </div>

        <div class="mt-5 d-flex justify-content-center">
            <div class="w-75">
                <hr>
            </div>
        </div>

        <!-- ราคาทองวันนี้ -->
        <div class="d-flex justify-content-center  fw-bold ">
            <div class="p-2 fw-semibold fs-4">
                <p>ราคาประจำวันที่ | <b id="date"></b></p>
            </div>
        </div>

        <!-- card ราคาทอง -->
        <div class="d-flex justify-content-center">
            <div class="col-sm-12 col-lg-4 col-md-10 col-xl-4 card border-0 shadow  rounded-4">
                <div class="card-header " style="background-color: #B0120A;">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-end">
                            <p class="text-white fs-5  m-1 fw-bold "> ทองคำแท่ง | ความบริสุทธิ์ทองคำ 96.5 % </p> <span class="fs-4" id="icon"></span>
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

        <!-- เส้นแบ่ง card ราคาทอง กับ เนื้อหาข้างล่าง -->
        <div class="mt-5 d-flex justify-content-center">
            <div class="w-75">
                <hr>
            </div>
        </div>




        <!-- ออมทองกับ goldplus  -->
        <div class="d-flex justify-content-center">
            <p class="fs-5 fw-bold">ออมทองกับ GOLD PLUS ดีอย่างไร ?</p>
        </div>

        <div class="d-flex justify-content-center">
            <div class="container text-center">
                <div class="d-flex  justify-content-around">
                    <div class="rounded-pill border-4 border border-danger shadow"><img class="p-2" src="{{URL('assets/no.png')}}" width="75" height="75"></div>
                    <div class="rounded-pill border-4 border border-danger shadow"><img class="p-2" src="{{URL('assets/piggy-bank.png')}}" width="75" height="75"></div>
                    <div class="rounded-pill border-4 border border-danger shadow"><img class="p-2" src="{{URL('assets/delivery.png')}}" width="75" height="75"></div>
                </div>
                <div class="d-flex  mt-2">
                    <p class="col "> ไม่มีระยะเวลาออมผูกมัด</p>
                    <p class="col ">ออมทองไม่มีขั้นต่ำ</p>
                    <p class="col "> ออมทองได้ตลอด 24 ชั่วโมง</p>
                </div>
            </div>
        </div>
        <!-- {{URL('assets/goldshop.jpeg')}} -->
        <div class="container-fluid  p-0 mt-3">
            <div class="row " style="background-color: #B0120A;">
                <div class="col-sm-5  bg-dark p-0">
                    <img src="{{URL('assets/goldshop.jpeg')}}" class="img-fluid w-full">
                </div>
                <div class="col-sm-7 text-center text-white align-self-center ">
                    <p class="fs-4 mt-3 fw-bold">GOLDPLUS</p>
                    <p class="fw-lighter">โกลด์พลัส ผู้นำด้านการลงทุนทองคำ ดำเนินธุรกิจผู้ผลิต นำเข้า-ส่งออกทองคำรายใหญ่ระดับประเทศ และ ให้บริการซื้อ-ขายทองคำแท่งเเก่ร้านทองในประเทศ
                        ไปจนถึงจำหน่ายให้ลูกค้าโดยตรง ครอบคลุมมาตรฐานจากหน่วยงาน "ในระดับประเทศ" ที่น่าเชื่อถือ รวมถึงพัฒนายกระดับการลงทุนทองคำให้ง่าย สะดวกกับนักลงทุน สามารถทำธุรกรรมซื้อ-ขายออนไลน์ผ่านมือถือได้ตลอด 24 ชั่วโมง เลือกลงทุนได้ทั้งทองคำแท่ง 99.99% และ 96.5% ดำเนินธุรกิจมากว่า 30 ปี จนได้รับการยอมรับ เป็นอย่างมากจากทั้งในประเทศเเละระดับภูมิภาค </p>
                </div>

            </div>
        </div>




        <div class="container-fluid p-0 mt-5">
            <div class="row">
                <footer class="text-center text-lg-start text-white p-0 mt-auto" style="background-color: #B0120A;">
                    <!-- Grid container -->
                    <div class="container p-3 ">
                        <!--Grid row-->
                        <div class="row  justify-content-between ">
                            <!--Grid column-->
                            <div class="col-lg-3 col-md-6 mb-4 mb-md-0 ">
                                <p class=" mb-4 fw-bold fs-4">ติดต่อเรา</p>

                                <ul class="list-unstyled">
                                    <li>
                                        <p style="font-size:14px"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-geo-alt-fill text-white" viewBox="0 0 16 16">
                                                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                            </svg>
                                            {{ $dataAbout->about_address }}</p>
                                    </li>
                                    <li>
                                        <p style="font-size:14px"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-telephone-fill text-white" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                            </svg> {{ $dataAbout->about_tel }}</p>
                                    </li>
                                    <li>
                                        <p style="font-size:14px"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-envelope-fill text-white" viewBox="0 0 16 16">
                                                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                                            </svg> {{ $dataAbout->about_email }}</p>
                                    </li>
                                    <li>
                                        <p style="font-size:14px"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-line text-white" viewBox="0 0 16 16">
                                                <path d="M8 0c4.411 0 8 2.912 8 6.492 0 1.433-.555 2.723-1.715 3.994-1.678 1.932-5.431 4.285-6.285 4.645-.83.35-.734-.197-.696-.413l.003-.018.114-.685c.027-.204.055-.521-.026-.723-.09-.223-.444-.339-.704-.395C2.846 12.39 0 9.701 0 6.492 0 2.912 3.59 0 8 0ZM5.022 7.686H3.497V4.918a.156.156 0 0 0-.155-.156H2.78a.156.156 0 0 0-.156.156v3.486c0 .041.017.08.044.107v.001l.002.002.002.002a.154.154 0 0 0 .108.043h2.242c.086 0 .155-.07.155-.156v-.56a.156.156 0 0 0-.155-.157Zm.791-2.924a.156.156 0 0 0-.156.156v3.486c0 .086.07.155.156.155h.562c.086 0 .155-.07.155-.155V4.918a.156.156 0 0 0-.155-.156h-.562Zm3.863 0a.156.156 0 0 0-.156.156v2.07L7.923 4.832a.17.17 0 0 0-.013-.015v-.001a.139.139 0 0 0-.01-.01l-.003-.003a.092.092 0 0 0-.011-.009h-.001L7.88 4.79l-.003-.002a.029.029 0 0 0-.005-.003l-.008-.005h-.002l-.003-.002-.01-.004-.004-.002a.093.093 0 0 0-.01-.003h-.002l-.003-.001-.009-.002h-.006l-.003-.001h-.004l-.002-.001h-.574a.156.156 0 0 0-.156.155v3.486c0 .086.07.155.156.155h.56c.087 0 .157-.07.157-.155v-2.07l1.6 2.16a.154.154 0 0 0 .039.038l.001.001.01.006.004.002a.066.066 0 0 0 .008.004l.007.003.005.002a.168.168 0 0 0 .01.003h.003a.155.155 0 0 0 .04.006h.56c.087 0 .157-.07.157-.155V4.918a.156.156 0 0 0-.156-.156h-.561Zm3.815.717v-.56a.156.156 0 0 0-.155-.157h-2.242a.155.155 0 0 0-.108.044h-.001l-.001.002-.002.003a.155.155 0 0 0-.044.107v3.486c0 .041.017.08.044.107l.002.003.002.002a.155.155 0 0 0 .108.043h2.242c.086 0 .155-.07.155-.156v-.56a.156.156 0 0 0-.155-.157H11.81v-.589h1.525c.086 0 .155-.07.155-.156v-.56a.156.156 0 0 0-.155-.157H11.81v-.589h1.525c.086 0 .155-.07.155-.156Z" />
                                            </svg> @goldplus</p>
                                    </li>
                                </ul>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-lg-3 col-md-6">

                                <div class=" d-flex align-items-center  justify-content-center  mt-5 mx-auto">
                                    <img src="{{URL('assets/logo.png')}}" height="90" alt="" loading="lazy" />
                                </div>
                            </div>



                        </div>
                        <!--Grid row-->
                    </div>
                    <!-- Grid container -->

                    <!-- Copyright -->
                    <div class="text-center" style="background-color: rgba(0, 0, 0, 0.2); font-size:14px;">
                        © 2023 Copyright :
                        <a class="text-white" href="/" style="text-decoration: none; ">GOLDPLUS</a>
                    </div>
                    <!-- Copyright -->
                </footer>
            </div>



        </div>
        <!-- End of .container -->



</body>

</html>
