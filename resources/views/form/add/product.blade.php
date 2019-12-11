<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Add Account</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                        <li class="breadcrumb-item"><a href="/product">Product</a></li>
                        <li class="breadcrumb-item active">Add</li>
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
                            <form action="/product/save" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="Code">Code</label>
                                    <input type="text" class="form-control" name="code" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="Name">Name</label>
                                    <input type="text" class="form-control" name="name" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="Price">Price</label>
                                    <input type="number" name="price" class="form-control" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="Description">Description</label>
                                    <textarea name="description" class="form-control" required="required"> </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="Stock">Stock</label>
                                    <input type="number" name="stock" class="form-control" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="Status">Status</label>
                                    <select class="form-control" name="status">
                                        <option value="1">Show</option>
                                        <option value="0">Draft</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="Category">Category</label>
                                    <select class="form-control" name="category">
                                        @foreach($category as $cat)
                                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary mb-2">Save Data</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
    </section>
</div>