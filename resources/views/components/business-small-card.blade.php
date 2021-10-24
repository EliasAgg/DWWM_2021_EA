<a href="{{ route('single', $business->id) }}">
    <div class="m-4 w-52 p-3 shadow-md text-center">
        <p>{{ $business->name }}</p>
        <hr class="my-2">
        {{-- {{dd($business)}} --}}
        <p class="text-gray-400 text-sm"><x-category-icon :id="$business->main_category_id"/> {{ strtolower($business->MainCategory->name) }}</p>
    </div>
</a>
