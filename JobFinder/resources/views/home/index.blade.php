@extends('layouts.mainlayout')

@section('content')
    <div>
        <div class="bg-blue-50" style="height:90vh;">
            <section class="lg:container flex flex-col md:flex-row mx-auto py-12">
                <div class="flex-1 px-8">
                    <h1 class="text-center text-5xl font-bold">
                        Find your dream
                        <br>
                        jobs here
                    </h1>
                    <p class="mt-3 text-gray-500 text-justify md:text-left text-lg">
                        Welcome to JobFinder, where your career aspirations take flight! Whether you're a seasoned
                        professional or a fresh graduate, we're here to guide you in finding the perfect job that aligns
                        with your skills, interests, and goals.
                    </p>
                    <div class="text-center mt-8">
                        <a href="{{route('jobs')}}"
                            class="rounded-full bg-blue-700 hover:bg-blue-900 py-2 px-5 font-bold text-white text-xl">Find
                            Jobs</a>
                    </div>
                </div>
                <div class="flex-1 relative text-center">
                    {{-- <img src="banner2.svg" alt="first banner" class="absolute hidden md:block rounded left-0 bottom-12 h-32">
                <img src="banner3.svg" alt="second banner" class="absolute hidden md:block rounded right-0 bottom-8 h-32"> --}}
                    <img src="index-bg.svg" class="object-cover mx-auto md:h-96 lg:h-full" alt="job background">
                </div>
            </section>
        </div>
        <section class="container mt-8 sm:mt-0 h-screen mx-auto flex flex-col md:flex-row py-16">
        
            <div class="px:0 md:px-28 flex-1">
                <div class="text-center">
                    <h5 class="text-4xl font-bold">Choose a different jobs from</h5>
                </div>
                <div class="flex justify-center flex-wrap sm:justify-start gap-5 mt-8 ">
                    @foreach ($JobCategories as $item)
                        <x-category-pill>
                            <h5 class="text-lg font-semibold">{{ $item->Category }}</h5>
                        </x-category-pill>
                    @endforeach
                </div>
                <div class="text-md font-semibold mt-8">
                    <p>
                        Discover your ideal IT career path with our website. Explore a vast array of opportunities, connect
                        with leading employers, and pave the way to a fulfilling future in the world of technology.
                    </p>
                    {{-- <div class="text-center mt-8">
                    <a href="#" class="rounded-full bg-blue-700 hover:bg-blue-900 py-2 px-5 font-bold text-white text-xl">Find Jobs</a>
                </div> --}}
                </div>
            </div>
            <div class="flex-1 text-md space-y-8 mt-8 sm:mt-0">
                <x-previlige number="1" header="Choose from a wide variety of jobs"
                    paragraph="Open the door to a world of endless possibilities and select from a vast spectrum of rewarding careers, tailored to your unique aspirations and passions. Each offering its own unique path to success, and choose the one that resonates with your aspirations." />
                <x-previlige number="2" header="Enjoy the freedom to work at your convenience"
                    paragraph="Empower yourself with flexible work arrangements that honor your personal rhythm, allowing you to embrace work-life harmony and unlock your full potential." />
                <x-previlige number="3" header="Determine your salary based on the value of your skills"
                    paragraph="Embrace the autonomy to establish a deserving salary that reflects the intrinsic value of your unique skill set, empowering you to thrive and achieve your financial aspirations." />
                <div class="mt-8 text-center">
                    <div class="text-center mt-8">
                        <a href="#"
                            class="rounded-full bg-blue-700 hover:bg-blue-900 py-2 px-5 font-bold text-white text-xl">Find
                            Jobs</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
