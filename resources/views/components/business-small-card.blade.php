<a href="{{ route('single', $business->id) }}">
    <div class="m-4 w-52 p-3 shadow text-center transition hover:shadow-lg duration-200 ease-in-out">
        <p>{{ $business->name }}</p>
        <hr class="my-2">
        <p class="text-sm text-gray-600"><i class="fas fa-phone text-xs text-gray-400 mb-2 mr-1"></i> {{ $business->phone }}</p>
        <p class="text-gray-400 text-sm">
            <x-category-icon :id="$business->main_category_id" /> {{ strtolower($business->MainCategory->name) }}
        </p>
    </div>
</a>
