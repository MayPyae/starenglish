<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin/layouts/head')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('admin/layouts/header')
        @include('admin/layouts/sidebar')

        <div class="content-wrapper">
            @yield('main-content')
        </div>

        @include('admin/layouts/footer')
    </div>
</body>
</html>