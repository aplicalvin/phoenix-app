<x-layout>
    <x-navbar></x-navbar>

    {{-- Product Item Start --}}
    <div class="grid lg:flex gap-4 md:gap-8 p-8">
        <div class="w-50% border-8 border-gray-500 object-cover object-center">
            <img src="{{asset('asset/image/dummy1.jpg')}}" class="object-cover object-center w-full h-64 md:h-96">
        </div>
        <div class="grid gap-1 h-fit justify-between md:py-5  max-w-lg lg:max-w-3xl leading-normal">
            <h5 class="text-2xl md:text-4xl font-bold tracking-tight text-gray-900 ">Pemasangan Autogate Pintu Palang Perumahan</h5>
            <p class=" font-normal text-gray-700">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order. Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order. Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order. Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order. Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order. Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
        </div>
    </div>

    {{-- Beberapa Item dalam service --}}
    <div class="py-10 px-10">
        <h1 class="font-bold text-gray-900 text-3xl">Beberapa Produk yang kami gunakan dalam layanan ini</h1>

        {{-- Macam - macam layanan kami --}}
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 w-fit my-8 mx-auto">
            <x-cardItem></x-cardItem>
            <x-cardItem></x-cardItem>
            <x-cardItem></x-cardItem>
            <x-cardItem></x-cardItem>
        </div>
        {{-- ENDS Macam - macam layanan kami --}}
    </div>
    {{-- Beberapa Item dalam service ENDS--}}
    {{-- Product Item END --}}

    <x-footer></x-footer>
</x-layout>