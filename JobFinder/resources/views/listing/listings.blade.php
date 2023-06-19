@extends('layouts.mainlayout')

@section('content')
    <x-container class="mt-2">
        <table class="table-auto w-full">
            <thead class="bg-gray-100 border border-gray">
                <tr class="border-b">
                    <th class="py-2">Title</th>
                    <th class="py-2">Company</th>
                    <th class="py-2">Tags</th>
                    <th class="py-2">Action</th>
                </tr>
            </thead>
            <tbody class="">
                @foreach ($listings as $item)
                <tr class="border-b odd:bg-white even:bg-slate-50">
                        
                    <td class="text-center py-3 text-gray-500">{{$item->title}}</td>
                    <td class="text-center py-3 text-gray-500">{{$item->company}}</td>
                    <td class="text-center py-3 text-gray-500">{{$item->tags}}</td>
                    <td class="text-center py-3 text-gray-500">
                        <a href="{{route('listings.id',$item->id)}}" class="rounded py-2 px-3 bg-blue-500 text-white">Managed</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </x-container>
@endsection
