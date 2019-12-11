<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Edit Order</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                        <li class="breadcrumb-item"><a href="/order">Order</a></li>
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
                            @foreach($order as $row)
                            <form action="/order/update" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value="{{ $row->id }}">
                                <div class="form-group">
                                    <label for="Code">Code</label>
                                    <input type="text" class="form-control" name="code" value="{{ $row->code }}" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="Total">Total</label>
                                    <input type="text" class="form-control" name="total" value="{{ $row->total }}" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="Order Date">Order Date</label>
                                    <input type="date" class="form-control" name="order_date" value="{{ $row->order_date }}" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="Payment Deadline">Payment Deadline</label>
                                    <input type="date" class="form-control" name="payment_deadline" value="{{ $row->payment_deadline }}" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="Payment Method">Payment Method</label>
                                    <select class="form-control" name="payment_method">
                                        <option value="1" {{ ( $row->payment_method == "1" ) ? 'selected' : '' }}>BCA</option>
                                        <option value="2" {{ ( $row->payment_method == "2" ) ? 'selected' : '' }}>BRI</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="Customer">Customer</label>
                                    <select class="form-control" name="customer">
                                        @foreach($account as $acc)
                                        <option value="{{$acc->id}}" {{ ( $row->id_account == "$acc->id" ) ? 'selected' : '' }}>{{$acc->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="Status">Status</label>
                                    <input type="text" class="form-control" name="status" value="{{ $row->status }}" required="required">
                                </div>
                                <input type="hidden" name="modified" value="{{ date('Y-m-d h:i:s')}}">
                                <button type="submit" class="btn btn-primary mb-2">Save Data</button>
                            </form>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
    </section>
</div>