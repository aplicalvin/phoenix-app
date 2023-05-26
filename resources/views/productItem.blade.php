<x-layout>
    <x-navbar></x-navbar>

    {{-- Product Item Start --}}
    <div class="grid md:flex gap-4 md:gap-8 p-8">
        <div class="w-50% border-8 border-gray-500">
            <img src="{{asset('asset/image/dummy1.jpg')}}" class="object-cover w-full  h-64 md:h-96 md:max-w-2xl">
        </div>
        <div class="grid gap-1 h-fit justify-between md:py-5 w-50% leading-normal">
            <h5 class="text-2xl md:text-4xl font-bold tracking-tight text-gray-900">Palang Pintu Saya</h5>
            <h5 class="text-lg md:text-xl tracking-tight text-gray-700">Series ABC</h5>
            <p class=" font-normal text-gray-700">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
        </div>
    </div>
    {{-- Product Item END --}}

    <x-footer></x-footer>
</x-layout>