<a href="/account">Back</a>
<br>
<form action="/account/save" method="post">
    {{ csrf_field() }}
    Username <input type="text" name="username" required="required"> <br />
    Email <input type="text" name="email" required="required"> <br />
    Password <input type="password" name="password" id="eyes" required="required"><button type="button" id="eye">
        <img src="https://cdn0.iconfinder.com/data/icons/feather/96/eye-16.png" alt="eye" />
    </button> <br />
    Name <input type="text" name="name" required="required"> <br />
    Address <textarea name="address" required="required"> </textarea><br />
    Phone Number <input type="number" name="phone_number" required="required"> <br />
    Portal Code <input type="text" name="portal_code" required="required"> <br />
    <input type="hidden" name="status" value="0"> <br />
    <input type="hidden" name="level" value="0"> <br />
    <input type="hidden" name="created" value="{{ date('Y-m-d H:i:s')}}"> <br />
    <input type="submit" value="Save Data">
</form>

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