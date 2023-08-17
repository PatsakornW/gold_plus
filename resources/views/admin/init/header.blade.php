<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GOLDPLUS</title>
    <!-- Font Awesome Icons -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <!-- Theme style -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('AdminLTE-3.2.0/dist/css/adminlte.min.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL('css/style.css') }}">



</head>


<body class="hold-transition sidebar-mini">

    <div class="wrapper ">
        <!-- Navbar -->
        @include('admin.navbar')

        <!-- Main Sidebar Container -->
        @include('admin.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper ">

            {{-- headContent --}}
            <div class=" d-flex justify-content-center pt-3">

                <div class="col-lg-3 col-4 ">
                    <div class="card rounded-4 border-0">
                        <div class="card-body p-1 m-1">
                            <div class="row ">
                                <div class="col ">
                                    <img src="{{ URL('assets/wait.png') }}"
                                        class="p-3 img-thumbnail border-0 shadow-none">
                                </div>
                                <div class="col text-center align-self-center ">

                                    <h1 class="fw-bold text-danger">{{ $count_waitapprove }}</h1>
                                    <p>รออนุมัติ</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-4">
                    <div class="card rounded-4">
                        <div class="card-body p-1 m-1">
                            <div class="row ">
                                <div class="col ">
                                    <img src="{{ URL('assets/check.png') }}"
                                        class="p-3 img-thumbnail border-0 shadow-none">
                                </div>
                                <div class="col text-center align-self-center ">

                                    <h1 class="fw-bold text-danger">{{  $count_approved }}</h1>
                                    <p>อนุมัติ</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-4">
                    <div class="card rounded-4">
                        <div class="card-body p-1 m-1">
                            <div class="row ">
                                <div class="col ">
                                    <img src="{{ URL('assets/wrong.png') }}"
                                        class="p-3 img-thumbnail border-0 shadow-none">
                                </div>
                                <div class="col text-center align-self-center ">

                                    <h1 class="fw-bold text-danger">{{ $count_notapprove }}</h1>
                                    <p>ปฏิเสธ</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- headContent --}}
