<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <x-a-header />
</head>

<body>

    <!-- <x-a-loader /> -->
    <x-a-navbar />

    @yield('content')

    <x-a-footer />
    <x-a-script />


</body>

</html>