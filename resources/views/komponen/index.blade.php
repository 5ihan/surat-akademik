<!DOCTYPE html>
<html lang="en">

    <head>
        @include('komponen.css')
    </head>

    <body>
        @include('komponen.sidebar')

        @yield('content')

        @include('komponen.footer')
        @include('komponen.js')

        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script>
            // Implement Sweetalert ketika ada session error dan success dari PHP
            @if (session('error'))
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: '{{ session('error') }}'
                })
            @endif
            @if (session('success'))
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: '{{ session('success') }}'
                })
            @endif
        </script>
    </body>

</html>
