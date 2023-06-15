<x-layout>
    <div class="grid lg:flex w-full h-screen" >
        <div class="grid w-full gap-32 lg:w-1/2 px-4 pt-3 pb-8 lg:px-16 lg:py-12">
            {{-- content here --}}
            <div class="flex items-center gap-2">
                <img
                    src="{{ asset('asset/logoFixed.png') }}"
                    class="w-8"
                    alt=""
                /> 
                <h1 class="text-indigo-600 text-xl font-bold">Phoenix</h1>
            </div>
            {{-- form --}}
            <div class="flex w-full justify-center">
                <div class="grid gap-4 my-auto w-96">
                    <div class="grid">
                        <h1
                            class="text-2xl md:text-4xl text-stone-900 font-bold"
                        >
                            Reset Password.
                        </h1>
                        <p class="text-base text-stone-700">
                            Masukkan password lama dan ubah dengan password baru
                        </p>
                    </div>
                    <div>
                        <form class="grid gap-6">
                            <div class="grid gap-2">
                                <div class="">
                                    <label
                                        for="oldpassword"
                                        class="block mb-2 text-sm font-medium text-stone-900"
                                        >Masukkan Password Lama</label
                                    >
                                    <input
                                        type="password"
                                        id="oldpassword"
                                        class="bg-stone-50 border border-stone-300 text-stone-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        required
                                    />
                                </div>
                                <div class="">
                                    <label
                                        for="newpassword"
                                        class="block mb-2 text-sm font-medium text-stone-900"
                                        >Ketik Password Baru</label
                                    >
                                    <input
                                        type="password"
                                        id="newpassword"
                                        class="bg-stone-50 border border-stone-300 text-stone-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        required
                                    />
                                </div>
                                <div class="">
                                    <label
                                        for="retypepassword"
                                        class="block mb-2 text-sm font-medium text-stone-900"
                                        >Ketik Password Baru sekali lagi</label
                                    >
                                    <input
                                        type="password"
                                        id="retypepassword"
                                        class="bg-stone-50 border border-stone-300 text-stone-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        required
                                    />
                                </div>
                            </div>

                            <button
                                type="submit"
                                class="text-white bg-indigo-600 hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center"
                            >
                                Masuk
                            </button>
                            <div>
                                <a href="/admin/resertpw"></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <h1 class="text-stone-900">
                    &#169; {{ date("Y") }} Phoenix Autogate System Semarang
                </h1>
            </div>
        </div>
        <div class="w-full lg:w-1/2 max-h-60 lg:max-h-screen">
            <img
                src="{{asset('asset/image/dummy1.jpg')}}"
                class="w-full h-full object-cover"
                alt=""
            />
        </div>
    </div>
</x-layout>
