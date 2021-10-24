<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ "Panneau d'administration" }}
        </h2>
    </x-slot>

    <section class="container mx-auto p-6 font-mono">
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
            <div class="w-full overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr
                            class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                            <th class="px-4 py-3">Lettre</th>
                            <th class="px-4 py-3">Nom</th>
                            <th class="px-4 py-3">Contact</th>
                            <th class="px-4 py-3">Téléphone</th>
                            <th class="px-4 py-3">Catégorie</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        @foreach ($businesses as $business)
                            <tr class="text-gray-700">
                                <td class="px-4 py-3 border">
                                    <div class="flex items-center">
                                        <div>
                                            <p class="font-semibold text-lg text-white bg-gray-600 px-2 rounded-md">
                                                {{ $business->glyph }}</p>
                                            {{-- <p class="text-xs text-gray-600">Developer</p> --}}
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-ms border">{{ $business->name }}</td>
                                <td class="px-4 py-3 border">
                                    <span class="px-2 py-1 rounded-sm">
                                        {{ $business->contact }} </span>
                                </td>
                                <td class="px-4 py-3 text-sm border">{{ $business->phone }}</td>
                                <td class="px-4 py-3 text-sm border">
                                    <x-category-icon :id="$business->main_category_id"/>
                                    {{ $business->MainCategory->name}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

</x-app-layout>
