<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $business->name }}
        </h2>
    </x-slot>

    <p>{{ $business->name }}</p>
    <p>{{ $business->activity }}</p>
    <p>{{ $business->description }}</p>
    <p>{{ $business->address }}</p>
    <p>{{ $business->email }}</p>
    <p>{{ $business->link }}</p>
</x-app-layout>
