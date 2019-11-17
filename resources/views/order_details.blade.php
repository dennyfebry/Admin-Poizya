<a href="/public/order">Back</a>
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