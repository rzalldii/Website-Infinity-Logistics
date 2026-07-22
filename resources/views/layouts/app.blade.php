<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    @include('layouts.partials.head')
</head>

<body class="index-page" x-data="languageSwitcher()">
    @include('layouts.partials.navbar')
    @yield('content')
    @include('layouts.partials.footer')
    @include('layouts.partials.floating-actions')
    @include('layouts.partials.script')
</body>

</html>