@extends('layouts.admin')

@section('content')
    <div class="flex flex-col md:flex-row md:items-start gap-2">
        <div class="w-full md:w-4/12">
            <h1 class="font-medium text-lg md:pb-3">Input Ketersediaan Jadwal</h1>
            <div class="relative overflow-x-auto w-full">
                <form>
                    <div class="mb-5">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal</label>
                        <input type="date"
                            class="bg-[#EBEBEB] border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none block w-full p-2.5"
                            required />
                    </div>

                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jam</label>
                    <div class="flex items-center gap-3">
                        <div class="mb-5">
                            <input type="time"
                                class="bg-[#EBEBEB] border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none block w-full p-2.5"
                                required />
                        </div>
                        <span class="self-center"> - </span>
                        <div class="mb-5">
                            <input type="time"
                                class="bg-[#EBEBEB] border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none block w-full p-2.5"
                                required />
                        </div>
                    </div>

                    <div class="mb-5">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tujuan</label>
                        <textarea
                            class="bg-[#EBEBEB] border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none block w-full p-2.5"></textarea>
                    </div>

                    <div class="mb-5">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga</label>
                        <input type="text"
                            class="bg-[#EBEBEB] border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none block w-full p-2.5"
                            required />
                    </div>
                    <div class="flex justify-center">
                        <button class="bg-[#50CF9A] px-5 py-2 rounded-full text-white">
                            <h1 class="font-semibold font-xl">Konfirmasi</h1>
                        </button>
                    </div>
                </form>
            </div>
        </div>

        {{-- Jadwal Section --}}
        <div class="w-full md:w-4/12 flex flex-col gap-2 pt-10 md:pt-0">
            <h1 class="hidden md:flex font-medium text-lg md:pb-3">Jadwal Tersedia</h1>
            <button class="flex justify-between md:hidden button-jadwal">
                <h1 class="font-medium text-lg">Jadwal Tersedia</h1>
                <i class="fa-solid fa-angle-down"></i>
            </button>
            <div class="jadwal hidden md:flex flex-col gap-1">
                {{-- Loop Jadwal --}}
                <div class="relative w-80 md:w-96 p-4 bg-[#EBEBEB] rounded-lg shadow-md overflow-hidden">
                    <div class="absolute inset-0">
                        <div class="w-1/3 h-full bg-[#77C5C5] skew-x-[-20deg] origin-top"></div>
                    </div>
                    <div class="relative flex items-center">
                        <div class="md:p-4 text-white z-10">
                            <p class="font-bold">10.30</p>
                            <p class="font-bold">11.00</p>
                        </div>
                        <div class="relative z-10 text-gray-600 ml-11 md:ml-10 flex-1">
                            <p>Sulaiman - Std Jalak Harupat - Kota Soreang - Telkom - Sulaiman</p>
                            <p class="text-center mt-4">20 - 04 - 2024</p>
                        </div>
                    </div>
                </div>
                {{-- End Loop --}}
            </div>
        </div>
        {{-- End Jadwal Section --}}

        {{-- Konfirmasi Pembayaran Section --}}
        <div class="w-full md:w-4/12 flex flex-col gap-2 pt-10 md:pt-0">
            <h1 class="hidden md:flex font-medium text-lg md:pb-3">Konfirmasi Pembayaran</h1>
            <button class="flex justify-between md:hidden button-konfirmasi">
                <h1 class="font-medium text-lg">Konfirmasi Pembayaran</h1>
                <i class="fa-solid fa-angle-down"></i>
            </button>
            <div class="konfirmasi hidden md:flex flex-col gap-1">
                {{-- Loop Konfirmasi Pembayaran --}}
                <div class="relative w-80 md:w-96 p-4 bg-[#EBEBEB] rounded-lg shadow-md overflow-hidden">
                    <div class="absolute inset-0">
                        <div class="w-1/3 h-full bg-[#C5BD77] skew-x-[-20deg] origin-top"></div>
                    </div>
                    <div class="relative flex items-center">
                        <div class="md:p-4 text-white z-10">
                            <p class="font-bold">10.30</p>
                            <p class="font-bold">11.00</p>
                        </div>
                        <div class="relative z-10 text-gray-600 ml-11 md:ml-10 flex-1">
                            <p>Sulaiman - Std Jalak Harupat - Kota Soreang - Telkom - Sulaiman</p>
                            <p class="text-center mt-4">20 - 04 - 2024</p>
                        </div>
                    </div>
                </div>
                {{-- End Loop --}}
            </div>
        </div>
        {{-- End Konfirmasi Pembayaran Section --}}
    </div>
@endsection
