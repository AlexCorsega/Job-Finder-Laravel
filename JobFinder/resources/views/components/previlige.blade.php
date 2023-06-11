@props(['number','header','paragraph'])
<div>
    <div class="flex gap-2">
        <p class="rounded-full py-1 px-3 bg-orange-500 text-white h-fit">{{$number}}</p>
        <p class="text-lg text-center font-semibold bg-orange-100 px-2">{{$header}}</p>
    </div>
    <div class="mt-3 text-md">
        <p>
            {{$paragraph}}    
        </p>
    </div>
</div>