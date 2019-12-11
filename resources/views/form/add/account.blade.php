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
                        <li class="breadcrumb-item"><a href="/account">Account</a></li>
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
                            <form action="/account/save" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="Username">Username</label>
                                    <input type="text" class="form-control" name="username" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="Email">Email</label>
                                    <input type="email" class="form-control" name="email" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="Password">Password</label>
                                    <input type="password" name="password" id="eyes" class="form-control" required="required">
                                    <span class="fa fa-fw fa-eye field-icon toggle-password" id="eye"></span>
                                </div>
                                <div class="form-group">
                                    <label for="Name">Name</label>
                                    <input type="text" class="form-control" name="name" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="Address">Address</label>
                                    <textarea name="address" class="form-control" required="required"> </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="Phone Number">Phone Number</label>
                                    <input type="number" class="form-control" name="phone_number" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="Portal Code">Portal Code</label>
                                    <input type="text" class="form-control" name="portal_code" required="required">
                                </div>
                                <input type="hidden" name="status" value="0">
                                <input type="hidden" name="level" value="0">
                                <input type="hidden" name="created" value="{{ date('Y-m-d H:i:s')}}">
                                <button type="submit" class="btn btn-primary mb-2">Save Data</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
    </section>
</div>

<script>
    function show() {
        var p = document.getElementById('eyes');
        p.setAttribute('type', 'text');
    }

    function hide() {
        var p = document.getElementById('eyes');
        p.setAttribute('type', 'password');
    }
    var pwShown = 0;
    document.getElementById("eye").addEventListener("click", function() {
        if (pwShown == 0) {
            pwShown = 1;
            show();
        } else {
            pwShown = 0;
            hide();
        }
    }, false);
</script>