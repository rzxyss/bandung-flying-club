@extends('layouts.app')
@section('content')
    <div class="container mx-auto max-w-screen-lg lg:max-w-screen-xl p-4">
        <!-- Start Heroes -->
        <div class="flex flex-col md:flex-row justify-between items-center">
            <div class="flex flex-col justify-between">
                <h6 class="font-semibold text-7xl">
                    Ayo Terbang <br />
                    Bersama Kami
                </h6>

                <div class="bg-[#D9D9D9]">
                    <div class="bg-[#141E38] p-2 text-right">
                        <a href="#" class="text-white underline underline-offset-2 italic">Cek Tiket saya</a>
                    </div>
                    <div class="p-3">
                        <form>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih Tanggal</label>
                            <input type="date"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full md:w-1/2 p-2.5 dark:bg-gray-700 dark:placeholder-gray-400 dark:text-white" />
                            <div class="pt-4 text-right">
                                <button type="button"
                                    class="text-gray-900 bg-white border border-gray-300 hover:bg-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600">
                                    Cari
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div>
                <img src="{{ asset('assets/image/home.png') }}" alt="Homepage" />
            </div>
        </div>
        <!-- End Heroes -->

        <!-- Start Content -->
        <div class="pt-10 lg:pt-2">
            <div class="flex items-center w-auto">
                <div class="border border-black h-20 md:h-12 mr-2"></div>
                <h1 class="font-medium text-5xl">Jelajahi Armada Kami</h1>
            </div>

            <div class="pt-3">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 lg:gap-20">
                    <figure class="relative max-w-sm transition-all duration-300">
                        <img class="rounded-lg" src="{{ asset('assets/image/pesawat1.png') }}" alt="Pesawat" />
                        <figcaption
                            class="absolute px-4 text-lg text-white bottom-6 w-full flex flex-row justify-between items-center">
                            <h1>CT-2K</h1>
                            <button class="border border-white p-1">
                                Lihat Detail
                            </button>
                        </figcaption>
                    </figure>
                    <figure class="relative max-w-sm transition-all duration-300">
                        <img class="rounded-lg" src="{{ asset('assets/image/pesawat2.png') }}" alt="Pesawat" />
                        <figcaption
                            class="absolute px-4 text-lg text-white bottom-6 w-full flex flex-row justify-between items-center">
                            <h1>Savanah</h1>
                            <button class="border border-white p-1">
                                Lihat Detail
                            </button>
                        </figcaption>
                    </figure>
                    <figure class="relative max-w-sm transition-all duration-300">
                        <img class="rounded-lg" src="{{ asset('assets/image/pesawat3.png') }}" alt="Pesawat" />
                        <figcaption
                            class="absolute px-4 text-lg text-white bottom-6 w-full flex flex-row justify-between items-center">
                            <h1>Zenit Stol</h1>
                            <button class="border border-white p-1">
                                Lihat Detail
                            </button>
                        </figcaption>
                    </figure>
                    <figure class="relative max-w-sm transition-all duration-300">
                        <img class="rounded-lg" src="{{ asset('assets/image/pesawat1.png') }}" alt="Pesawat" />
                        <figcaption
                            class="absolute px-4 text-lg text-white bottom-6 w-full flex flex-row justify-between items-center">
                            <h1>CT-2K</h1>
                            <button class="border border-white p-1">
                                Lihat Detail
                            </button>
                        </figcaption>
                    </figure>
                    <figure class="relative max-w-sm transition-all duration-300">
                        <img class="rounded-lg" src="{{ asset('assets/image/pesawat2.png') }}" alt="Pesawat" />
                        <figcaption
                            class="absolute px-4 text-lg text-white bottom-6 w-full flex flex-row justify-between items-center">
                            <h1>Savanah</h1>
                            <button class="border border-white p-1">
                                Lihat Detail
                            </button>
                        </figcaption>
                    </figure>
                    <figure class="relative max-w-sm transition-all duration-300">
                        <img class="rounded-lg" src="{{ asset('assets/image/pesawat3.png') }}" alt="Pesawat" />
                        <figcaption
                            class="absolute px-4 text-lg text-white bottom-6 w-full flex flex-row justify-between items-center">
                            <h1>Zenit Stol</h1>
                            <button class="border border-white p-1">
                                Lihat Detail
                            </button>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>

        <!-- End Content -->
    </div>
@endsection
