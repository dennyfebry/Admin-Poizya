<a href="/public/account">Back</a>
<br>
<form action="/public/account/save" method="post">
    {{ csrf_field() }}
    Username <input type="text" name="username" required="required"> <br />
    Email <input type="text" name="email" required="required"> <br />
    Password <input type="password" name="password" required="required"> <br />
    Name <input type="text" name="name" required="required"> <br />
    Address <input type="text" name="address" required="required"> <br />
    No HP <input type="number" name="no_hp" required="required"> <br />
    Portal Code <input type="text" name="portal_code" required="required"> <br />
    <input type="hidden" name="status" value="0"> <br />
    <input type="hidden" name="created" value="{{ date('Y-m-d h:i:sa')}}"> <br />
    <input type="submit" value="Save Data">
</form>