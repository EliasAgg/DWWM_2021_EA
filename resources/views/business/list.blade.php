<x-guest-layout>
    @if ($businesses->count() > 0)
        @if ($glyph ?? false)
            <p class="text-center">Établissements de la lettre {{ $glyph }}</p>
        @endif
        <div class="flex flex-wrap justify-around">

            @foreach ($businesses as $business)
                <div class="m-4 w-52 p-3 shadow-md">
                    <p>{{ $business->name }}</p>
                    <hr class="my-2">
                    <p>{{ $business->email }}</p>
                </div>
            @endforeach

        </div>
    @else
        <p class="text-center">Il n'y a aucun établissement dans la section {{ $glyph ?? 'principale' }}</p>
    @endif
</x-guest-layout>
