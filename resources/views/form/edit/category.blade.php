<a href="/public/category">Back</a>
<br>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Edit Category</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                        <li class="breadcrumb-item"><a href="/category">Category</a></li>
                        <li class="breadcrumb-item active">Edit</li>
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
                        <div class="card-body ">
                            @foreach($category as $row)
                            <form action="/category/update" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value="{{ $row->id }}">
                                <div class="form-group">
                                    <label for="Name">Name</label>
                                    <input type="text" class="form-control" name="name" value="{{ $row->name }}" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="Description">Description</label>
                                    <textarea name="description" class="form-control" required="required">{{ htmlspecialchars($row->description) }} </textarea>
                                </div>
                                <button type="submit" class="btn btn-primary mb-2">Save Data</button>
                            </form>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
    </section>
</div>