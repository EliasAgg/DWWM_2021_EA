<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ "Panneau d'administration" }}
        </h2>
    </x-slot>

    <section class="container mx-auto mt-6 sm:mt-0 sm:p-6 font-mono">
        <div class="w-full mb-8 overflow-hidden sm:rounded-lg shadow-lg">
            <div class="w-full overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr
                            class="text-md font-semibold text-white text-left  bg-gray-600 uppercase border-b border-gray-600">
                            <th class="px-4 py-3">Lettre</th>
                            <th class="px-4 py-3">Nom</th>
                            <th class="px-4 py-3  hidden sm:table-cell">Contact</th>
                            <th class="px-4 py-3  hidden sm:table-cell">Téléphone</th>
                            <th class="px-4 py-3  hidden sm:table-cell">Catégorie</th>
                            <th class="px-4 py-3">Actions</th>
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
                                <td class="px-4 py-3 border  hidden sm:table-cell">
                                    <span class="px-2 py-1 rounded-sm ">
                                        {{ $business->contact }} </span>
                                </td>
                                <td class="px-4 py-3 text-sm border  hidden sm:table-cell">{{ $business->phone }}</td>
                                <td class="px-4 py-3 text-sm border  hidden sm:table-cell">
                                    <x-category-icon :id="$business->main_category_id" />
                                    {{ $business->MainCategory->name }}
                                </td>
                                <td class="px-4 py-3 text-sm border">
                                    <div class="flex justify-between sm:justify-around">
                                        <i class="far fa-edit text-yellow-500 text-2xl sm:text-base"></i>
                                        <i class="fas fa-trash-alt text-red-500 text-2xl sm:text-base"></i>
                                        <a href="/admin/business/{{ $business->id }}">
                                            <i class="fas fa-eye text-blue-400 text-2xl sm:text-base"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>

                        @endforeach
                    </tbody>
                </table>

                @if ($businesses instanceof \Illuminate\Contracts\Pagination\LengthAwarePaginator)
                    <div class="mt-6">
                        {{ $businesses->links() }}
                        <div class=" flex justify-center sm:justify-end">

                            <a href="/admin/business/create"
                                class="p-2 border border-gray-700 mt-3 sm:mt-0 mb-3 mr-3 hover:bg-green-400 rounded-lg"><i
                                    class="fas fa-plus"></i> Ajouter</a>
                        </div>
                    </div>
                @endif

            </div>
        </div>

    </section>

</x-app-layout>
