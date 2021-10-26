<x-app-layout>
    <div>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Liste
                {{ isset($glyph) ? "des établissements de la lettre $glyph." : ' de tous les établissements.' }}
            </h2>
        </x-slot>
        <x-filter-bar :activeglyph="$glyph ?? false" />
    </div>
    <div class="flex flex-col justify-between antialiased">
        <div>
            @if ($businesses->count() > 0)
                <div class="flex flex-col justify-around mt-5">
                    <div class="flex flex-wrap justify-center sm:justify-start">

                        @foreach ($businesses as $business)
                            <x-business-small-card :business="$business" :loop="$loop" />
                        @endforeach

                    </div>
                </div>
            @else
                <p class="text-center sm:mt-40 text-xl shadow-md mx-auto w-1/2 p-5 text-gray-300">Il n'y a aucun
                    établissement dans la section {{ $glyph ?? 'principale' }}</p>
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
