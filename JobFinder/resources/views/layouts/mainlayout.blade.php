<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Welcome to Job Finder</title>
</head> 
<body>
     <!-- Navigation -->
     <nav>
        <div class="container mx-auto flex justify-between">
            <div class="flex bg-blue-300">
                <a href="#">
                    <img src="logo.svg" class="h-16 inline"/>
                </a>
            </div>
            <div class="flex space-x-3">
                <a href="" class="text-white hover:underline hover:bg-blue-900 rounded bg-blue-700 py-1 px-5 font-semibold text-lg my-auto">Login</a>
                <a href="" class="text-white hover:underline hover:bg-blue-900 rounded bg-blue-700 py-1 px-5 font-semibold text-lg my-auto">Register</a>
            </div>
        </div>
    </nav>
    @yield('content')
</body>
</html>