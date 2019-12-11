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
            <a href="/order">Back</a>
            <br><br>
            @foreach($order as $row)
            @foreach($account as $acc)
            @if ($acc->id === $row->id_account)
            <a><b>Name :</b>{{ $acc->name }}</a> <br>
            <a><b>Address :</b>{{ $acc->address }}</a> <br>
            @else
            @endif
            @endforeach
            <a><b>Code :</b>{{ $row->code }}</a> <br>
            @endforeach
            <br>
            <table border="1">
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
    </section>
</div>