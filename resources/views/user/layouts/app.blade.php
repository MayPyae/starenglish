<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>StarEnglish</title>
    @include('user/layouts/head')
</head>
<body>

     @include('user/layouts/header')

    @yield('content')

    @include('user/layouts/footer')




</body>
</html>
