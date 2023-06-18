@extends('layouts.mainlayout')


@section('content')
    <div class="container mx-auto pb-8">
        <div class="flex pt-3 gap-3">
            <!--Side Bar -->
            <section class="w-64 shadow p-3 pb-6 h-fit rounded-xl space-y-2 border-gray-300 border text-lg">
                <h5 class="text-xl font-semibold">Filter</h5>
                <hr>
                <div>
                    <div class="mt-3 space-y-1">
                        <h5 class="text-base uppercase text-gray-500 font-semibold">Job Category</h5>
                        <select name="tags" id="tags"
                            class="py-2 px-2 w-full text-gray-600 border border-gray-300 bg-white shadow rounded">
                            <option value="tag">None</option>
                            @foreach ($tags as $tag)
                                <option value="{{ $tag }}">{{ $tag->Category }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mt-3 space-y-1">
                        <h5 class="text-base uppercase text-gray-500 font-semibold">Employment Type</h5>
                        @foreach ($types as $key => $type)
                            <div>
                                <label for="{{ $key }}" class="text-md">
                                    <input type="radio" name="jobtype" id="{{ $key }}" class="text-2xl">
                                    <span class="ms-2">{{ $type->Type }}</span>
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>

            </section>
            <section class="flex-1 p-3 rounded-xl space-y-2">
                <form action="{{ route('jobs') }}" method="get">
                    <div class="flex justify-center text-lg">
                        <div class="relative w-[300px] sm:w-[500px]">
                            <input type="text" name="search" value="{{ request('search') }}"
                                class="w-full text-xl py-2 shadow-md px-3 ps-10 focus:outline-gray-500 ring-0 focus:border-none focus:ring-0 rounded-full border border-gray-300"
                                placeholder="Search job">
                            <i class="fa-solid fa-magnifying-glass absolute left-4 text-lg mt-2"></i>
                            <button type="submit"
                                class="rounded-full mt-[5px] px-4 py-1 bg-gray-900 text-white font-semibold absolute right-2 text-md hover:bg-gray-500">Search</button>
                        </div>
                    </div>
                </form>
                <div class="flex flex-col">
                    @if (request('search'))
                        <div class="text-xl text-gray-700 mt-2">
                            <p>Showing results of <span class="font-semibold"> {{ request('search') }} </span></p>
                        </div>
                    @endif
                    @if ($jobs->count() > 0)
                        <div class="mt-4 flex gap-4 flex-wrap justify-start">
                            @foreach ($jobs as $job)
                                <div class="shadow-md w-72 relative
                                ">
                                    <div class="p-2 mb-20">
                                        <x-job-card :job="$job"></x-job-card>
                                    </div>
                                    <div class="absolute bottom-0 left-0 right-0">
                                        <div class="mt-4 p-2">
                                            <a href="{{ route('jobs.job', $job->id) }}"
                                                class="text-sm text-blue-500 hover:underline hover:text-blue-900">See more
                                                <i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                        <div class="text-center bg-neutral-100 border-t mt-2 flex-1">
                                            <p class="text-md py-1 font-medium text-dark">{{ $job->jobType->Type }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="self-center text-center mt-8">
                            <h5 class="text-2xl">No results found.</h5>
                        </div>
                    @endif
                </div>
                <div class="mt-6 p-3">
                    {{ $jobs->links() }}
                </div>
            </section>
        </div>
    </div>
@endsection
