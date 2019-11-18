<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Account</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/public/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Account</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="/public/account/add" type="button" class="btn btn-primary btn-sm">Add Account</a>
                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <form action="/public/account/search" method="GET">
                                        <div class="input-group-append">
                                            <input type="text" name="search" class="form-control float-right" placeholder="Search" value="{{ old('search') }}">
                                            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body ">
                            <table class="table table-bordered">
                                <thead>
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
                                </thead>
                                <tbody>
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
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer clearfix">
                            <div class="float-left">
                                Halaman : {{ $account->currentPage() }} <br />
                                Jumlah Data : {{ $account->total() }} <br />
                                Data Per Halaman : {{ $account->perPage() }} <br />
                            </div>
                            <ul class="pagination pagination-sm m-0 float-right">
                                {{ $account->links() }}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>