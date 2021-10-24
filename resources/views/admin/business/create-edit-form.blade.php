<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $action }}
        </h2>
    </x-slot>

    <form action="#" method="POST" class="w-2/3 mx-auto mt-10">
        @csrf
        <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
                <div class="grid grid-cols-4 gap-6">

                    <div class="col-span-6 sm:col-span-1">
                        <x-label for="first-name">
                            Lettre
                        </x-label>
                        <x-input type="text" id="first-name" />
                    </div>

                    <div class="col-span-6 sm:col-span-2">
                        <x-label for="first-name">
                            Nom
                        </x-label>
                        <x-input type="text" id="first-name" />
                    </div>

                    <div class="col-span-6 sm:col-span-1">
                        <x-label for="first-name">
                            Activité
                        </x-label>
                        <x-input type="text" id="first-name" />
                    </div>

                    <div class="col-span-6 sm:col-span-4">
                        <x-label for="first-name">
                            Description
                        </x-label>
                        <textarea name="description" id="description" class="rounded-md shadow-sm block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"></textarea>
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <x-label for="first-name">
                            Lien
                        </x-label>
                        <x-input type="text" id="first-name" />
                    </div>

                    <div class="col-span-6 sm:col-span-2">
                        <x-label for="first-name">
                            Téléphone
                        </x-label>
                        <x-input type="text" id="first-name" maxlength="5"/>
                    </div>
                    <div class="col-span-6 sm:col-span-2">
                        <x-label for="first-name">
                            Contact
                        </x-label>
                        <x-input type="text" id="first-name" />
                    </div>
                    <div class="col-span-6 sm:col-span-2">
                        <x-label for="first-name">
                            Email
                        </x-label>
                        <x-input type="text" id="first-name" />
                    </div>

                    <div class="col-span-6 sm:col-span-2">
                        <x-label for="first-name">
                            Adresse
                        </x-label>
                        <x-input type="text" id="first-name" />
                    </div>

                    <div class="col-span-6 sm:col-span-2">
                        <x-label for="first-name">
                            Ville
                        </x-label>
                        <x-input type="text" id="first-name" />
                    </div>

                    <div class="col-span-6 sm:col-span-1">
                        <x-label for="first-name">
                            Code Postal
                        </x-label>
                        <x-input type="text" id="first-name" maxlength="5"/>
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <label for="maincategory" class="block text-sm font-medium text-gray-700">Catégorie
                            principale</label>
                        <select id="maincategory" name="main_category_id"
                            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option value="" selected>--Sélectionner une catégorie</option>
                            <option value="1">Recyclage</option>
                            <option value="2">Réparation</option>
                            <option value="3">Commerce</option>
                            <option value="4">Tout</option>
                        </select>
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <label for="subcategory" class="block text-sm font-medium text-gray-700">Sous catégorie</label>
                        <select id="subcategory" name="sub_category_id"
                            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option value="" selected>--Sélectionner une sous catégorie</option>
                            <option value="1">Neuf</option>
                            <option value="2">Ocassion</option>
                            <option value="4">Tout</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                <x-button type="submit">
                    Ajouter
                </x-button>
            </div>
        </div>
    </form>

</x-app-layout>
