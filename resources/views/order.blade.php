<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Order</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/public/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Order</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <!-- <a href="/public/order/add" type="button" class="btn btn-primary btn-sm">Add Order</a> -->
                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <!-- <form action="/public/order/search" method="GET">
                                        <div class="input-group-append">
                                            <input type="text" name="search" class="form-control float-right" placeholder="Search" value="{{ old('search') }}">
                                            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                        </div>
                                    </form> -->

                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body ">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Code</th>
                                        <th>Total</th>
                                        <th>Order Date</th>
                                        <th>Payment Deadline</th>
                                        <th>Payment Method</th>
                                        <th>Customer</th>
                                        <th>Status</th>
                                        <th>Created</th>
                                        <th>Modified</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $no = 1
                                    @endphp
                                    @foreach($order as $row)
                                    <tr>
                                        <td>{{ $no }}</td>
                                        <td>{{ $row->code }}</td>
                                        <td>{{ $row->total }}</td>
                                        <td>{{ $row->order_date }}</td>
                                        <td>{{ $row->payment_deadline }}</td>
                                        <td>@if ($row->payment_method === "1")
                                            BCA
                                            @elseif ($row->payment_method === "2")
                                            BRI
                                            @else
                                            the other
                                            @endif</td>
                                        @foreach($account as $acc)
                                        <td>@if ($acc->id === $row->id_account)
                                            {{ $acc->name }}
                                            @else
                                            @endif</td>
                                        @endforeach
                                        @foreach($confirmation as $cfm)
                                        <td>@if ($cfm->status === 1)
                                            Succes
                                            @else
                                            Pending
                                            @endif</td>
                                        @endforeach
                                        <td>{{ $row->created }}</td>
                                        <td>{{ $row->modified }}</td>
                                        <td>
                                            <!-- <a href="/public/order/edit/{{ $row->id }}">Edit(Sementara)</a>
            |
            <a href="/public/order/delete/{{ $row->id }}">Delete(Sementara)</a>
            | -->
                                            <a href="/public/order/details/{{ $row->id }}">Details</a>
                                        </td>
                                    </tr>
                                    @php
                                    $no++
                                    @endphp
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer clearfix">
                            <div class="float-left">
                                Halaman : {{ $order->currentPage() }} <br />
                                Jumlah Data : {{ $order->total() }} <br />
                                Data Per Halaman : {{ $order->perPage() }} <br />
                            </div>
                            <ul class="pagination pagination-sm m-0 float-right">
                                {{ $order->links() }}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>