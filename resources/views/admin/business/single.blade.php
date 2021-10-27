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
            <x-color-admin-card-heading :id="$business->main_category_id" />
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
                <div x-data="{ open: false }" @click="open = true"
                    class="cursor-pointer bg font-bold text-sm text-red-400 w-full text-center py-3 hover:bg-red-400 hover:text-white hover:shadow-lg rounded-br-lg">
                    <span class="bg-red-300 w-full">Supprimer</span>
                    <div role="dialog" aria-labelledby="modal1_label" aria-modal="true" tabindex="0" x-show="open"
                        @click="open = false"
                        class="fixed top-0 left-0 w-full h-screen flex justify-center items-center">

                        <div class="absolute top-0 left-0 w-full h-screen bg-black opacity-60" aria-hidden="true"
                            x-show="open">
                        </div>

                        <div class="bg-white rounded-lg overflow-hidden z-10" x-show="open" @click.stop="">
                            <div class="w-96 border-t-8 border-red-600 rounded-lg flex">
                                <div class="w-1/3 pt-6 flex justify-center">
                                    <i class="far fa-exclamation-triangle text-red-600 text-6xl"></i>
                                </div>
                                <div class="w-full pt-9 pr-4">
                                    <h3 class="font-bold text-red-700">Supprimer {{ $business->name }} ?</h3>
                                    <p class="p-4 text-sm text-gray-400">Êtes-vous sûr de vouloir supprimer cet
                                        établissement ? Il sera supprimé de la base de données.</p>
                                </div>
                            </div>

                            <div class="p-4 flex space-x-4">
                                <span @click="open = false"
                                    class="w-1/2 px-4 py-3 cursor-pointer text-center bg-gray-100 text-gray-400 hover:bg-gray-200 hover:text-black font-bold rounded-lg text-sm">Annuler</span>
                                <a href="/admin/business/destroy/{{ $business->id }}"
                                    class="w-1/2 px-4 py-3 text-center text-pink-100 bg-red-600 rounded-lg hover:bg-red-700 hover:text-white font-bold text-sm">Supprimer</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
