<!-- <a href="/public/order/add">+ Add (Sementara)</a> -->
<br>
<table border="1">
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
</table>