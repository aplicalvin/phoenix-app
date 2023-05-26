<x-layout>
    <x-navbar></x-navbar>

    {{-- Hero Section --}}
    <div class="h-fit bg-cover bg-center" style="background-image: url({{asset('asset/image/dummy1.jpg')}})">
        {{-- ini utk filternya cuk --}}
        <div class="w-full h-fit bg-black/70">
            {{-- Content --}}
            <div class="mx-8 lg:mx-auto max-w-6xl py-12">
                <div class="grid gap-5 py-6">
                    <h1 class="text-white text-center font-bold text-4xl">Produk</h1>
                    {{-- Search --}}
                    <div class="w-4/5 md:w-3/5 mx-auto">
                        <form class="flex items-center">   
                            <label for="simple-search" class="sr-only">Cari Produk</label>
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    
                                </div>
                                <input type="text" id="simple-search" class="bg-stone-200 border border-stone-300 text-stone-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  " placeholder="Cari Produk" required>
                            </div>
                            <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                                <span class="sr-only">Search</span>
                            </button>
                        </form>
                    </div>
                    {{-- Search ENDS--}}
                </div>
            </div>
        </div>
    </div>
    {{-- ENDS Hero Section --}}


    {{-- This is Item Section --}}
    <div class="py-10 px-10">
        {{-- Macam - macam layanan kami --}}
        <div class="grid md:grid-cols-2 lg:grid-cols-4  gap-8 w-fit my-8 mx-auto">
            <x-cardItem></x-cardItem>
            <x-cardItem></x-cardItem>
            <x-cardItem></x-cardItem>
            <x-cardItem></x-cardItem>
            <x-cardItem></x-cardItem>
            <x-cardItem></x-cardItem>
            <x-cardItem></x-cardItem>
            <x-cardItem></x-cardItem>
        </div>
    </div>
    {{-- ENDS Macam - macam layanan kami --}}

    <x-footer></x-footer>
</x-layout>