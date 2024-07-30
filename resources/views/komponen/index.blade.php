<!DOCTYPE html>
<html lang="en">

<head>
    @include("komponen.css")
</head>

<body>
    @include('komponen.sidebar')

    @yield('content')

    @include('komponen.footer')
    @include('komponen.js')
</body>

</html>
