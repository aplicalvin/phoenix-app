<x-layout>
    <x-navbar></x-navbar>

    {{-- This is a Hero Section --}}
    <div class="h-fit bg-cover bg-center" style="background-image: url({{asset('asset/image/dummy1.jpg')}})">
        {{-- ini utk filternya cuk --}}
        <div class="w-full h-fit bg-black/70">
            {{-- Content --}}
            <div class="mx-8 lg:mx-auto max-w-6xl py-12">
                <div class="grid gap-4 md:w-2/3 py-12">
                    <h1 class="text-white font-bold text-7xl">Phoenix Autogate System</h1>
                    <h1 class="text-white/80 text-xl leading-relaxed">Sebuah solusi canggih untuk kebutuhan kenyamanan dan keamanan Anda. Rasakan teknologi gerbang otomatis terkini dan nikmati kemudahan serta ketenangan pikiran yang dihadirkannya dalam kehidupan sehari-hari Anda.</h1>
                    
                    {{-- CTA Button --}}
                    <div class="my-4">
                        <a href="https://google.com" target="_blank" class="flex w-fit gap-2 px-4 py-2 rounded-md bg-green-500 text-white font-semibold hover:font-bold hover:bg-green-700"><i class="bi bi-whatsapp"></i> Hubungi Saya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Hero Section DONE --}}

    {{-- This is Service Section --}}
    <div class="py-10 px-10" id="services">
        <h1 class="font-bold text-gray-900 text-4xl text-center">Layanan Kami</h1>

        {{-- Macam - macam layanan kami --}}
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 w-fit my-8 mx-auto">
            <x-cardService></x-cardService>
            <x-cardService></x-cardService>
            <x-cardService></x-cardService>
            <x-cardService></x-cardService>
            <x-cardService></x-cardService>
            <x-cardService></x-cardService>
            <x-cardService></x-cardService>
        </div>
        {{-- ENDS Macam - macam layanan kami --}}
    </div>
    
    {{-- Service Section Done --}}

    {{-- Contact Pages Start --}}
    <div class="py-10 px-10 bg-slate-800">
        <h1 class="font-bold text-gray-100 text-4xl text-center">Hubungi Kami</h1>
        <div class="grid lg:flex gap-8 my-8 mx-auto">
            {{-- Gmaps. --}}
            <div class="gmaps-bang max-w-xl mx-auto lg:mx-0 border">
                <iframe class="" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1052.7794758650653!2d110.38432968187257!3d-6.994022402756271!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b23d9765ca3%3A0xd64975d978ab0612!2sJl.%20Sri%20Rejeki%20Timur%20V%2C%20Gisikdrono%2C%20Kec.%20Semarang%20Barat%2C%20Kota%20Semarang%2C%20Jawa%20Tengah%2050149!5e0!3m2!1sid!2sid!4v1684332888864!5m2!1sid!2sid"  style="width: 100%; height: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            {{-- Identitas bg --}}
            <div class="grid gap-3 h-fit my-10 text-gray-300 mx-auto lg:mx-0 text-center lg:text-left">
                {{-- <h1>Phoenix Autogate System</h1> --}}
                <h1 class="h-fit text-3xl font-bold text-gray-200">Agus Riyanto</h1>
                <div >
                    <p class="text-lg">Jl. Sri Rejeki Timur Raya, Semarang Barat</p>
                    <p class="text-lg">Semarang - Indonesia</p>
                </div>
                <div class="grid gap-1 text-center place-items-center lg:place-items-start">
                    <a href="tel:+628170553367" target="_blank" class="flex gap-2 w-fit"><i class="bi bi-telephone-fill"></i>08170553367</a>
                    <a href="mailto: phoenix@gmail.com" target="_blank" class="flex gap-2 w-fit"> <i class="bi bi-envelope-fill" ></i>phoenix@gmail.com</a>
                </div>

            </div>
        </div>
        <h1 class="text-center text-gray-400">©2023 Phoenix Autogate System</h1>
    </div>
    {{-- Contact Pages Ends --}}


</x-layout>