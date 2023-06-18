@props(['header','subHeader'])
<div class="text-center">
    <h1 class="text-4xl font-bold">{{$header ?? ''}}</h1>
    <h5 class="text-md text-gray-500 mt-1">{{$subHeader ?? ''}}</h5>
</div>