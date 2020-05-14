<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('parts.head')
    </head>
<body>
    <header>
        @include('parts.header')
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="mt-5">
        @include('parts.footer')
    </footer>
</body>
</html>
