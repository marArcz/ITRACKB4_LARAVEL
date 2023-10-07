<!DOCTYPE html>
<html lang="en">

@include('layouts.header')

<body>

    @include('layouts.nav')

    {{-- Body --}}
    @yield('content')

    @include('layouts.footer')

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>

</html>
