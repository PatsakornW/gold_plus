<!DOCTYPE html>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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

    <form method="POST" action="{{ route('addtopup') }}" enctype="multipart/form-data">
        @csrf
        <div class=" container d-flex justify-content-center">
            <div class="col-12 col-md-12 col-lg-10 col-xl-6  p-2 ">
                <div class=" card  border border-0 shadow  rounded-4 ">
                    <div class="card-header" style="background-color: #B0120A;">
                        <p class=" text-center text-white fs-5 m-1 fw-bold ">ฝากเงิน</p>
                    </div>

                    <div class="card-body">
                        <div class="container">
                            <div>
                                <span class="badge text-white fs-6" style="background-color: #B0120A;">ขั้นตอนที่ 1</span>
                                <label class="fs-6">บัญชีธนาคาร GOLDPLUS</label>
                            </div>
                            <div class="card mt-3 mb-3 shadow-sm border border-0 bg-light">
                                <div class="row g-0  align-items-center flex-column flex-md-row flex-lg-row flex-xl-row">
                                    <div class="col-6 col-md-3 col-lg-3 col-xl-3  ">
                                        <img src="{{URL('assets/krungthai.jpg')}}" class=" border border-0 p-1 img-fluid  rounded-4">
                                    </div>
                                    <div class=" col-12 col-md-6 col-lg-6 col-xl-6 ">
                                        <div class="container ">
                                            <div class="row mt-3">
                                                <div>
                                                    <p class=" badge text-bg-secondary">เลขบัญชี</p>
                                                    <label>{{ $dataAbout->idbank }}</label>
                                                </div>
                                                <div>
                                                    <p class=" badge text-bg-secondary">ชื่อบัญชี</p>
                                                    <label>{{ $dataAbout->namebank }}</label>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-12 col-md-3 col-lg-3 col-xl-3  d-flex justify-content-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" fill="currentColor" class="bi bi-qr-code img-fluid " viewBox="0 0 16 16">
                                            <path d="M2 2h2v2H2V2Z" />
                                            <path d="M6 0v6H0V0h6ZM5 1H1v4h4V1ZM4 12H2v2h2v-2Z" />
                                            <path d="M6 10v6H0v-6h6Zm-5 1v4h4v-4H1Zm11-9h2v2h-2V2Z" />
                                            <path d="M10 0v6h6V0h-6Zm5 1v4h-4V1h4ZM8 1V0h1v2H8v2H7V1h1Zm0 5V4h1v2H8ZM6 8V7h1V6h1v2h1V7h5v1h-4v1H7V8H6Zm0 0v1H2V8H1v1H0V7h3v1h3Zm10 1h-1V7h1v2Zm-1 0h-1v2h2v-1h-1V9Zm-4 0h2v1h-1v1h-1V9Zm2 3v-1h-1v1h-1v1H9v1h3v-2h1Zm0 0h3v1h-2v1h-1v-2Zm-4-1v1h1v-2H7v1h2Z" />
                                            <path d="M7 12h1v3h4v1H7v-4Zm9 2v2h-3v-1h2v-1h1Z" />
                                        </svg>

                                    </div>
                                </div>
                            </div>

                            <div class="mt-3 mb-3">
                                <span class="badge text-white fs-6" style="background-color: #B0120A;">ขั้นตอนที่ 2</span>
                                <label class="fs-6">โอนเงินเพื่อเติมเครดิต</label>
                            </div>
                            <div class="mb-3 mt-3">
                                <span class="badge text-white fs-6" style="background-color: #B0120A;">ขั้นตอนที่ 3</span>
                                <label class="fs-6">แจ้งรายละเอียดการโอนเงิน</label>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-6  mb-2">
                                    <input type="number" class="form-control-sm form-control  rounded-3" placeholder="จำนวนเงิน" name="amount_topup">
                                    @error('amount_topup')
                                    <div class="my-2"><span class="text-danger">{{$message}}</span></div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row d-flex justify-content-center">
                                <div class="col-6 mb-2">
                                    <input type="file" class="form-control-sm form-control  rounded-3" id="formFile" aria-label="Upload" name="slip_file">
                                    @error('slip_file')
                                    <div class="my-2"><span class="text-danger">{{$message}}</span></div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="confirm btn fs-5 fw-bold card-footer">
                        ยืนยันการฝากเงิน
                    </button>
                </div>

            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modal_topup" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered " style="width: fit-content; ">
                <div class="modal-content text-center">
                    <div class="modal-body">
                        @if (session('success'))
                        <div class="fw-bold text-success">
                            <p><i class="fa-solid fa-circle-check fa-4x"></i></p>
                            <p>{{ session('success') }}</p>
                        </div>
                        @endif
                        @if (session('error'))
                        <div class="fw-bold text-danger ">
                            <p><i class="fa-solid fa-circle-xmark fa-4x"></i></p>
                            <p>{{ session('error') }}</p>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <!-- Trigger modal -->
        @if (session('success'))
        <script>
            $(document).ready(function() {
                $('#modal_topup').modal('show');
            });
        </script>
        @endif
        @if (session('error'))
        <script>
            $(document).ready(function() {
                $('#modal_topup').modal('show');
            });
        </script>
        @endif
    </form>

</body>

</html>
