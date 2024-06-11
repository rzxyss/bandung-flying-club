@extends('layouts.app')

@section('content')
    <div class="container max-w-screen-lg lg:max-w-screen-xl mx-auto p-4">
        <div class="flex flex-row">
            <button disabled type="button"
                class="cursor-not-allowed px-4 py-2 font-medium text-left border border-gray-200 cursor-pointer rounded-l-lg dark:border-gray-600 bg-[#141E38] text-white">
                Pilih Paket
            </button>
            <button disabled type="button"
                class="cursor-not-allowed px-4 py-2 font-medium text-left border border-gray-200 cursor-pointer dark:border-gray-600 bg-[#D9D9D9]">
                Isi Detail
            </button>
            <button disabled type="button"
                class="cursor-not-allowed px-4 py-2 font-medium text-left border border-gray-200 cursor-pointer rounded-r-lg dark:border-gray-600 bg-[#D9D9D9]">
                Bayar & Konfirmasi
            </button>
        </div>

        <div class="flex items-center overflow-x-auto text-nowrap scroll-smooth space-x-2 py-5">
            <button class="px-4 py-2 bg-[#D9D9D9] rounded-lg">
                <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>
            <div class="flex space-x-2">
                <div class="px-4 py-2 bg-[#D9D9D9] rounded-lg text-center">
                    Min, 17 Mar 2024
                </div>
                <div class="px-4 py-2 bg-[#D9D9D9] rounded-lg text-center">
                    Sen, 18 Mar 2024
                </div>
                <div class="px-4 py-2 bg-[#D9D9D9] rounded-lg text-center">
                    Sel, 19 Mar 2024
                </div>
                <div class="px-4 py-2 bg-[#D9D9D9] rounded-lg text-center">
                    Rab, 20 Mar 2024
                </div>
                <div class="px-4 py-2 bg-[#D9D9D9] rounded-lg text-center">
                    Kam, 21 Mar 2024
                </div>
            </div>
            <button class="px-4 py-2 bg-[#D9D9D9] rounded-lg">
                <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>
        </div>

        <div class="w-full md:w-3/5 flex flex-col">
            <div class="flex flex-row">
                <div class="w-3/4 p-4">
                    <h1 class="font-semibold text-lg">Rute</h1>
                </div>
                <div class="w-1/4 p-4">
                    <h1 class="font-semibold text-lg">Harga</h1>
                </div>
            </div>
            <div class="flex flex-row items-center py-3">
                <label class="flex flex-row route-option">
                    <div class="w-3/4 bg-[#D9D9D9] p-4">
                        <h1 class="font-medium text-base md:w-1/2 pb-2">Sulaiman - Std Jalak harupat - Kota Soreang - Telkom -
                            sulaiman</h1>
                        <h1 class="font-medium text-base md:w-1/2 pt-2">9.00 - 9.30</h1>
                    </div>
                    <div class="w-1/4 bg-[#C0C0C0] p-4">
                        <h1 class="font-semibold text-base">Rp. 750.000</h1>
                    </div>
                    <input type="radio" id="pesawat3" name="pesawat" value="pesawat3" hidden>
                </label>
            </div>
            <div class="flex flex-row items-center py-3">
                <label class="flex flex-row route-option">
                    <div class="w-3/4 bg-[#D9D9D9] p-4">
                        <h1 class="font-medium text-base md:w-1/2 pb-2">Sulaiman - Std Jalak harupat - Kota Soreang - Telkom -
                            sulaiman</h1>
                        <h1 class="font-medium text-base md:w-1/2 pt-2">10.00 - 10.30</h1>
                    </div>
                    <div class="w-1/4 bg-[#C0C0C0] p-4">
                        <h1 class="font-semibold text-base">Rp. 750.000</h1>
                    </div>
                    <input type="radio" id="pesawat3" name="pesawat" value="pesawat3" hidden>
                </label>
            </div>
            <div class="flex flex-row items-center py-3">
                <label class="flex flex-row route-option">
                    <div class="w-3/4 bg-[#D9D9D9] p-4">
                        <h1 class="font-medium text-base md:w-1/2 pb-2">Sulaiman - Std Jalak harupat - Kota Soreang - Telkom -
                            sulaiman</h1>
                        <h1 class="font-medium text-base md:w-1/2 pt-2">12.00 - 12.30</h1>
                    </div>
                    <div class="w-1/4 bg-[#C0C0C0] p-4">
                        <h1 class="font-semibold text-base">Rp. 750.000</h1>
                    </div>
                    <input type="radio" id="pesawat3" name="pesawat" value="pesawat3" hidden>
                </label>
            </div>
            <div class="text-right py-3">
                <a href="?isi_detail" class="bg-[#D9D9D9] py-2 px-5 font-semibold">Lanjut</a>
            </div>
        </div>
    </div>
@endsection
