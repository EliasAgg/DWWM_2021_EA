<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Fiche détaillée de {{ $business->name }}
        </h2>
    </x-slot>

    <main>
        <section class="py-16">
            <div class="container mx-auto px-4 rounded-lg">
                <x-color-card-heading :id="$business->MainCategory->id"/>
                <div class="flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg ">
                    <div class="px-6">
                        <div class="flex justify-between">
                            <div class="flex lg:flex-row flex-col justify-around w-1/3 self-center">
                                <div class="text-blueGray-600">
                                    <x-category-icon :id="$business->main_category_id" />
                                    <span class="text-xs sm:text-base">{{ $business->MainCategory->name }}</span>
                                </div>
                                <div class="text-blueGray-600">
                                    <x-sub-category-icon :id="$business->sub_category_id" />
                                    <span class="text-xs sm:text-base">{{ $business->SubCategory->name }}</span>
                                </div>
                            </div>
                            <div class="w-full lg:w-4/12 px-4 lg:order-3 text-right lg:self-center self-end">
                                <div class="py-5 px-3 sm:mt-0">
                                    <button
                                        class="bg-pink-500 active:bg-pink-600 uppercase text-white font-bold hover:shadow-lg hover:bg-pink-400 shadow-md text-xs px-4 py-1 rounded outline-none focus:outline-none mb-1 ease-linear transition-all duration-150"
                                        type="button">
                                        <i class="fas fa-heart text-lg"></i>
                                    </button>
                                </div>
                            </div>

                        </div>
                        <div class="text-center mt-12 text-gray-500">
                            <h3
                                class="text-4xl font-semibold font-mono leading-normal text-gray-700 border-b border-gray-200 ">
                                {{ $business->name }}
                            </h3>
                            <div class="text-sm leading-normal mt-10 mb-2  font-bold uppercase">
                                <i class="fas fa-map-marker-alt mr-2 text-lg "></i>
                                {{ $business->address }}, {{ $business->city }}, {{ $business->zipcode }}
                            </div>
                            <div class="text-sm leading-normal mt-0 mb-2  font-bold uppercase">
                                <i class="fas fa-phone mr-2 text-lg "></i>
                                {{ formatPhone($business->phone) }}
                            </div>
                            <div class="text-sm leading-normal mt-0 mb-2  font-bold uppercase">
                                <i class="fas fa-envelope mr-2 text-lg "></i>
                                <a class="hover:text-gray-400"
                                    href="mailto:{{ $business->email }}">{{ $business->email }}</a>
                            </div>
                            <div class="text-md leading-normal mt-0 mb-0 font-bold">
                                <i class="fas fa-link mr-2 text-lg "></i>
                                <a class="hover:text-gray-400"
                                    href="https://{{ $business->link }}">{{ $business->link }}</a>
                            </div>

                        </div>
                        <div class="my-10 py-10 border-t border-b border-gray-200 text-center">
                            <div class="flex flex-wrap justify-center">
                                <div class="w-full lg:w-9/12 px-4">
                                    <p class="mb-4 text-lg leading-relaxed text-blueGray-700">
                                        {{ $business->description }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="gmap_canvas ">
                            <iframe class="gmap_canvas w-full mb-10 h-96"
                                src="https://maps.google.com/maps?q=%20{{ $business->name }}=&z=13&ie=UTF8&iwloc=&output=embed"
                                frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                            </iframe>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>
</x-app-layout>
