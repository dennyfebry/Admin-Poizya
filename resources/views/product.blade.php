<p>Search Product :</p>
	<form action="/public/product/search" method="GET">
		<input type="text" name="search" placeholder="Search Product .." value="{{ old('search') }}">
		<input type="submit" value="Search">
    </form>
    <a href="/public/product/add">+ Add</a>
<br>
<table border="1">
    <tr>
        <th>No</th>
        <th>Category</th>
        <th>Code</th>
        <th>Name</th>
        <th>Price</th>
        <th>Description</th>
        <th>Stock</th>
        <th>Status</th>
        <th>Opsi</th>
    </tr>
    @php
    $no = 1
    @endphp
    @foreach($product as $row)
    <tr>

        <td>{{ $no }}</td>
        @foreach($category as $cat)
        @if ($cat->id === $row->id_category)
        <td>{{ $cat->name }}</td>
        @else
        @endif
        @endforeach
        <td>{{ $row->code }}</td>
        <td>{{ $row->name }}</td>
        <td>Rp.{{ number_format($row->price,2,',','.') }}</td>
        <td>{{ $row->description }}</td>
        <td>{{ $row->stock }}</td>
        <td>@if ($row->status === 1)
            Show
            @else
            Draft
            @endif</td>
        <td>
            <a href="/public/product/edit/{{ $row->id }}">Edit</a>
            |
            <a href="/public/product/delete/{{ $row->id }}">Delete</a>
        </td>
    </tr>
    @php
    $no++
            @endphp
    @endforeach
</table>

<br/>
Halaman : {{ $product->currentPage() }} <br/>
Jumlah Data : {{ $product->total() }} <br/>
Data Per Halaman : {{ $product->perPage() }} <br/>
{{ $product->links() }}
