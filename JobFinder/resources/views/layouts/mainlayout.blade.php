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
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <!-- Navigation -->
    <div class="flex flex-col min-h-screen ">
        <div class="flex-1">
            <nav class="shadow-b shadow">
                <div class="container mx-auto flex justify-between">
                    <div>
                        <a href="{{ route('/') }}">
                            <img src="{{ asset('logo.svg') }}" class="h-16 inline" />
                        </a>
                    </div>
                    @if (Auth::check())
                        <div>
                            <!-- Settings Dropdown -->
                            <div class="hidden sm:flex sm:items-center sm:ml-6">
                                <x-dropdown align="right" width="48">
                                    <x-slot name="trigger">
                                        <button
                                            class="inline-flex items-center px-3 py-3 border border-transparent text-lg leading-4 font-medium rounded-md text-gray-500 bg-white hover:bg-blue-50 hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                            <div class="mr-2">
                                                @if (empty(Auth::user()->photo))
                                                    <div
                                                        class="h-10 w-10 rounded-full bg-blue-500 text-white uppercase flex items-center justify-center">
                                                        {{ Auth::user()->username[0] }}
                                                    </div>
                                                @else
                                                    <img src="{{ asset('wallpaper.png') }}" alt=""
                                                        class="h-10 w-10 rounded-full object-center">
                                                @endif

                                            </div>
                                            <div>{{ Auth::user()->username }}</div>

                                            <div class="ml-1">
                                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                        </button>
                                    </x-slot>

                                    <x-slot name="content">
                                        <x-dropdown-link :href="route('listings')">
                                            {{ __('Job listing') }}
                                        </x-dropdown-link>
                                        <x-dropdown-link :href="route('profile.edit')">
                                            {{ __('Profile') }}
                                        </x-dropdown-link>
                                        <!-- Authentication -->
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <x-dropdown-link :href="route('logout')"
                                                onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                                {{ __('Log Out') }}
                                            </x-dropdown-link>
                                        </form>
                                    </x-slot>
                                </x-dropdown>
                            </div>

                            <!-- Hamburger -->
                            <div class="-mr-2 flex items-center sm:hidden">
                                <button @click="open = ! open"
                                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 6h16M4 12h16M4 18h16" />
                                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    @else
                        <div class="flex space-x-3">
                            <a href="{{ route('login') }}"
                                class="text-white hover:underline hover:bg-blue-900 rounded bg-blue-700 py-1 px-5 font-semibold text-lg my-auto">Login</a>
                            <a href="{{ route('register') }}"
                                class="text-white hover:underline hover:bg-blue-900 rounded bg-blue-700 py-1 px-5 font-semibold text-lg my-auto">Register</a>
                        </div>
                </div>
                @endif

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
