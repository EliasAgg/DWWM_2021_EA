@props(['alpha' => array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'X', 'Y', 'Z')])
<ul class="flex justify-around">
    @foreach($alpha as $glyph)
        <li>
            <x-nav-link :href="route('business_filter', $glyph)">{{$glyph}}</x-nav-link>
        </li>
    @endforeach
</ul>
