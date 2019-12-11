<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Category</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Category</li>
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
                            <a href="/category/add" type="button" class="btn btn-primary btn-sm">Add Category</a>
                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <form action="/category/search" method="GET">
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
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $no = 1
                                    @endphp
                                    @foreach($category as $row)
                                    <tr>
                                        <td>{{ $no }}</td>
                                        <td>{{ $row->name }}</td>
                                        <td>{{ $row->description }}</td>
                                        <td>
                                            <a href="/category/edit/{{ $row->id }}">Edit</a>
                                            |
                                            <a href="/category/delete/{{ $row->id }}">Delete</a>
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
                                Halaman : {{ $category->currentPage() }} <br />
                                Jumlah Data : {{ $category->total() }} <br />
                                Data Per Halaman : {{ $category->perPage() }} <br />
                            </div>
                            <ul class="pagination pagination-sm m-0 float-right">
                                {{ $category->links() }}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>