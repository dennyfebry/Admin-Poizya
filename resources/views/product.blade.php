<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Product</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/public/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Product</li>
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
                            <a href="/public/product/add" type="button" class="btn btn-primary btn-sm">Add Product</a>
                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <form action="/public/product/search" method="GET">
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
                                        <th>Category</th>
                                        <th>Code</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Description</th>
                                        <th>Stock</th>
                                        <th>Status</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
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
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer clearfix">
                            <div class="float-left">
                                Halaman : {{ $product->currentPage() }} <br />
                                Jumlah Data : {{ $product->total() }} <br />
                                Data Per Halaman : {{ $product->perPage() }} <br />
                            </div>
                            <ul class="pagination pagination-sm m-0 float-right">
                                {{ $product->links() }}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>