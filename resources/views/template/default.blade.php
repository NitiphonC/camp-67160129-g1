<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">

    {{-- Bootstrap --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

    {{-- Custom CSS --}}
    @yield('style')

    <title>@yield('title', 'Workshop')</title>
</head>
<body>

    {{-- Content --}}
    <div class="container mt-4">
        @yield('content')
    </div>

    {{-- Script --}}
    @yield('script')

</body>
</html>
