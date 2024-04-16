<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    
    <!-- Scripts -->
    @vite(['resources/js/app.js'])

    @vite(['resources/css/app.css'])
    
</head>
<body>
    <main class="">
        

        <div class="container text-center float-start position-absolute">
            <div class="row align-items-start">

                @yield('content')
            </div>
        </div>
            
    </main>

</body>
</html>