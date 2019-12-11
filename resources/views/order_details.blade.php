<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Order Detail</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                        <li class="breadcrumb-item"><a href="/order">Order</a></li>
                        <li class="breadcrumb-item active">Detail</li>
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
                        <div class="card-body ">
                            @foreach($order as $row)
                            @foreach($account as $acc)
                            @if ($acc->id === $row->id_account)
                            <div class="row">
                                <label class="col-1 control-label">Name </label>
                                <div class="col-xs-1">:</div>
                                <div class="col-2">{{ $acc->name }}</div>
                            </div>
                            <div class="row">
                                <label class="col-1 control-label">Address </label>
                                <div class="col-xs-1">:</div>
                                <div class="col-2">{{ $acc->address }}</div>
                            </div>
                            @else
                            @endif
                            @endforeach
                            <div class="row">
                                <label class="col-1 control-label">Code </label>
                                <div class="col-xs-1">:</div>
                                <div class="col-2">{{ $row->code }}</div>
                            </div>
                            @endforeach
                            <br>
                            <table class="table table-bordered">
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Qty</th>
                                    <th>Price</th>
                                </tr>
                                @php
                                $no = 1;
                                $total = 0;
                                @endphp
                                @foreach($order_details as $dtl)
                                <tr>
                                    <td>{{ $no }}</td>
                                    <td>{{ $dtl->name }}</td>
                                    <td>{{ $dtl->qty }}</td>
                                    <td>Rp.{{ number_format($dtl->price,2,',','.') }}</td>
                                </tr>
                                @php
                                $total =+ $dtl->price;
                                $no++;
                                @endphp
                                @endforeach
                                <tr>
                                    <td colspan="3">Total</td>
                                    <td>Rp.{{ number_format($total,2,',','.') }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>