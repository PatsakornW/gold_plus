<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GOLDPLUS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@300&family=Prompt:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL('css/style.css')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{asset('js/script.js')}}"></script>
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

    <div class="container text-center ">
        <div class="d-flex flex-wrap ">
            <!-- การ์ดราคาทอง -->
            <div class="col-12 col-md-12 col-lg-6 col-xl-6 p-2 align-self-center  order-2 order-md-2 order-lg-0">
                <div>
                    <p class="fw-bold fs-4">ราคาประจำวันที่ | <b id="date"></b></p>

                </div>
                <div class="card border border-0 shadow  rounded-4">
                    <div class="card-header " style="background-color: #B0120A;">
                        <div class="row ">
                            <div class="col">
                                <p class="text-white fs-5  m-1 fw-bold "> ทองคำแท่ง | ความบริสุทธิ์ทองคำ 96.5 % <span class=" fs-4" id="icon"></span></p>
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
            <!-- การ์ดราคาทอง -->

            <!-- การ์ดแลกทอง  -->
            <form name="TradeGold" id="TradeGold" action="{{route('trade_gold')}}" method="post" class="col-12 col-md-12 col-lg-6 col-xl-6  mt-4 p-2  order-0 order-md-0 order-lg-1">
                @csrf
                <div class="containerd d-flex justify-content-center">
                    <div class=" card border border-0 shadow rounded-4" style="background-color: #B0120A; width:fit-content">
                        <div class="card-header bg-white">
                            <p class="text-center  fs-5  m-1 fw-bold ">แลกทอง</p>
                        </div>

                        <div class="card-body ">
                            <div class="container text-center text-white">
                                <div>
                                    <p class="text-white d-flex justify-content-start fw-bold">จำนวนทอง</p>
                                </div>
                                <div class="d-flex fs-5  align-items-center ">
                                    <p class="col "> <img src="{{URL('assets/gold_ic1.png')}}" width="50" height="50 " class="me-4">ทอง</p>
                                    <p class="col ">
                                        <select class=" rounded-3 form-select form-select-sm border border-0" aria-label="Default select example" name="selectGold" id="selectGold">
                                            <option value="" selected>เลือกน้ำหนักทอง</option>
                                            <option value="1">1 บาท</option>
                                            <option value="2">2 บาท</option>
                                            <option value="3">3 บาท</option>
                                            <option value="4">4 บาท</option>
                                            <option value="5">5 บาท</option>
                                        </select></p>
                                </div>
                                @error('selectGold')
                                <div class="my-2"><span class="text-drager">{{$message}}</span></div>
                                @enderror
                                <div>
                                    <hr>
                                </div>
                                <div>
                                    <p class="text-white d-flex justify-content-start  fw-bold">จำนวนโทเคน</p>
                                </div>
                                <div class="d-flex fs-5  ">
                                    <p class="col-6 "> <img src="{{URL('assets/coins.png')}}" width="50" height="50 " class="me-4 ">โทเคน</p>
                                    <p class="col align-self-center">
                                        <input type="text" class=" rounded-3 form-control form-control-sm border border-0" name="tokenOutput" value="" id="tokenOutput" disabled>
                                        <input type="number" class="form-control" name="tokenOutputSend" id="tokenOutputSend" value="" hidden>
                                </div>
                                @error('tokenOutputSend')
                                <div class="my-2"><span class="text-drager">{{$message}}</span></div>
                                @enderror
                                <p class="d-flex justify-content-end">ยอดโทเคนคงเหลือ : {{Auth::user()->balance_token}}</p>
                            </div>
                        </div>
                        <button type="submit" class="btn fs-5 fw-bold card-footer confirm_trade" value="บันทึก">ยืนยันการแลกทอง</button>

                    </div>
                </div>
            </form>
            <!-- การ์ดแลกทอง -->

            <!-- การ์ดกราฟทอง -->
            <div class="col-12 col-md-12 col-lg-6 col-xl-6 mt-4 p-2  align-self-center order-3 order-md-3 order-lg-2">
                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container">
                    <div id="tradingview_4ada7"></div>
                    <div class="tradingview-widget-copyright"><a href="https://th.tradingview.com/symbols/FX_IDC-XAUTHB/" rel="noopener" target="_blank"><span class="blue-text">XAUTHB ชาร์ต</span></a> โดย TradingView</div>
                    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                    <script type="text/javascript">
                        new TradingView.widget({
                            "width": "100%",
                            "height": 500,
                            "symbol": "FX_IDC:XAUTHB",
                            "timezone": "Etc/UTC",
                            "theme": "light",
                            "style": "2",
                            "locale": "th_TH",
                            "toolbar_bg": "#f1f3f6",
                            "enable_publishing": true,
                            "withdateranges": true,
                            "range": "YTD",
                            "hide_side_toolbar": false,
                            "allow_symbol_change": true,
                            "details": true,
                            "hotlist": true,
                            "calendar": true,
                            "show_popup_button": true,
                            "popup_width": "1000",
                            "popup_height": "650",
                            "container_id": "tradingview_4ada7"
                        });
                    </script>
                </div>
                <!-- TradingView Widget END -->
            </div>
            <!-- การ์ดกราฟทอง -->


            <!-- การ์ดโทเคน -->
            <form name="TradeToken" id="TradeToken" action="{{route('trade_token')}}" method="post" class="col-12 col-md-12 col-lg-6 col-xl-6 mt-4 p-2  order-1 order-md-1 order-lg-3">
                @csrf

                <div class="container d-flex justify-content-center">
                    <div class=" card  border border-0 shadow  rounded-4" style="background-color: #B0120A; width:fit-content">
                        <div class="card-header bg-white">
                            <p class=" text-center  fs-5  m-1 fw-bold ">แลกโทเคน</p>
                        </div>

                        <div class="card-body">
                            <div class="container text-center text-white">
                                <div>
                                    <p class="text-white d-flex justify-content-start fw-bold">จำนวนเครดิต</p>
                                </div>
                                <div class="d-flex fs-5  ">
                                    <p class="col-6 "> <img src="{{URL('assets/coins.png')}}" width="50" height="50 " class="me-4 ">เครดิต</p>
                                    <p class="col align-self-center">
                                        <input type="number" class=" rounded-3 form-control form-control-sm border border-0" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="ระบุจำนวนเครดิต" name="creditInput" id="creditInput" min="0">
                                </div>

                                @error('tokenInput')
                                <p class="fw-bold d-flex justify-content-end text-warning">{{$message}}</p>
                                @enderror
                                <p class="d-flex justify-content-end">ยอดเครดิตคงเหลือ : {{Auth::user()->balance_credit}}</p>

                                <div>
                                    <hr>
                                </div>
                                <div>
                                    <p class="text-white d-flex justify-content-start  fw-bold">จำนวนโทเคน</p>
                                </div>
                                <div class="d-flex fs-5  ">
                                    <p class="col-6 "> <img src="{{URL('assets/coins.png')}}" width="50" height="50 " class="me-4 ">โทเคน</p>
                                    <p class="col align-self-center">
                                        <input type="number" class=" rounded-3 form-control form-control-sm border border-0" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="ระบุจำนวนโทเคน" name="tokenInput" id="tokenInput" pattern="^[^+]\d*\.?\d+$" min="0" max="{{Auth::user()->balance_credit}} % 100 = 0">
                                </div>

                                @error('creditInput')
                                <p class="fw-bold d-flex justify-content-end text-warning">{{$message}}</p>
                                @enderror

                                <!-- <div id="result"></div> -->



                            </div>
                        </div>
                        <button type="submit" value="บันทึก" class="btn fs-5 fw-bold card-footer confirm_trade">ยืนยันการโทเคนน</button>


                    </div>
                </div>
            </form>
            <!-- การ์ดโทเคน -->

            <!-- Modal tradegold-->
            <div class="modal fade" id="modal_tradegold" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered " style="width: fit-content; ">
                    <div class="modal-content text-center">
                        <div class="modal-body">
                            @if (session('success_gold'))
                            <div class="fw-bold text-success">
                                <p><i class="fa-solid fa-circle-check fa-4x"></i></p>
                                <p>{{ session('success_gold') }}</p>
                            </div>
                            @endif
                            @if (session('error_gold'))
                            <div class="fw-bold text-danger ">
                                <p><i class="fa-solid fa-circle-xmark fa-4x"></i></p>
                                <p>{{ session('error_gold') }}</p>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <!-- Trigger modal tradegold-->
            @if (session('success_gold'))
            <script>
                $(document).ready(function() {
                    $('#modal_tradegold').modal('show');
                });
            </script>
            @endif
            @if (session('error_gold'))
            <script>
                $(document).ready(function() {
                    $('#modal_tradegold').modal('show');
                });
            </script>
            @endif

            <!-- Modal tradetoken-->
            <div class="modal fade" id="modal_tradetoken" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered " style="width: fit-content; ">
                    <div class="modal-content text-center">
                        <div class="modal-body">
                            @if (session('success_token'))
                            <div class="fw-bold text-success">
                                <p><i class="fa-solid fa-circle-check fa-4x"></i></p>
                                <p>{{ session('success_token') }}</p>
                            </div>
                            @endif
                            @if (session('error_token'))
                            <div class="fw-bold text-danger ">
                                <p><i class="fa-solid fa-circle-xmark fa-4x"></i></p>
                                <p>{{ session('error_token') }}</p>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <!-- Trigger modal token-->
            @if (session('success_token'))
            <script>
                $(document).ready(function() {
                    $('#modal_tradetoken').modal('show');
                });
            </script>
            @endif
            @if (session('error_token'))
            <script>
                $(document).ready(function() {
                    $('#modal_tradetoken').modal('show');
                });
            </script>
            @endif


        </div>
    </div>



</body>

</html>
