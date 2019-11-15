<a href="/public/product">Back</a>
<br>
@foreach($product as $row)
<form action="/public/product/update" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{ $row->id }}"> <br />
    Code <input type="text" name="code" value="{{ $row->code }}" required="required"> <br />
    Name <input type="text" name="name" value="{{ $row->name }}" required="required"> <br />
    Price <input type="number" name="price" value="{{ $row->price }}" required="required"> <br />
    Description <input type="text" name="description" value="{{ $row->description }}" required="required"> <br />
    Stock <input type="number" name="stock" value="{{ $row->stock }}" required="required"> <br />
    Status
    <select name="status">
        <option value="1" {{ ( $row->status == "1" ) ? 'selected' : '' }}>Show</option>
        <option value="0" {{ ( $row->status == "0" ) ? 'selected' : '' }}>Draft</option>
    </select>
    Category
    <select name="category">
        <option value="1" {{ ( $row->id_category == "1" ) ? 'selected' : '' }}>1</option>
        <option value="2" {{ ( $row->id_category == "2" ) ? 'selected' : '' }}>2</option>
    </select>
    <input type="submit" value="Save Data">
</form>
@endforeach