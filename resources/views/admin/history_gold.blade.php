@include('admin.init.header');
<div class="row d-flex justify-content-center">
    <div class="col-12 col-md-10 col-lg-10 col-xl-10">
        <div class="card rounded-4 ">
            <div class="card-header" style="background-color: #B0120A;">
                <p class="text-center text-white fs-5  m-0 p-0  fw-bold">รายการถอนเงิน</p>
            </div>
            <div class="card-body">
                 <!-- ตาราง -->
                 <div class="table-responsive">
                    <table class="table table-bordered ">
                        <thead class="thead-light text-center">
                            <tr>
                                <th scope="col">วันที่</th>
                                <th scope="col">รับซื้อ</th>
                                <th scope="col">ขายออก</th>
                                <th scope="col">GoldSpot(Buy)</th>
                                <th scope="col">GoldSpot(Sell)</th>
                                <th scope="col">THB</th>
                                <th scope="col">ปรับขึ้นลง</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php(($data_history_gold->currentPage() - 1) * $data_history_gold->perPage())
                            @foreach ($data_history_gold as $value)
                                <tr>
                                    <td>{{ $value->created_at }}</td>
                                    <td>{{ $value->bid }}</td>
                                    <td>{{ $value->ask }}</td>
                                    <td>{{ $value->b_gold_spot }}</td>
                                    <td>{{ $value->s_gold_spot }}</td>
                                    <td>{{ $value->thb }}</td>
                                    <td>
                                        @if ($value->diff >= 0)
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style='color:#04d733ff' class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16">
                                            <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
                                          </svg>
                                        {{ abs($value->diff) }}
                                        @else
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style='color:#df3a5c' class="bi bi-arrow-down-circle-fill" viewBox="0 0 16 16">
                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/>
                                          </svg>
                                        {{ abs($value->diff) }}
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="row">
                        {{ $data_history_gold->links() }}
                    </div>
                </div>
                <!-- ตาราง -->
            </div>
        </div>
    </div>
</div>
@include('admin.init.footer');
