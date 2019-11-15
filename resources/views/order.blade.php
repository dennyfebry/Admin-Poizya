<a href="/public/order/add">+ Add (Sementara)</a>
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
        <td>{{ $row->payment_method }}</td>
        <td>{{ $row->customer }}</td>
        <td>{{ $row->status }}</td>
        <td>{{ $row->created }}</td>
        <td>{{ $row->modified }}</td>
        <td>
            <a href="/public/order/edit/{{ $row->id }}">Edit</a>
            |
            <a href="/public/order/delete/{{ $row->id }}">Delete</a>
        </td>
    </tr>
    @php
    $no++
    @endphp
    @endforeach
</table>