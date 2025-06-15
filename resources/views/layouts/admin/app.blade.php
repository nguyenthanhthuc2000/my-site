<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Wake Administrator</title>
    <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
    <meta content="Themesdesign" name="author" />
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    @vite([
        'resources/css/metismenu.min.css',
        'resources/css/bootstrap.min.css',
        'resources/scss/icons.scss',
        'resources/scss/style.scss',
        'resources/plugins/morris/morris.css',
    ])
</head>

<body>
    @include('layouts.admin.header')

    <div class="wrapper">
        <div class="container-fluid">
            @include('layouts.admin.breadcrumb')
            @yield('content')
        </div>
    </div>

    @include('layouts.admin.footer')

    @vite([
        'resources/js/jquery.min.js',
        'resources/js/bootstrap.bundle.min.js',
        'resources/js/jquery.slimscroll.js',
        'resources/js/app-tl.js',
    ]);

</body>

</html>