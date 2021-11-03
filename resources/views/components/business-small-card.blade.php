<a href="{{ route('business_details', $business->id) }}">
    <div class="m-4 sm:w-52 w-72 p-3 shadow text-center transition hover:shadow-lg duration-200 ease-in-out">
        <p>{{ strlen($business->name) > 15 ? substr($business->name, 0, 15) . '...' : $business->name }}</p>
        <hr class="my-2">
        <p class="text-sm text-gray-600"><i class="fas fa-phone text-xs text-gray-400 mb-2 mr-1"></i>
            {{ formatPhone($business->phone) }}</p>
        <p class="text-gray-400 text-sm">
            <x-category-icon :id="$business->main_category_id" /> {{ strtolower($business->MainCategory->name) }}
        </p>
    </div>
</a>
