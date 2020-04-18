<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('parts.head')
    </head>
<body>
    <header>
        @include('parts.header')
    </header>

    <main class="py-4">
        @yield('content')
    </main>
</body>
</html>
