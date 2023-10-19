<!DOCTYPE html>
<html lang="en">

@include('layouts.header')

<title>{{ $title ?? "JRU" }}</title>
<body>

    @include('layouts.nav')

    {{-- Body --}}
    @yield('content')

    @include('layouts.footer')

    <script src="{{asset('assets/core-2.11.7/package/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap-5.2.3-dist/js/bootstrap.min.js')}}"></script>
</body>

</html>
