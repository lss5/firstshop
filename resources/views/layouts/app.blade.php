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

    <footer class="footer2">
        {{-- @include('parts.footer'); --}}
    </footer>
</body>
</html>
