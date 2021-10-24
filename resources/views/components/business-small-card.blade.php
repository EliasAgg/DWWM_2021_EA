<a href="{{ route('single', $business->id) }}">
    <div class="m-4 w-52 p-3 shadow-md text-center">
        <p>{{ $business->name }}</p>
        <hr class="my-2">
        <p class="text-gray-400">{{ strtolower($business->mainCategory->name) }}</p>
    </div>
</a>
