<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <x-dashboard.head/>
</head>
<body>
    <div id="app">
        
        <x-navbar/>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <x-dashboard.foot/>

</body>
</html>
