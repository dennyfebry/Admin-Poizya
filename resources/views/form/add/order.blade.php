<a href="/public/order">Back</a>
<br>
<form action="/public/order/save" method="post">
    {{ csrf_field() }}
    Code <input type="text" name="code" required="required"> <br />
    Total <input type="text" name="total" required="required"> <br />
    Order Date <input type="date" name="order_date" value="{{ date('Y-m-d')}}" required="required"> <br />
    Payment Deadline <input type="date" name="payment_deadline" value="{{ date('Y-m-d')}}" required="required"> <br />
    Payment Method
    <select name="payment_method">
        <option value="1">BCA</option>
        <option value="2">BRI</option>
    </select> <br />
    Customer
    <select name="customer">
        @foreach($account as $acc)
        <option value="{{$acc->id}}">{{$acc->name}}</option>
        @endforeach
    </select> <br /><br />
    Status <input type="text" name="status" required="required"> <br />
    <input type="hidden" name="created" value="{{ date('Y-m-d h:i:s')}}"> <br />
    <input type="submit" value="Save Data">
</form>