@props([
    'alpha' => ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'X', 'Y', 'Z'],
    'activeglyph'
])

<ul class="sm:justify-around my-4 flex flex-wrap justify-evenly ">
    @foreach ($alpha as $glyph)
        <li>
            <x-nav-link class="sm:text-base text-3xl m-5 sm:m-0" :href="route('business_filter', $glyph)" :active="$glyph == $activeglyph">{{ $glyph }}</x-nav-link>
        </li>
    @endforeach
</ul>
