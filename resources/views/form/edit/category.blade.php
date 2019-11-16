<a href="/public/category">Back</a>
<br>
@foreach($category as $row)
<form action="/public/category/update" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{ $row->id }}"> <br />
    Name <input type="text" name="name" value="{{ $row->name }}" required="required"> <br />
    Description <textarea name="description" required="required">{{ htmlspecialchars($row->description) }} </textarea> <br />
    <input type="submit" value="Save Data">
</form>
@endforeach