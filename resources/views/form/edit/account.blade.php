<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Edit Account</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                        <li class="breadcrumb-item"><a href="/account">Account</a></li>
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
                            @foreach($account as $row)
                            <form action="/account/update" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value="{{ $row->id }}">
                                <div class="form-group">
                                    <label for="Username">Username</label>
                                    <input type="text" class="form-control" name="username" value="{{ $row->username }}" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="Email">Email</label>
                                    <input type="email" class="form-control" name="email" value="{{ $row->email }}" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="Password">Password</label>
                                    <input type="password" name="password" id="eyes" class="form-control" value="{{ base64_decode($row->password) }}" required="required">
                                    <span class="fa fa-fw fa-eye field-icon toggle-password" id="eye"></span>
                                </div>
                                <div class="form-group">
                                    <label for="Name">Name</label>
                                    <input type="text" class="form-control" name="name" value="{{ $row->name }}" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="Address">Address</label>
                                    <textarea name="address" class="form-control" required="required">{{ htmlspecialchars($row->address) }} </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="Phone Number">Phone Number</label>
                                    <input type="number" class="form-control" name="phone_number" value="{{ $row->phone_number }}" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="Portal Code">Portal Code</label>
                                    <input type="text" class="form-control" name="portal_code" value="{{ $row->portal_code }}" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="Status">Status</label>
                                    <select class="form-control" name="status">
                                        <option value="1" {{ ( $row->status == "1" ) ? 'selected' : '' }}>Active</option>
                                        <option value="0" {{ ( $row->status == "0" ) ? 'selected' : '' }}>Not Active</option>
                                    </select>
                                </div>
                                <input type="hidden" name="level" value="{{ $row->level }}">
                                <input type="hidden" name="modified" value="{{ date('Y-m-d H:i:s')}}">
                                <button type="submit" class="btn btn-primary mb-2">Save Data</button>
                            </form>
                            @endforeach
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