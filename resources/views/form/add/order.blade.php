<a href="/public/order">Back</a>
<br>
<form action="/public/order/save" method="post">
    {{ csrf_field() }}
    Code <input type="text" name="code" required="required"> <br />
    Total <input type="text" name="total" required="required"> <br />
    Order Date <input type="text" name="order_date" value="{{ date('Y-m-d')}}" required="required"> <br />
    Payment Deadline <input type="text" name="payment_deadline" value="{{ date('Y-m-d')}}" required="required"> <br />
    Payment Method <input type="text" name="payment_method" required="required"> <br />
    Customer <input type="text" name="customer" required="required"> <br />
    Status <input type="text" name="status" required="required"> <br />
    <input type="hidden" name="created" value="{{ date('Y-m-d h:i:sa')}}"> <br />
    <input type="submit" value="Save Data">
</form>