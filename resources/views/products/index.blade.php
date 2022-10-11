<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{-- {{ __('Nos produits') }} --}}
            Liste des produits
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="mx-auto container py-8">
                <div class="grid grid-cols-4 gap-4">
                    @foreach ($products as $product)
                    <!-- Card 1 -->
                    <div tabindex="0" class="focus:outline-none mx-2 w-72">
                        <div>
                            <img alt="person capturing an image" src="{{ $product->image }}" tabindex="0" class="focus:outline-none w-full h-44" />
                        </div>
                        <div class="bg-white">
                            <div class="flex items-center justify-between px-4 pt-4">
                                <div class="bg-yellow-200 py-1.5 px-6 rounded-full">
                                    <p tabindex="0" class="focus:outline-none text-xs text-yellow-700">{{ $product->formatted_price }}</p>
                                </div>
                            </div>
                            <div class="p-4">

                                <div class="flex items-center">
                                    <h2 tabindex="0" class="focus:outline-none text-lg font-semibold">{{ $product->name }}</h2>
                                    <p tabindex="0" class="focus:outline-none text-xs text-gray-600 pl-5"></p>
                                </div>

                                <p tabindex="0" class="focus:outline-none text-xs text-gray-600 mt-2">{{ $product->description }}</p>

                                <example-component v-bind:product-id="{{ $product->id }}"></example-component>
                                
                            </div>
                        </div>
                    </div>
                    <!-- Card 1 Ends -->
                    @endforeach
                </div>
            </div>
            <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->
        </div>
    </div>
</x-app-layout>