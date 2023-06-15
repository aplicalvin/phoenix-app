<x-layout>
    <x-admSideBar></x-admSideBar>
    <div class="p-4 sm:ml-64">
        <h2 class="text-4xl font-semibold">Product</h2>
        {{-- Add Product --}}
        <div class="my-8">
            <a href="/admin/product/add" class="bg-blue-700 text-white px-4 py-2 rounded-md hover:bg-blue-800">Add Product</a>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-4  gap-8 w-fit my-8 mx-auto">
            <x-admCardItem></x-admCardItem>
            <x-admCardItem></x-admCardItem>
            <x-admCardItem></x-admCardItem>
            <x-admCardItem></x-admCardItem>
        </div>
    </div>
</x-layout>