<a href="/public/product">Back</a>
<br>
<form action="/public/product/save" method="post">
    {{ csrf_field() }}
    Code <input type="text" name="code" required="required"> <br />
    Name <input type="text" name="name" required="required"> <br />
    Price <input type="number" name="price" required="required"> <br />
    Description <input type="text" name="description" required="required"> <br />
    Stock <input type="number" name="stock" required="required"> <br />
    Status
    <select name="status">
        <option value="1">Show</option>
        <option value="0">Draft</option>
    </select>
    Category
    <select name="category">
        <option value="1">1</option>
        <option value="2">2</option>
    </select>
    <input type="submit" value="Save Data">
</form>