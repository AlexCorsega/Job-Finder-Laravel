@props(['type'])
@if ($type == '1')
    <div {{$attributes->merge(['class'=>'py-2 px-3 bg-green-400 rounded my-2'])}}>
        <p class="text-lg">{{$slot}}</p>
    </div>
@endif