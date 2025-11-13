<!DOCTYPE html>
<html lang="en">

<x-head />

<body class="bg-neutral-0 dark:bg-neutral-dark-0">
    <x-header />

    @yield('content')

    <x-footer />

    <x-scripts />

    @stack('scripts')
</body>

</html>
