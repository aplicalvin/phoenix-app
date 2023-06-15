<x-layout>
    <x-admSideBar></x-admSideBar>
    <div class="p-4 sm:ml-64">
        <h2 class="text-4xl font-semibold">Layanan</h2>
        {{-- Add Product --}}
        <div class="my-8">
            <a href="/admin/service/add" class="bg-blue-700 text-white px-4 py-2 rounded-md hover:bg-blue-800">Tambah Layanan</a>
        </div>
        <div class="grid md:grid-cols-1  gap-8 w-fit my-8 mx-auto">
            <x-admCardService></x-admCardService>
            <x-admCardService></x-admCardService>
            <x-admCardService></x-admCardService>
            <x-admCardService></x-admCardService>
        </div>
    </div>
</x-layout>