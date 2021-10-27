<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Administration de {{ $business->name }}
        </h2>
    </x-slot>

    @if ($success ?? false)
        <x-success-alert>
            {{ $message }}
        </x-success-alert>
    @endif

    <div class="bg-white relative shadow-xl w-5/6 md:w-4/6  lg:w-3/6 xl:w-2/6 mx-auto rounded-lg">
        <div class="mt-16">
            <x-color-admin-card-heading :id="$business->main_category_id"/>
            <h1 class="font-bold text-center text-3xl mt-3 text-gray-700 font-mono">{{ $business->name }}</h1>
            <div class="w-full">
                <div class="mt-5 w-full text-left">
                    <p href="#"
                        class="border-t-2 border-gray-100 font-medium text-gray-600 py-4 px-4 w-full block hover:bg-gray-100 transition duration-150">
                        <span class="font-bold">Lettre:</span> {{ $business->glyph }}
                    </p>
                    <p href="#"
                        class="border-t-2 border-gray-100 font-medium text-gray-600 py-4 px-4 w-full block hover:bg-gray-100 transition duration-150">
                        <span class="font-bold">Catégorie principale:</span> {{ $business->mainCategory->name }}
                    </p>
                    <p href="#"
                        class="border-t-2 border-gray-100 font-medium text-gray-600 py-4 px-4 w-full block hover:bg-gray-100 transition duration-150">
                        <span class="font-bold">Catégorie secondaire:</span> {{ $business->SubCategory->name }}
                    </p>
                    <p href="#"
                        class="border-t-2 border-gray-100 font-medium text-gray-600 py-4 px-4 w-full block hover:bg-gray-100 transition duration-150">
                        <span class="font-bold">Activité:</span> {{ $business->activity }}
                    </p>
                    <p href="#"
                        class="border-t-2 border-gray-100 font-medium text-gray-600 py-4 px-4 w-full block hover:bg-gray-100 transition duration-150">
                        <span class="font-bold">Excerpt:</span> {{ $business->description }}
                    </p>
                    <p href="#"
                        class="border-t-2 border-gray-100 font-medium text-gray-600 py-4 px-4 w-full block hover:bg-gray-100 transition duration-150">
                        <span class="font-bold">Adresse:</span> {{ $business->address }}
                    </p>
                    <p href="#"
                        class="border-t-2 border-gray-100 font-medium text-gray-600 py-4 px-4 w-full block hover:bg-gray-100 transition duration-150">
                        <span class="font-bold">Lien:</span> {{ $business->link }}
                    </p>
                    <p href="#"
                        class="border-t-2 border-gray-100 font-medium text-gray-600 py-4 px-4 w-full block hover:bg-gray-100 transition duration-150">
                        <span class="font-bold">Téléphone:</span> {{ $business->phone }}
                    </p>
                    <p href="#"
                        class="border-t-2 border-gray-100 font-medium text-gray-600 py-4 px-4 w-full block hover:bg-gray-100 transition duration-150">
                        <span class="font-bold">Contact:</span> {{ $business->contact }}
                    </p>
                    <p href="#"
                        class="border-t-2 border-gray-100 font-medium text-gray-600 py-4 px-4 w-full block hover:bg-gray-100 transition duration-150">
                        <span class="font-bold">Ville:</span> {{ $business->city }}
                    </p>
                    <p href="#"
                        class="border-t-2 border-gray-100 font-medium text-gray-600 py-4 px-4 w-full block hover:bg-gray-100 transition duration-150">
                        <span class="font-bold">Code Postal:</span> {{ $business->zipcode }}
                    </p>
                    <p href="#"
                        class="border-t-2 border-gray-100 font-medium text-gray-600 py-4 px-4 w-full block hover:bg-gray-100 transition duration-150">
                        <span class="font-bold">Horaires:</span> {{ $business->schedule }}
                    </p>
                </div>
            </div>

            <div class="flex justify-evenly my-5">
                <a href="/admin/business/edit/{{ $business->id }}"
                    class="bg font-bold text-sm text-yellow-500 w-full text-center py-3 hover:bg-yellow-500 hover:text-white hover:shadow-lg rounded-bl-lg">Modifier</a>
                <a href="/admin/business/destroy/{{ $business->id }}"
                    class="bg font-bold text-sm text-red-400 w-full text-center py-3 hover:bg-red-400 hover:text-white hover:shadow-lg rounded-br-lg">Supprimer</a>
            </div>
        </div>
    </div>
</x-app-layout>
