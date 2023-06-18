@props(['job'])
<div class="w-full">
    <img src="{{asset('storage/'.$job->logo) }}" alt="" class="h-28 object-cover w-full">
    <p class="text-blue-500 text-xl font-semibold mt-2 line-clamp-2">{{ $job->title }}</p>
    <p class="text-gray-500 text-[14px] line-clamp-1">{{ $job->company }}</p>
    <div class="flex gap-1 flex-wrap mt-3 overflow-hidden h-8">
        <?php
        $tagsExplode = explode(',', $job->tags);
        ?>
        @foreach ($tagsExplode as $explodedTag)
        <x-category-pill class="h-fit">
            <p
            class="text-[10px] font-semibold text-center">{{ filter_var($explodedTag, FILTER_SANITIZE_FULL_SPECIAL_CHARS) }}</p>
        </x-category-pill>
        @endforeach
    </div>
    <p class="text-gray-900 text-[14px] mt-2 line-clamp-1"><i class="fa-solid fa-location-dot"></i> {{ $job->location }}</p>
</div>
