<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$title}}</title>
</head>

<body>
    <h1>Login Page</h1>
    <br>
    @if(\Session::has('alert'))
    <div>{{Session::get('alert')}}</div>
    @endif
    @if(\Session::has('alert-success'))
    <div>{{Session::get('alert-success')}}</div>
    @endif
    <form action="{{ url('/loginPost') }}" method="post">
        {{ csrf_field() }}
        <label for="username/user">Username or Email:</label>
        <input type="text" name="id"><br>
        <label for="password">Password:</label>
        <input type="password" name="password"></input><br>
        <button type="submit">Login</button><br><br>
    </form>
    <a href="/public/dashboard"> ke dashboard</a>
</body>

</html>