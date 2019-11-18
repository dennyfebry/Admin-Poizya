<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$title}}</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/mainlogin.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/fonts/iconic/css/material-design-iconic-font.min.css') }}">
</head>

<body>
    <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
            <form action="{{ url('/loginPost') }}" method="post" class="login100-form validate-form">
                {{ csrf_field() }}
                <span class="login100-form-title p-b-37">
                    Sign In
                </span>

                @if(\Session::has('alert'))
                <div class="alert alert-danger" role="alert">
                    <div>{{Session::get('alert')}}</div>
                </div>
                @endif

                @if(\Session::has('alert-success'))
                <div class="alert alert-success" role="alert">
                    <div>{{Session::get('alert-success')}}</div>
                </div>
                @endif

                @if ($errors->any())
                <div class="alert alert-warning" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <div class="wrap-input100 validate-input m-b-20" data-validate="Enter username or email">
                    <input class="input100" type="text" name="id" placeholder="username or email">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-25" data-validate="Enter password">
                    <input class="input100" type="password" name="password" placeholder="password">
                    <span class="focus-input100"></span>
                </div>

                <div class="container-login100-form-btn">
                    <button type="submit" class="login100-form-btn">
                        Sign In
                    </button>
                </div>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/mainlogin.js') }}"></script>
</body>

</html>