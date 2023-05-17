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
        <h1 class="font-bold text-4xl text-center">Layanan Kami</h1>

        {{-- Macam - macam layanan kami --}}
        <div class="grid md:grid-cols-4 gap-8 w-fit my-8 mx-auto">
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


    <x-footer></x-footer>
</x-layout>