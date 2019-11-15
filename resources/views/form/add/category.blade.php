<a href="/public/category">Back</a>
<br>
<form action="/public/category/save" method="post">
    {{ csrf_field() }}
    Name <input type="text" name="name" required="required"> <br />
    Description <input type="text" name="description" required="required"> <br />
    <input type="submit" value="Save Data">
</form>