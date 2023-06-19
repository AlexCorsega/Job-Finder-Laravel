@extends('layouts.mainlayout')

@section('content')
    <x-container class="my-2 flex flex-col justify-center items-center">
        @if (session()->has('message'))
            <x-alert type="1" class="w-full">{{ session('message') }}</x-alert>
        @endif
        <form action="{{ route('listing.update', $listing->id) }}" enctype="multipart/form-data" method="post">
            @csrf
            <img src="{{ asset('storage/' . $listing->logo) }}" class="object-cover h-44" alt="{{ $listing->company }} logo">
            <div class="mb-2 w-96">
                <label for="company" class="text-lg font-semibold block mb-1">Company</label>
                <x-text-input type="text" class="w-full" name="company" id="company" value="{{ $listing->company }}">
                </x-text-input>
                <x-input-error :messages="$errors->get('company')" class="mt-2" />
            </div>
            <div class="my-2 w-96">
                <label for="title" class="text-lg font-semibold block mb-1">Title</label>
                <x-text-input type="text" class="w-full" name="title" id="title" value="{{ $listing->title }}">
                </x-text-input>
                <x-input-error :messages="$errors->get('title')" class="mt-2" />
            </div>
            <div class="my-2 w-96">
                <label for="tags" class="text-lg font-semibold block mb-1">Tags</label>
                <x-text-input type="text" class="w-full" name="tags" id="tags" value="{{ $listing->tags }}">
                </x-text-input>
                <x-input-error :messages="$errors->get('tags')" class="mt-2" />
            </div>
            <div class="my-2 w-96">
                <label for="jobtype" class="text-lg font-semibold block mb-1">Employment Type</label>
                <x-input-select type="text" name="jobtype" id="jobtype" value="{{ old('jobtype') }}"
                    class="rounded-md text-lg w-full focus:bg-blue-50 focus:border-2 py-1 px-2 border  border-gray-300 outline-blue-500 outline-2">
                    @foreach ($jobtypes as $jobtype)
                        @if ($jobtype->id == $listing->jobType->id)
                            <option value="{{ $jobtype->id }}" selected>{{ $jobtype->Type }}</option>
                        @else
                            <option value="{{ $jobtype->id }}">{{ $jobtype->Type }}</option>
                        @endif
                    @endforeach
                </x-input-select>
                <x-input-error :messages="$errors->get('jobtype')" class="mt-2" />
            </div>
            <div class="my-2 w-96">
                <label for="location" class="text-lg font-semibold block mb-1">Location</label>
                <x-text-input type="text" class="w-full" name="location" id="location"
                    value="{{ $listing->location }}">
                </x-text-input>
                <x-input-error :messages="$errors->get('location')" class="mt-2" />
            </div>
            <div class="my-2 w-96">
                <label for="email" class="text-lg font-semibold block mb-1">Email</label>
                <x-text-input type="text" class="w-full" name="email" id="email" value="{{ $listing->email }}">
                </x-text-input>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <div class="my-2 w-96">
                <label for="website" class="text-lg font-semibold block mb-1">Website </label>
                <x-text-input type="text" class="w-full" name="website" id="website" value="{{ $listing->website }}">
                </x-text-input>
                <x-input-error :messages="$errors->get('website')" class="mt-2" />
            </div>
            <div class="my-2 w-96">
                <label for="description" class="text-lg font-semibold block mb-1">Description</label>
                <x-textarea rows="8" class="resize-none" name="description" id="description">
                    {{ $listing->description }}</x-textarea>
                <x-input-error :messages="$errors->get('description')" class="mt-2" />
            </div>
            <div class="my-2 mt-4 w-96 text-center">
                <button type="submit" class="rounded w-20 py-2 bg-blue-500 font-normal text-white">Update</button>
            </div>
        </form>
        <div class="my-2 mt-4 w-96 text-center">
            <form action="{{route('listing.delete',$listing->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="rounded w-20 py-2 bg-red-500 font-normal text-white">Delete</button>
            </form>
        </div>
    </x-container>
@endsection
