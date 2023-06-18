@extends('layouts.mainlayout')


@section('content')
    <div class="pb-10 pt-3">
        <div class="container mx-auto">
            <div class="flex flex-col items-center">
                <div class="min-w-[320px] w-1/2">
                    <div class="flex gap-2 pb-3 flex-wrap">
                        <?php
                        $tagsExplode = explode(',', $job->tags);
                        ?>
                        <h5 class="text-xl font-semibold">Tags: </h5>
                        @foreach ($tagsExplode as $explodedTag)
                            <x-category-pill>
                                <a href="{{route('jobs','tag='.trim($explodedTag))}}" class="text-[14px] font-semibold text-center">
                                    {{ filter_var($explodedTag, FILTER_SANITIZE_FULL_SPECIAL_CHARS) }}</a>
                            </x-category-pill>
                        @endforeach
                    </div>
                    <img src="{{ asset('storage/'.$job->logo) }}" alt="company logo" class="w-full h-80 object-cover">
                    <p class="text-blue-500 text-3xl font-semibold mt-2">{{ $job->title }}</p>
                    <p class="text-gray-500 text-base">{{ $job->company }}</p>

                    <p class="text-md text-justify mt-2 whitespace-pre-wrap">{{ $job->description }}</p>
                    <hr class="w-full my-2">
                    <div class="flex justify-between items-center">
                        <div>
                            <div class="text-base">
                                <?php 
                                    $protocol = Str::startsWith($job->website, 'http','https');
                                    $url = '';
                                    if (!$protocol) {
                                        $url = "http://".$job->website;
                                    }
                                ?>
                                <a href="{{ $url }}" target="_blank"
                                    class="hover:underline hover:text-blue-500 text-gray-500"><i
                                        class="fa-solid fa-globe"></i>
                                    Visit website</a>
                            </div>
                            @if ($job->email)
                                <div class="flex gap-2">
                                    <p>Email me at</p>
                                    <a href="mailto:{{ $job->email }}" class="text-blue-500">{{ $job->email }}</a>
                                </div>
                            @else
                            @endif
                        </div>
                        <div class="text-center">
                            @if (Auth::check())
                                <button
                                    class="border hover:bg-blue-500 bg-orange-600 rounded text-xl py-2 px-8 font-semibold text-white">
                                    Apply
                                </button>
                            @else
                                <a href="{{ route('login') }}"
                                    class="text-white bg-blue-700 hover:bg-blue-500 rounded text-xl py-2 px-6 font-bold">
                                    Apply
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
