<x-layout>
    <x-navbar></x-navbar>

    {{-- This is a Hero Section --}}
    <div class="h-fit bg-cover bg-center" style="background-image: url({{asset('asset/image/dummy1.jpg')}})">
        {{-- ini utk filternya cuk --}}
        <div class="w-full h-fit bg-black/70">
            {{-- Content --}}
            <div class="mx-8 lg:mx-auto max-w-6xl py-12">
                <div class="grid gap-4 md:w-2/3">
                    <h1 class="text-white font-bold text-7xl">Phoenix Autogate System</h1>
                    <h1 class="text-white/80 text-xl leading-relaxed">Izinkan saya memperkenalkan layanan autogate kami, sebuah solusi canggih untuk kebutuhan kenyamanan dan keamanan Anda. Dengan sistem autogate kami, Anda dapat dengan mudah mengontrol akses ke area Anda, meningkatkan keamanan, dan memberikan pengalaman masuk yang lancar. Rasakan teknologi gerbang otomatis terkini dan nikmati kemudahan serta ketenangan pikiran yang dihadirkannya dalam kehidupan sehari-hari Anda.</h1>
                    
                    {{-- CTA Button --}}
                    <div class="my-4">
                        <a href="https://google.com" target="_blank" class="px-4 py-2 rounded-md bg-green-500 text-white font-semibold hover:font-bold hover:bg-green-700"><i class="bi bi-whatsapp"></i> Hubungi Saya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <x-footer></x-footer>
</x-layout>