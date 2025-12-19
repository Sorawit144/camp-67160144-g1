<!-- file: resources/views/html101.blade.php -->
<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <title>HTML 101 - @yield('title')</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: 'Chakra Petch', sans-serif;
            }
        </style>
        @stack('styles')
    </head>

    <body>
        <div class="container mt-4">
            <h1>Workshop HTML 101 - Form</h1>
                @yield('content')
        </div>
        @stack('scripts')
    </body>
</html>