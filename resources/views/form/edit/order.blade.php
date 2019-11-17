<a href="/public/order">Back</a>
<br>
@foreach($order as $row)
<form action="/public/order/update" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{ $row->id }}"> <br />
    Code <input type="text" name="code" value="{{ $row->code }}" required="required"> <br />
    Total <input type="text" name="total" value="{{ $row->total }}" required="required"> <br />
    Order Date <input type="date" name="order_date" value="{{ $row->order_date }}" required="required"> <br />
    Payment Deadline <input type="date" name="payment_deadline" value="{{ $row->payment_deadline }}" required="required"> <br />
    Payment Method
    <select name="payment_method">
        <option value="1" {{ ( $row->payment_method == "1" ) ? 'selected' : '' }}>BCA</option>
        <option value="2" {{ ( $row->payment_method == "2" ) ? 'selected' : '' }}>BRI</option>
    </select> <br />
    Customer
    <select name="customer">
        @foreach($account as $acc)
        <option value="{{$acc->id}}" {{ ( $row->id_account == "$acc->id" ) ? 'selected' : '' }}>{{$acc->name}}</option>
        @endforeach
    </select> <br /><br />
    Status <input type="text" name="status" value="{{ $row->status }}" required="required"> <br />
    <input type="hidden" name="modified" value="{{ date('Y-m-d h:i:s')}}"> <br />
    <input type="submit" value="Save Data">
</form>
@endforeach