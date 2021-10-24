<x-app-layout>
    <x-slot name="header">
        {{ $business->name }}
    </x-slot>
    <p>{{$business->name}}</p>
    <p>{{$business->activity}}</p>
    <p>{{$business->description}}</p>
    <p>{{$business->address}}</p>
    <p>{{$business->email}}</p>
    <p>{{$business->link}}</p>
</x-app-layout>