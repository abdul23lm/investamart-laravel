<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- Favicon -->
    <link href="frontend/images/favicon.png" rel="icon">
    <link href="frontend/images/favicon.png" rel=" apple-touch-icon">

    @stack('style')
    @include('components.includes.style')

    </head>
<body>

    @yield('content')


    @include('components.includes.script')
    @stack('script')
</body>
</html>