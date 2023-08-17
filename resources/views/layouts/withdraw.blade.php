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

    <form method="POST" action="{{ route('withdraws') }}">
        @csrf
        <div class="container d-flex justify-content-center">
            <div class="col-12 col-md-12 col-lg-10 col-xl-5  p-2 ">

                <div class=" card  border border-0 shadow  rounded-4 ">
                    <div class="card-header" style="background-color: #B0120A;">
                        <p class=" text-center text-white fs-5 m-1 fw-bold ">ถอนเงิน</p>
                    </div>

                    <div class="card-body  p-0">
                        <div class="container ">
                            <div class="row mt-2">
                                <p class="d-flex justify-content-center">ยอดเงินที่สามารถถอนได้ : {{Auth::user()->balance_credit}}</p>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-6 ">
                                    <input type="number" class=" form-control-sm form-control  rounded-3" placeholder="จำนวนเงินที่ต้องการถอน" name="withdraw_amount">
                                </div>
                            </div>
                            <div class="row row-cols-2 d-flex justify-content-center mt-3 ">
                                <div class="col-6 d-flex justify-content-end ">โอนเข้าบัญชี : </div>
                                <div class="col">{{Auth::user()->name}}</div>
                                <div class="col-6  d-flex justify-content-end">เลขบัญชี : </div>
                                <div class="col ">{{Auth::user()->idbank}}</div>
                                <div class="col-6   d-flex justify-content-end">ธนาคาร :</div>
                                <div class="col ">{{Auth::user()->name_bank}}</div>
                            </div>
                            <div class="row d-flex justify-content-start  ">
                                <p class="text-muted mt-4 mb-1" style="font-size: 16px;"> หมายเหตุ : สามารถถอนได้ขั้นต่ำ 100</p>
                            </div>
                        </div>
                    </div>
                    <button class="btn fs-5 fw-bold card-footer confirm">
                        <a type="submit" class="nav-link">ยืนยันการถอนเงิน</a>
                    </button>
                </div>
            </div>
        </div>
    </form>


        <!-- Modal -->
        <div class="modal fade" id="modal" tabindex="-1" aria-hidden="true">
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
                $('#modal').modal('show');
            });
        </script>
        @endif
        @if (session('error'))
        <script>
            $(document).ready(function() {
                $('#modal').modal('show');
            });
        </script>
        @endif
    </form>

</body>

</html>
