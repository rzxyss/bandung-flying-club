@extends('layouts.app')

@section('content')
    <div class="container mx-auto max-w-screen-lg p-4">
        <h1 class="font-semibold text-3xl py-2">Berita</h1>
        <h1 class="font-semibold text-3xl py-2">Berita Terbaru - Bandung Flying Club</h1>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">

            <!-- Main Feature Item -->
            <div class="md:col-span-2">
                <div class="relative bg-white rounded-lg overflow-hidden shadow-lg">
                    <img src="{{ asset('assets/image/news1.png') }}" alt="Main Feature" class="w-full h-full object-cover">
                    <div class="absolute bottom-0 left-0 text-white p-4">
                        <span class="bg-[#141E38] px-2 py-1 text-xs font-bold uppercase">Min, 20 Feb 2024</span>
                        <h2 class="mt-2 text-lg font-semibold">Tanggapan pelanggan terhadap layanan BFC</h2>
                    </div>
                </div>
            </div>

            <!-- Smaller Items -->
            <div class="grid grid-cols-1 md:grid-cols-1 gap-4">
                <div class="relative bg-white rounded-lg overflow-hidden shadow-lg">
                    <img src="{{ asset('assets/image/news2.png') }}" alt="Feature 1" class="w-full h-full object-cover">
                    <div class="absolute bottom-0 left-0 text-white p-2">
                        <span class="bg-[#141E38] px-2 py-1 text-xs font-bold uppercase">Min, 20 Feb 2024</span>
                        <h2 class="mt-2 text-lg font-semibold">Pesawat Baru</h2>
                    </div>
                </div>
                <div class="relative bg-white rounded-lg overflow-hidden shadow-lg">
                    <img src="{{ asset('assets/image/news2.png') }}" alt="Feature 1" class="w-full h-full object-cover">
                    <div class="absolute bottom-0 left-0 text-white p-2">
                        <span class="bg-[#141E38] px-2 py-1 text-xs font-bold uppercase">Min, 20 Feb 2024</span>
                        <h2 class="mt-2 text-lg font-semibold">Pesawat Baru</h2>
                    </div>
                </div>
                <div class="relative bg-white rounded-lg overflow-hidden shadow-lg">
                    <img src="{{ asset('assets/image/news2.png') }}" alt="Feature 1" class="w-full h-full object-cover">
                    <div class="absolute bottom-0 left-0 text-white p-2">
                        <span class="bg-[#141E38] px-2 py-1 text-xs font-bold uppercase">Min, 20 Feb 2024</span>
                        <h2 class="mt-2 text-lg font-semibold">Pesawat Baru</h2>
                    </div>
                </div>
                <div class="relative bg-white rounded-lg overflow-hidden shadow-lg">
                    <img src="{{ asset('assets/image/news2.png') }}" alt="Feature 1" class="w-full h-full object-cover">
                    <div class="absolute bottom-0 left-0 text-white p-2">
                        <span class="bg-[#141E38] px-2 py-1 text-xs font-bold uppercase">Min, 20 Feb 2024</span>
                        <h2 class="mt-2 text-lg font-semibold">Pesawat Baru</h2>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
