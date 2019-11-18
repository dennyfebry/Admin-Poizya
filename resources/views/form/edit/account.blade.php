<a href="/public/account">Back</a>
<br>
@foreach($account as $row)
<form action="/public/account/update" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{ $row->id }}"> <br />
    Username <input type="text" name="username" value="{{ $row->username }}" required="required"> <br />
    Email <input type="text" name="email" value="{{ $row->email }}" required="required"> <br />
    Password <input type="password" name="password" id="eyes" value="{{ base64_decode($row->password) }}" required="required"><button type="button" id="eye">
        <img src="https://cdn0.iconfinder.com/data/icons/feather/96/eye-16.png" alt="eye" />
    </button> <br />
    Name <input type="text" name="name" value="{{ $row->name }}" required="required"> <br />
    Address <textarea name="address" required="required">{{ htmlspecialchars($row->address) }} </textarea><br />
    Phone Number<input type="number" name="phone_number" value="{{ $row->no_hp }}" required="required"> <br />
    Portal Code <input type="text" name="portal_code" value="{{ $row->portal_code }}" required="required"> <br />
    <select name="status">
        <option value="1" {{ ( $row->status == "1" ) ? 'selected' : '' }}>Active</option>
        <option value="0" {{ ( $row->status == "0" ) ? 'selected' : '' }}>Not Active</option>
    </select>
    <input type="hidden" name="level" value="{{ $row->level }}"> <br />
    <input type="hidden" name="modified" value="{{ date('Y-m-d H:i:s')}}"> <br />
    <input type="submit" value="Save Data">
</form>
@endforeach

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