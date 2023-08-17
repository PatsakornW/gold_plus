@include('admin.init.header');
<div class=" d-flex justify-content-center">
    <div class="col-12 col-md-10 col-lg-10 col-xl-10">
        <div class="card rounded-4 ">
            <div class="card-header" style="background-color: #B0120A;">
                <p class="text-center text-white fs-5  m-0 p-0  fw-bold">รายการฝากเงิน</p>
            </div>
            <div class="card-body">
                <!-- ตาราง -->
                <div class="table-responsive">
                    <table class="table table-bordered ">
                        <thead class="thead-light text-center">
                            <tr>
                                <th scope="col">ลำดับ</th>
                                <th scope="col">วันที่</th>
                                <th scope="col">ชื่อ</th>
                                <th scope="col">จำนวน</th>
                                <th scope="col">รายการ</th>
                                <th scope="col">รายละเอียด</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($counter = ($data_all_topups->currentPage() - 1) * $data_all_topups->perPage())
                            @foreach ($data_all_topups as $value)
                            <tr>
                                <td>{{ ++$counter }}</td>
                                <td>{{ $value->created_at }}</td>
                                <td>{{ $value->name }}</td>
                                <td class="text-center">{{ $value->total }}</td>
                                <td class="text-success fw-bold text-center">{{ $value->type }}</td>
                                <td class="text-center">
                                    <button type="button" class="border-0 border bg-white" data-bs-toggle="modal" data-bs-target="#detail_list_topup" onclick="showModal('{{ json_encode($value) }}')"><i class="fa-solid fa-eye"></i></i></button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="row">
                        {{ $data_all_topups->links() }}
                    </div>
                </div>
                <!-- ตาราง -->
            </div>
        </div>
    </div>
</div>

<!-- modal   -->
<div class="modal fade" id="detail_list_topup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content rounded-4">
            <div class="modal-header  p-1 position-relative" style="background-color:#B0120A;">
                <div class="container-fluid">
                    <div class="row ">
                        <p class="fs-5 modal-title d-flex justify-content-center  text-white fw-bold" id="exampleModalLabel">รายละเอียด</p>
                    </div>
                </div>

                <button type="button" class="btn-close position-absolute top-25 start-100 translate-middle badge  rounded-circle bg-white p-1" data-bs-dismiss="modal" data-bs-target="#detail_wait" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <div class="container ">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-5 d-flex justify-content-end">วันที่ :</div>
                                <div class="col" id="created_at"></div>
                            </div>

                            <div class="row">
                                <div class="col-5 d-flex justify-content-end">ชื่อ :</div>
                                <div class="col" id="name"></div>
                            </div>
                            <div class="row">
                                <div class="col-5 d-flex justify-content-end">จำนวน :</div>
                                <div class="col " id="total"></div>
                            </div>
                            <div class="row" id="show-losttoken">
                                <div class="col-5 d-flex justify-content-end">โทเคนที่เสีย :</div>
                                <div class="col " id="lost-total"></div>
                            </div>
                            <div id="show-bank">
                                <div class="row">
                                    <div class="col-5 d-flex justify-content-end">เลขบัญชี :</div>
                                    <div class="col" id="idbank"></div>
                                </div>

                                <div class="row">
                                    <div class="col-5 d-flex justify-content-end">ธนาคาร :</div>
                                    <div class="col" id="name_bank"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12  mt-3" id="show-topup">
                            <div class="row mb-0">
                                <p class="fw-bold text-center">หลักฐานการโอน</p>
                            </div>
                            <div class="row">
                                <img src="" class=" shadow rounded-2" id="slip_file">
                            </div>
                        </div>
                        <div class="col-12  mt-3">
                            <div class="row mt-3">
                                <p class="text-center">สถานะ : <span class="fw-bold text-success" id="status"></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- modal  page  -->
@include('admin.init.footer')
