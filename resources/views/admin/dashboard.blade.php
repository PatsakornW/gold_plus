@include('admin.init.header')
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
                                            <th scope="col">วันที่</th>
                                            <th scope="col">ชื่อ</th>
                                            <th scope="col">จำนวน</th>
                                            <th scope="col">รายการ</th>
                                            <th scope="col">รายละเอียด</th>
                                            <th scope="col">จัดการ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php($counter = ($data->currentPage() - 1) * $data->perPage())
                                        @foreach ($data as $value)
                                            <tr>
                                                <td>{{ ++$counter }}</td>
                                                <td>{{ $value->created_at }}</td>
                                                <td>{{ $value->name }}</td>
                                                <td class="text-center">{{ $value->total }}</td>
                                                <td class="{{ $value->type == 'ฝาก' ? 'text-success' : ($value->type == 'แลก' ? 'text-warning' : 'text-danger') }} fw-bold text-center">{{ $value->type }}</td>
                                                <td class="text-center">
                                                    <button type="button" class="border-0 border bg-white"
                                                        data-bs-toggle="modal" data-bs-target="#detail"
                                                        onclick="showModal('{{ json_encode($value) }}')">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </button>
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-between">
                                                        <div class="">
                                                            <form action="{{ route('approve') }}" method="POST">
                                                                @csrf
                                                                <input type="hidden" name="id"value="{{ $value->id }}">
                                                                <input type="hidden" name="uid"value="{{ $value->uid }}">
                                                                <input type="hidden" name="total"value="{{ $value->total }}">
                                                                <input type="hidden" name="type"value="{{ $value->type }}">
                                                                <button type="submit" class="btn  btn-success border-0 border ">
                                                                    <i class="fa-solid fa-check "></i></button>
                                                            </form>
                                                        </div>
                                                        <div class="">
                                                            <form action="{{ route('reject') }}" method="POST">
                                                                @csrf
                                                                <input type="hidden" name="id"value="{{ $value->id }}">
                                                                <input type="hidden" name="uid"value="{{ $value->uid }}">
                                                                <input type="hidden" name="lost_token"value="{{ $value->lost_token }}">
                                                                <input type="hidden" name="type"value="{{ $value->type }}">
                                                                <button type="submit" class="btn  btn-danger border-0 border ">
                                                                    <i class="fa-solid fa-xmark "></i></button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="row">
                                    {{ $data->links() }}
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
</div>
<!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->

<!-- modal   -->
<div class="modal fade" id="detail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content rounded-4">
            <div class="modal-header  p-1 position-relative" style="background-color:#B0120A;">
                <div class="container-fluid">
                    <div class="row ">
                        <p class="fs-5 modal-title d-flex justify-content-center  text-white fw-bold"
                            id="exampleModalLabel">รายละเอียด</p>
                    </div>
                </div>

                <button type="button"
                    class="btn-close position-absolute top-25 start-100 translate-middle badge  rounded-circle bg-white p-1"
                    data-bs-dismiss="modal" data-bs-target="#detail_wait" aria-label="Close">
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
                                <p class="text-center">สถานะ : <span class="fw-bold text-primary" id="status"></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- modal  page  -->


<!-- <div class="modal fade" id="detail_topup">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Transaction Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <tr>
                        <td>Name:</td>
                        <td id="name"></td>
                    </tr>
                    <tr>
                        <td>Total:</td>
                        <td id="total"></td>
                    </tr>
                    <tr>
                        <td>Type:</td>
                        <td id="type"></td>
                    </tr>
                    <tr>
                        <td>Created At:</td>
                        <td id="created_at"></td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div> -->

 <!-- Modal tradegold-->
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

<!-- Trigger modal tradegold-->
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


@include('admin.init.footer')
