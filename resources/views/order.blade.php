<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$title}}</title>
</head>

<body>
    <h1>Orders Page</h1>
    <br> <br>
    <ul>
        <li><a href="/public/dashboard">Dashboard</a></li>
        <li><a href="/public/product">Products</a></li>
        <li><a href="/public/order">Orders</a></li>
        <li><a href="/public/account">Accounts</a></li>
    </ul>
    <br> <br>
    <a href="/public">Logout</a>
</body>

</html>