<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GOLDPLUS</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{asset('js/script.js')}}"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
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

    <div class=" d-flex justify-content-center">
        <div class="col-11 col-md-7 col-lg-7 col-xl-7">
            <div class="card rounded-4 ">
                <div class="card-header" style="background-color: #B0120A;">
                    <p class="text-center text-white fs-5  m-0 p-0  fw-bold">รายการรออนุมัติ</p>
                </div>
                <div class="card-body">
                    <!-- ตาราง -->
                    <div class="table-responsive">
                        <table class="table table-bordered ">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col">ลำดับ</th>
                                    <th scope="col">รายการ</th>
                                    <th scope="col">วันที่</th>
                                    <th scope="col">จำนวน</th>
                                    <th scope="col">สถานะ</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php($counter = ($data->currentPage() - 1) * $data->perPage())
                                @foreach ($data as $value)
                                <tr>
                                    <td>{{ ++$counter }}</td>
                                    <td class="{{ $value->type == 'ฝาก' ? 'text-success' : ($value->type == 'แลก' ? 'text-warning' : 'text-danger') }} fw-bold">{{ $value->type }}</td>
                                    <td>{{ $value->created_at }}</td>
                                    <td>{{ $value->total }}</td>
                                    <td class="{{ $value->status == 'อนุมัติ' ? 'text-success' : ($value->status == 'รออนุมัติ' ? 'text-info' : 'text-danger') }} fw-bold">{{ $value->status }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="row">
                            {{ $data->links() }}
                        </div>

                        <caption>
                            <b style="font-size: 16px;" class="fw-bold text-danger">หมายเหตุ :</b><span style="font-size: 16px;">ในกรณีที่รายการแสดงว่า ไม่สำเร็จ ติดต่อสอบถามแอดมินได้ที่ {{$dataAbout->about_tel}} <a href="{{route('contact')}}">หรือช่องทางอื่นๆ</a></span>
                        </caption>
                    </div>
                    <!-- ตาราง -->
                </div>
            </div>
        </div>
    </div>
</body>

</html>
