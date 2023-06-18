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
    <div class="flex">
        <div class="w-52 bg-blue-700 h-screen pt-3">
            <div>
                @if (empty(Auth::user()->photo))
                    <div class="flex items-center justify-center mx-auto uppercase h-36 w-36 bg-white rounded-full">
                        <span class="text-7xl mb-4">{{ Auth::user()->username[0] }}</span>
                    </div>
                @else
                    <div class="flex justify-center">
                        <img src="{{ asset('logo.svg') }}" alt=""
                            class="h-36 w-36 text-center object-cover bg-black" style="border-radius: 6.5rem;">
                    </div>
                @endif
                {{-- <div class="text-center mt-4">
                    <label for="profile" class="rounded text-white cursor-pointer bg-gray-900 py-2 px-4 hover:bg-gray-700">
                        Change Profile
                        <input type="file" name="" id="profile" hidden>
                    </label>
                </div> --}}
            </div>
            <!--Navigation side bar -->
            <div class="mt-3 text-center" >
                <a href="" class="block transition-all duration-200  ease-in text-white text-lg hover:bg-gray-900 bg-gray-900 hover:text-white font-semibold py-2">Dashboard</a>
                <a href="" class="block transition-all duration-200  ease-in text-white text-lg hover:bg-gray-900 hover:text-white font-semibold py-2">Jobs</a>
                <a href="" class="block transition-all duration-200  ease-in text-white text-lg hover:bg-gray-900 hover:text-white font-semibold py-2">Status</a>
            </div>
        </div>
        <div class="flex-1">
            <div class="border-b shadow-md">
                <x-container class="px-10 sm:px-0">
                    <div class="flex justify-end">
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
                                                        class="h-10 w-10 rounded-full bg-orange-500 text-white uppercase flex items-center justify-center">
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
                    </div>
                </x-container>
            </div>
            <main>
                @yield('main')
            </main>
        </div>
    </div>
    <footer>
        @yield('footer')
    </footer>
</body>

</html>
