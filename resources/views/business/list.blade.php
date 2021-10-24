<x-app-layout>
    <div>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ 'Liste ' . (isset($glyph) ? "des établissements de la lettre $glyph." : ' de tous les établissements.') }}
            </h2>
        </x-slot>
        <x-filter-bar :activeglyph="$glyph ?? false" />
    </div>
    <div class="flex flex-col justify-between">
        <div>
            @if ($businesses->count() > 0)
                <div class="flex flex-col justify-around">
                    <div class="flex flex-wrap justify-around">

                        @foreach ($businesses as $business)
                            <x-business-small-card :business="$business" />
                        @endforeach

                    </div>
                </div>
            @else
                <p class="text-center">Il n'y a aucun établissement dans la section {{ $glyph ?? 'principale' }}</p>
            @endif
        </div>
        <x-slot name="pagination">
            @if ($businesses instanceof \Illuminate\Contracts\Pagination\LengthAwarePaginator)
                <div class="w-2/3 mx-auto">
                    {{ $businesses->links() }}
                </div>
            @endif
        </x-slot>
    </div>

</x-app-layout>
