<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>eLazula - Monitoring Hidroponik</title>
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('back/vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/auth/iofrm-style.css')}}">
    <link rel="stylesheet" href="{{asset('css/auth/iofrm-theme22.css')}}">
    <link rel="shortcut icon" href="{{ asset('back/images/logo-new.svg')}}" />
    <style>
        body {
            background: url(https://images.unsplash.com/photo-1654331045612-b85b632d57bf) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

    </style>
</head>

<body>
    @yield('content')
    <script src="{{asset('front/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('front/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('front/js/popper.min.js')}}"></script>
    <script src="{{asset('js/auth/main.js')}}"></script>
</body>

</html>
