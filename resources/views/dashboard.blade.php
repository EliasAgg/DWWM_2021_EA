<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <p class="text-center mt-10">Bonjour, {{ Auth::user()->name }}.</p>
    @if (Auth::user()->is_admin)
    <p class="text-center mt-10">Vous êtes administrateur du système.</p>
    @endif
</x-app-layout>
