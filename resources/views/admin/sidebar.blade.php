
<aside class="main-sidebar  sidebar-light-danger elevation-3">
    <!-- Brand Logo -->
    <a href="{{route('AdminDashboard')}}" class="brand-link text-center p-2 m-0">
        <img src="{{URL('assets/logo_red.png')}}" class=" img-circle elevation-1" width="50" height="50">
        <p class="brand-text pt-2 font-weight-bolder">GOLDPLUS</p>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">

            <ul class=" nav nav-pills nav-sidebar flex-column " data-widget="treeview" data-accordion="false" role="tablist">
                <li class="nav-item">
                    <a class="nav-link" id="wait_approve-tab" href="{{route('AdminDashboard')}}">
                        <i class="nav-icon fa-solid fa-clock"></i>
                        <p>
                            รออนุมัติ
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="approve-tab" href="{{route('Approved')}}">
                        <i class="nav-icon fa-solid fa-circle-check"></i>
                        <p>
                            อนุมัติ
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="not_approve-tab" href="{{route('NotApprove')}}">
                        <i class="nav-icon fa-solid fa-circle-xmark"></i>
                        <p>
                            ปฏิเสธ
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="list_topup-tab" href="{{route('list_topup')}}">
                        <i class="nav-icon fa-solid fa-money-bill-transfer"></i>
                        <p>
                            รายการฝากเงิน
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="list_withdraw-tab" href="{{route('list_withdraw')}}">
                        <i class="nav-icon fa-solid fa-money-bill-transfer"></i>
                        <p>
                            รายการถอนเงิน
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="list_tradegold-tab" href="{{route('list_tradegold')}}">
                        <i class="nav-icon fa-solid fa-coins"></i>
                        <p>
                            รายการแลกทอง
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="history_gold-tab" href="{{route('history_gold')}}">
                            <i class="nav-icon fa-solid fa-clock-rotate-left"></i>
                            <p>
                                ประวัติราคาทองคำ
                            </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link"  href="{{route('about')}}">
                            <i class="nav-icon fa-solid fa-edit"></i>
                            <p>
                                แก้ไขข้อมูล
                            </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="{{route('edituser')}}">
                            <i class="nav-icon fa-solid fa-edit"></i>
                            <p>
                                แก้ไขข้อมูล user
                            </p>
                    </a>
                </li>

                <div>
                    <hr class="bg-danger">
                </div>

                <li class="nav-item">
                    <a href="{{route('logout')}}" class="nav-link">
                        <i class="nav-icon fa-solid fa-right-from-bracket"></i>
                        <p>
                            ออกจากระบบ
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
