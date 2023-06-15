<x-layout>
    {{-- Atasan --}}
    <div class="flex gap-4 mx-8 my-4" >
        <a href="{{ url()->previous() }}">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="w-6 h-6"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18"
                />
            </svg>
        </a>

        <h1>Tambah Data</h1>
    </div>
    <div class="max-w-lg mx-auto my-6">
        <form>
            <div class="flex flex-col gap-4">
                <div class="">
                    <label
                        for="judul"
                        class="block mb-2 text-sm font-medium text-gray-900"
                        >Judul</label
                    >
                    <input
                        type="text"
                        id="judul"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Judul Produk"
                        required
                    />
                </div>

                <div class="">
                    <label
                        for="deskripsiProduk"
                        class="block mb-2 text-sm font-medium text-gray-900"
                        >Deskripsi Produk</label
                    >
                    <textarea
                        id="deskripsiProduk"
                        rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Deskripsikan Produk Anda"
                    ></textarea>
                </div>

                <div>
                    <label
                        class="block mb-2 text-sm font-medium text-gray-900"
                        for="user_avatar"
                        >Upload file</label
                    >
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50"
                        aria-describedby="user_avatar_help"
                        id="user_avatar"
                        type="file"
                    />
                    <div
                        class="mt-1 text-sm text-gray-500"
                        id="user_avatar_help"
                    >
                        Foto Produk ini dibuat untuk menampilkan preview Produk
                    </div>
                </div>

                <!-- Submit And Delete Form -->
                <div class="flex my-0 mx-2 max-w-full gap-2">
                    <button
                        type="submit"
                        href="/admin/service/Tambah"
                        class="bg-inherit border-blue-500 border text-gray-700 max-w-full w-1/2 py-1.5 rounded-md hover:bg-blue-700 hover:text-white text-center"
                    >
                        Tambah
                    </button>
                    <button
                        type="reset"
                        href=""
                        class="bg-red-700 text-white w-1/2 py-1.5 rounded-md hover:bg-red-800 text-center"
                    >
                        Delete
                    </button>
                </div>
            </div>
        </form>
    </div>
</x-layout>
