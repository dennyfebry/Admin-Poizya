<p>Search Product :</p>
	<form action="/public/account/search" method="GET">
		<input type="text" name="search" placeholder="Search Account .." value="{{ old('search') }}">
		<input type="submit" value="Search">
    </form>
    <a href="/public/account/add">+ Add</a>
<br>
<table border="1">
    <tr>
        <th>No</th>
        <th>Username</th>
        <th>Email</th>
        <th>Name</th>
        <th>Address</th>
        <th>No HP</th>
        <th>Portal Code</th>
        <th>Status</th>
        <th>Last Login</th>
        <th>Created</th>
        <th>Modified</th>
        <th>Opsi</th>
    </tr>
    @php
    $no = 1
    @endphp
    @foreach($account as $row)
    <tr>
        <td>{{ $no }}</td>
        <td>{{ $row->username }}</td>
        <td>{{ $row->email }}</td>
        <td>{{ $row->name }}</td>
        <td>{{ $row->address }}</td>
        <td>{{ $row->no_hp }}</td>
        <td>{{ $row->portal_code }}</td>
        <td>@if ($row->status === 1)
            Active
            @else
            Not Active
            @endif</td>
        <td>{{ $row->last_login }}</td>
        <td>{{ $row->created }}</td>
        <td>{{ $row->modified }}</td>
        <td>
            <a href="/public/account/edit/{{ $row->id }}">Edit</a>
            |
            <a href="/public/account/delete/{{ $row->id }}">Delete</a>
        </td>
    </tr>
    @php
    $no++
    @endphp
    @endforeach
</table>