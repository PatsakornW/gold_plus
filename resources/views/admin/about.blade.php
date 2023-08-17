<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GOLDPLUS</title>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <!-- Theme style -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('AdminLTE-3.2.0/dist/css/adminlte.min.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL('css/style.css') }}">
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>


<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include('admin.navbar')

        <!-- Main Sidebar Container -->
        @include('admin.sidebar')
        <div class="content-wrapper">
            <!-- Main content -->
            <form action="{{ route('about_update') }}" method="POST">
            @csrf
            <div class="content pt-3">
                <div class="container-fluid">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="row d-flex justify-content-center">
                            <div class="col-12 col-md-10 col-lg-7 col-xl-7">
                                <div class="card rounded-4 ">
                                    <div class="card-header" style="background-color: #B0120A;">
                                        <p class="text-center text-white fs-5  m-0 p-0  fw-bold">แก้ไขข้อมูล</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="container ">
                                            <div class="d-flex align-self-start pt-2 fw-bold">
                                                <p class="fw-bold" style="color: #B0120A;">ข้อมูลราคาโทเคน</p>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-6 mb-2">
                                                    <label class="ms-2 form-label " style="font-size: 16px;">ราคาเครดิตต่อโทเคน</label>
                                                    <input type="number" class="form-control-sm form-control  rounded-3" value="{{ $dataAbout->credit_per_token }}" name="credit_per_token">
                                                </div>
                                                <div class="col-6 mb-2">
                                                    <label class="ms-2 form-label " style="font-size: 16px;">ราคาโทเคนต่อทอง</label>
                                                    <input type="number" class="form-control-sm form-control  rounded-3" value="{{ $dataAbout->token_per_gold }}" name="token_per_gold">
                                                </div>
                                            </div>
                                            <div class="d-flex align-self-start pt-2 fw-bold">
                                                <p class="fw-bold" style="color: #B0120A;">ข้อมูลติดต่อ</p>
                                            </div>
                                            <div class="mb-2">
                                                <label class="ms-2 form-label " style="font-size: 16px;">ที่อยู่</label>
                                                <textarea class="form-control rounded-3" id="exampleFormControlTextarea1" rows="3" name="edit_about_address" >{{ $dataAbout->about_address }}</textarea>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 mb-2 ms-auto me-auto">
                                                    <label class="ms-2 form-label " style="font-size: 16px;">เบอร์โทร</label>
                                                    <input type="tel" class="form-control-sm form-control  rounded-3"  value="{{ $dataAbout->about_tel }}" name="edit_about_tel">
                                                </div>
                                                <div class="col-6 mb-2 ms-auto me-auto">
                                                    <label class="ms-2 form-label" style="font-size: 16px;">อีเมล</label>
                                                    <input type="email" class="form-control-sm form-control  rounded-3" value="{{ $dataAbout->about_email }}" name="edit_about_email">
                                                </div>
                                            </div>
                                            <div class="d-flex align-self-start pt-2 fw-bold">
                                                <p class="fw-bold" style="color: #B0120A;">ข้อมูลธนาคาร</p>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-6 mb-2">
                                                    <label class="ms-2 form-label " style="font-size: 16px;">เลขบัญชี</label>
                                                    <input type="number" class="form-control-sm form-control  rounded-3" value="{{ $dataAbout->idbank }}" name="idbank">
                                                </div>
                                                <div class="col-6 mb-2">
                                                    <label class="ms-2 form-label " style="font-size: 16px;">ชื่อบัญชี</label>
                                                    <input type="text" class="form-control-sm form-control  rounded-3" value="{{ $dataAbout->namebank }}" name="namebank">
                                                </div>

                                            </div>
                                            <div class="d-flex justify-content-center mt-3">
                                                <button class="btn btn-danger border-0 border rounded-3">บันทึก</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->

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

        </div>
        <!-- /.content-wrapper -->
    </div>
    <!-- ./wrapper -->

@include('admin.init.footer')
