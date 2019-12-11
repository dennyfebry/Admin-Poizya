<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Add Order</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                        <li class="breadcrumb-item"><a href="/order">Order</a></li>
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
                            <form action="/order/save" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="Code">Code</label>
                                    <input type="text" class="form-control" name="code" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="Total">Total</label>
                                    <input type="text" class="form-control" name="total" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="Order Date">Order Date</label>
                                    <input type="date" class="form-control" name="order_date" value="{{ date('Y-m-d')}}" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="Payment Deadline">Payment Deadline</label>
                                    <input type="date" class="form-control" name="payment_deadline" value="{{ date('Y-m-d')}}" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="Payment Method">Payment Method</label>
                                    <select class="form-control" name="payment_method">
                                        <option value="1">BCA</option>
                                        <option value="2">BRI</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="Customer">Customer</label>
                                    <select class="form-control" name="customer">
                                        @foreach($account as $acc)
                                        <option value="{{$acc->id}}">{{$acc->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="Status">Status</label>
                                    <input type="text" class="form-control" name="status" required="required">
                                </div>
                                <input type="hidden" name="created" value="{{ date('Y-m-d h:i:s')}}">
                                <button type="submit" class="btn btn-primary mb-2">Save Data</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
    </section>
</div>