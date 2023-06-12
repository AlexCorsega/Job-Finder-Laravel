@extends('layouts.mainlayout')


@section('content')
    <div class="container mx-auto">
        <div class="flex pt-3 gap-3">
            <!--Side Bar -->
            <section class="w-64 shadow p-3 rounded-xl space-y-2 border-gray-300 border text-lg">
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
                <form action="#" method="get">
                    <div class="flex justify-center text-lg">
                        <div class="relative w-[300px] sm:w-[500px]">
                            <input type="text"
                                class="w-full text-xl py-2 shadow-md px-3 ps-10 focus:outline-gray-400 rounded-full border border-gray-300"
                                placeholder="Search job">
                            <i class="fa-solid fa-magnifying-glass absolute left-4 text-lg mt-2"></i>
                            <button
                                class="rounded-full mt-[5px] px-4 py-1 bg-gray-900 text-white font-semibold absolute right-2 text-md hover:bg-gray-500">Search</button>
                        </div>
                    </div>
                </form>
                <div class="mt-4 flex gap-4 flex-wrap justify-center">
                    @foreach ($jobs as $job)
                      <div class="p-2 pb-5 shadow-md w-72">
                        <x-job-card :job="$job"></x-job-card>
                          <div class="mt-4">
                              <a href="{{route('jobs.job',$job->id)}}" class="text-sm text-blue-500 hover:underline hover:text-blue-900">See more <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
        </div>
    </div>
@endsection
