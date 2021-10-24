<x-app-layout>
    <div>
        <x-slot name="header">
            {{ 'Liste ' . (isset($glyph) ? "des établissements de la lettre $glyph." : ' de tous les établissements.') }}
        </x-slot>
        <x-filter-bar :activeglyph="$glyph ?? false"/>
    </div>
    @if ($businesses->count() > 0)
        <div class="flex flex-col justify-around">
            <div class="flex flex-wrap justify-around">

                @foreach ($businesses as $business)
                    <x-business-small-card :business="$business"/>
                @endforeach

            </div>
        </div>
    @else
        <p class="text-center">Il n'y a aucun établissement dans la section {{ $glyph ?? 'principale' }}</p>
    @endif
</x-app-layout>
