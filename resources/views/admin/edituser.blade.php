@include('admin.init.header');

<!-- Main content -->
<div class="content pt-3">
                <div class="container-fluid">
                    <div class="tab-content" id="v-pills-tabContent">

                        <div class="row d-flex justify-content-center">
                            <div class="col-12 col-md-10 col-lg-10 col-xl-10">
                                <div class="card rounded-4 ">
                                    <div class="card-header" style="background-color: #B0120A;">
                                        <p class="text-center text-white fs-5  m-0 p-0  fw-bold">รายการอนุมัติ</p>
                                    </div>
                                    <div class="card-body">
                                        <!-- ตาราง -->
                                    <div class="table-responsive">
                                        <table class="table table-bordered ">
                                            <thead class="thead-light text-center">
                                                <tr>
                                                    <th scope="col">ลำดับ</th>
                                                    <th scope="col">ชื่อ</th>
                                                    <th scope="col">สถานะ</th>
                                                    <th scope="col">จัดการ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Boss</td>
                                                    <td>user</td>
                                                    <td class="text-center">
                                                            <button type="button" class="border-0 border bg-white"
                                                                data-bs-toggle="modal" data-bs-target="#detail_approve" onclick="showModal('{{ json_encode($value) }}')"><i
                                                                    class="fa-solid fa-eye"></i></i></button>
                                                        </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                        <div class="row">

                                        </div>
                                    </div>
                                    <!-- ตาราง -->
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->

            @include('admin.init.footer')
