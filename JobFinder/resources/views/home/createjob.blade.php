@extends('layouts.mainlayout')

@section('content')

    <div class="flex justify-center mb-10">
        <form action="{{ route('jobs.create.post') }}" method="post" enctype="multipart/form-data"
            class="shadow-lg py-5 px-10 rounded-lg min-w-[300px] md:w-[500px]">
            @if (Session::has('success'))
                <x-alert type="1">{{ session('success') }}</x-alert>
            @endif
            @csrf
            <div class="text-center mb-3">
                <h1 class="font-bold text-4xl mb-1">Create a new job</h1>
                <h5 class="text-gray-500">Hire the best developers out there!</h5>
            </div>
            <div class="mb-2">
                <label for="company" class="text-lg font-semibold block mb-1">Company</label>
                <input type="text" name="company" id="company" value="{{ old('company') }}"
                    class="rounded-md text-lg w-full focus:bg-blue-50 focus:border-2 py-1 px-2 border  border-gray-300 outline-blue-500 outline-2">
                @error('company')
                    <p class="text-red-500 text-base mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-2">
                <label for="title" class="text-lg font-semibold block mb-1">Title</label>
                <input type="text" name="title" id="title" value="{{ old('title') }}"
                    class="rounded-md text-lg w-full focus:bg-blue-50 focus:border-2 py-1 px-2 border  border-gray-300 outline-blue-500 outline-2">
                @error('title')
                    <p class="text-red-500 text-base mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-2">
                <label for="tags" class="text-lg font-semibold block mb-1">Tags </label>
                <input type="text" name="tags" id="tags" placeholder="Separated by comma(',')"
                    value="{{ old('tags') }}"
                    class="rounded-md text-lg w-full focus:bg-blue-50 focus:border-2 py-1 px-2 border  border-gray-300 outline-blue-500 outline-2">
                @error('tags')
                    <p class="text-red-500 text-base mt-1">{{ $message }}</p>
                @enderror
            </div>
              <div class="mb-2">
                <label for="jobtype" class="text-lg font-semibold block mb-1">Tags </label>
                <select type="text" name="jobtype" id="jobtype" 
                    value="{{ old('jobtype') }}"
                    class="rounded-md text-lg w-full focus:bg-blue-50 focus:border-2 py-1 px-2 border  border-gray-300 outline-blue-500 outline-2">
                    @foreach ($jobtypes as $jobtype)
                        <option value="{{$jobtype->id}}">{{$jobtype->Type}}</option>
                    @endforeach
                </select>
                @error('jobtype')
                    <p class="text-red-500 text-base mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-2">
                <label for="logo" class="text-lg font-semibold block mb-1">Logo</label>
                <input type="file" name="logo" id="logo" value="{{ old('logo') }}"
                    class="rounded-md text-lg w-full focus:bg-blue-50 focus:border-2 py-1 px-2 border  border-gray-300 outline-blue-500 outline-2">
                @error('logo')
                    <p class="text-red-500 text-base mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-2">
                <label for="location" class="text-lg font-semibold block mb-1">Job Location</label>
                <input type="text" name="location" id="location" value="{{ old('location') }}"
                    class="rounded-md text-lg w-full focus:bg-blue-50 focus:border-2 py-1 px-2 border  border-gray-300 outline-blue-500 outline-2">
                @error('location')
                    <p class="text-red-500 text-base mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-2">
                <label for="email" class="text-lg font-semibold block mb-1">Email</label>
                <input type="text" name="email" id="email" value="{{ old('email') }}"
                    class="rounded-md text-lg w-full focus:bg-blue-50 focus:border-2 py-1 px-2 border  border-gray-300 outline-blue-500 outline-2">
                @error('email')
                    <p class="text-red-500 text-base mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-2">
                <label for="website" class="text-lg font-semibold block mb-1">Website</label>
                <input type="text" name="website" id="website" value="{{ old('website') }}"
                    class="rounded-md text-lg w-full focus:bg-blue-50 focus:border-2 py-1 px-2 border  border-gray-300 outline-blue-500 outline-2">
                @error('website')
                    <p class="text-red-500 text-base mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label for="description" class="text-lg font-semibold block mb-1">Job Description</label>
                <textarea name="description" id="description" rows="5"
                    class="rounded-md text-lg w-full resize-none focus:bg-blue-50 focus:border-2 py-1 px-2 border  border-gray-300 outline-blue-500 outline-2">{{ old('desctiption') }}</textarea>
                @error('description')
                    <p class="text-red-500 text-base mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="text-center">
                <button class="bg-blue-500 text-lg py-2 px-3 rounded font-semibold text-white">Submit</button>
            </div>
        </form>
    </div>


    
@endsection
