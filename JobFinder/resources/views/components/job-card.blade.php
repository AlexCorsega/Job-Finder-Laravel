@props(['job'])
<div class="w-full">
    <img src="{{ $job->logo }}" alt="" class="h-28 object-cover w-full">
    <p class="text-blue-500 text-xl font-semibold mt-2">{{ $job->title }}</p>
    <p class="text-gray-500 text-[12px]">{{$job->company}}</p>
    <div class="flex gap-1 flex-wrap mt-3">
        <?php
            $tagsExplode = explode(',',$job->tags);
        ?>
        @foreach ($tagsExplode as $explodedTag)
            <x-category-pill>
                <h5 class="text-[8px] font-semibold text-center">{{filter_var($explodedTag, FILTER_SANITIZE_FULL_SPECIAL_CHARS)}}</h5>
            </x-category-pill>
        @endforeach
    </div>
</div>