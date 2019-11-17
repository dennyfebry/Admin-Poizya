<a href="/public/category/add">Add</a>
<br>
<table border="1">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Description</th>
        <th>Opsi</th>
    </tr>
    @php
    $no = 1
    @endphp
    @foreach($category as $row)
    <tr>
        <td>{{ $no }}</td>
        <td>{{ $row->name }}</td>
        <td>{{ $row->description }}</td>
        <td>
            <a href="/public/category/edit/{{ $row->id }}">Edit</a>
            |
            <a href="/public/category/delete/{{ $row->id }}">Delete</a>
        </td>
    </tr>
    @php
    $no++
    @endphp
    @endforeach
</table>