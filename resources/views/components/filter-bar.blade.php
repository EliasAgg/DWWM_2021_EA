@props([
    'alpha' => ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'X', 'Y', 'Z'],
    'activeglyph'
])

<ul class="flex justify-around my-4">
    @foreach ($alpha as $glyph)
        <li>
            <x-nav-link :href="route('business_filter', $glyph)" :active="$glyph == $activeglyph">{{ $glyph }}</x-nav-link>
        </li>
    @endforeach
</ul>
