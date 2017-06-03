<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <title>Tracker</title>
        <link href="/css/app.css" rel="stylesheet">
    </head>
    <body>
        @include('partials.headernav')

        @yield('content')

        @include('partials.footer')
    </body>
</html>