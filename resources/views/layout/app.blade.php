<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('page-title', '')
    </title>
    @yield('head-cdn')
    @vite('resources/js/app.js')
</head>
<body>
    @include('partials.header')

    <main>
        @yield('main-content')
    </main>

    @include('partials.footer')

    @yield('custom-scripts')
</body>
</html>
