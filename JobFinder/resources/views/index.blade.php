@extends('layouts.mainlayout')

@section('content')
   <div class="bg-blue-50" style="height:90vh;">
        <div class="container flex flex-col md:flex-row mx-auto py-12">
            <div class="flex-1 px-8">
                <h1 class="text-center text-5xl font-bold">
                    Find your dream 
                    <br>
                    jobs here
                </h1>
                <p class="mt-3 text-gray-500 text-justify md:text-left">
                    Welcome to JobFinder, where your career aspirations take flight! Whether you're a seasoned professional or a fresh graduate, we're here to guide you in finding the perfect job that aligns with your skills, interests, and goals. 
                </p>
                <div class="text-center mt-8">
                    <a href="#" class="rounded-full bg-blue-500 py-1 px-4 font-semibold text-white text-2xl">Find Jobs</a>
                </div>
            </div>
            <div class="flex-1 relative text-center">
                {{-- <img src="banner2.svg" alt="first banner" class="absolute hidden md:block rounded left-0 bottom-12 h-32">
                <img src="banner3.svg" alt="second banner" class="absolute hidden md:block rounded right-0 bottom-8 h-32"> --}}
                <img src="index-bg.svg" class="object-cover mx-auto" alt="job background" style="height:70vh;">
            </div>
        </div>
    </div>
@endsection