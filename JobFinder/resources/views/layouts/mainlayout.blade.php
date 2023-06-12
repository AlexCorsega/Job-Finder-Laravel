<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- @vite('resources/css/app.css') --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Welcome to Job Finder</title>
</head>

<body>
    <!-- Navigation -->
    <div class="flex flex-col min-h-screen">
        <div class="flex-1">
            <nav>
                <div class="container mx-auto flex justify-between">
                    <div class="flex bg-blue-300">
                        <a href="{{route('/')}}">
                            <img src="{{ asset('logo.svg') }}" class="h-16 inline" />
                        </a>
                    </div>
                    <div class="flex space-x-3">
                        <a href="{{ route('login') }}"
                            class="text-white hover:underline hover:bg-blue-900 rounded bg-blue-700 py-1 px-5 font-semibold text-lg my-auto">Login</a>
                        <a href="{{ route('register') }}"
                            class="text-white hover:underline hover:bg-blue-900 rounded bg-blue-700 py-1 px-5 font-semibold text-lg my-auto">Register</a>
                    </div>
                </div>
            </nav>
            <main>
                @yield('content')
            </main>
        </div>

        {{-- Footer --}}
        <footer class="bg-black p-4">
            <div class="container mx-auto">
                <div class="flex flex-col sm:flex-row">
                    <div class="flex-1 mt-3 flex justify-center items-center gap-5 text-5xl text-white">
                        <a href=""><i class="fa-brands fa-facebook"></i></a>
                        <a href=""><i class="fa-brands fa-twitter"></i></a>
                        <a href=""><i class="fa-brands fa-instagram"></i></a>
                    </div>
                    <div class="flex-1 mt-3 text-white flex flex-col justify-center items-center text-lg">
                        <div class="text-center mb-1">
                            <h5 class="text-xl font-semibold">Site Links</h5>
                        </div>
                        <a href="" class="hover:underline w-fit">Home</a>
                        <a href="" class="hover:underline w-fit">Jobs</a>
                        <a href="" class="hover:underline w-fit">Login</a>
                        <a href="" class="hover:underline w-fit">Register</a>
                    </div>
                    <div class="flex-fill mt-3 text-white text-lg text-center sm:text-start">
                        <div class="text-center mb-1">
                            <h5 class="text-xl font-semibold">Contact Information</h5>
                        </div>
                        <p>
                            <i class="fa-solid fa-location-dot"></i>
                            1234 Maple Street
                            Anytown, USA
                        </p>
                        <p class="mt-2">
                            <i class="fa-solid fa-address-book"></i>
                            +1 (555) 123-4567
                        </p>
                        <p class="mt-2">
                            <i class="fa-solid fa-envelope"></i>
                            example123@email.com
                        </p>
                    </div>
                </div>
                <div class="text-center text-white mt-3">
                    <p>Copyright &copy; {{ date('Y') }}, All Rights Reserved</p>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>
