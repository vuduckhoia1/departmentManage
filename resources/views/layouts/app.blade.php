<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    @include('partials.navbar')
    @include('partials.sidebar')
    <div class="container pt-5">
        <div class="container pt-5">
            @yield('content')
        </div>
    </div>
    @include('partials.footer')
</body>
</html>