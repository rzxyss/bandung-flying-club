@extends('layouts.app')

@section('content')
    <div class="container max-w-screen-lg lg:max-w-screen-xl mx-auto p-4">
        <div class="flex flex-row pb-10">
            <button disabled type="button"
                class="cursor-not-allowed px-4 py-2 font-medium text-left border border-gray-200 cursor-pointer rounded-l-lg dark:border-gray-600 bg-[#D9D9D9]">
                Pilih Paket
            </button>
            <button disabled type="button"
                class="cursor-not-allowed px-4 py-2 font-medium text-left border border-gray-200 cursor-pointer dark:border-gray-600 bg-[#D9D9D9]">
                Isi Detail
            </button>
            <button disabled type="button"
                class="cursor-not-allowed px-4 py-2 font-medium text-left border border-gray-200 cursor-pointer rounded-r-lg dark:border-gray-600 bg-[#141E38] text-white">
                Bayar & Konfirmasi
            </button>
        </div>

        <div class="flex flex-col-reverse md:flex-row gap-5">
            <div class="flex flex-col p-5 bg-[#D9D9D9] w-full md:w-3/5">
                <h1 class="font-semibold text-lg">
                @if (request()->has('bni'))
                    Transfer Bank BNI
                @elseif (request()->has('bca'))
                    Transfer Bank BCA
                @elseif (request()->has('gopay'))
                    Gopay
                @elseif (request()->has('qris'))
                    QRIS
                @endif
                </h1>
                <img class="h-auto max-w-md" src="{{asset('assets/image/qrcode.png')}}" alt="QRCode">
            </div>
            <div class="flex flex-row justify-between p-5 bg-[#D9D9D9] w-full md:w-2/5">
                <div class="flex flex-col gap-3">
                    <h1 class="font-semibold text-lg">Total</h1>
                    <h1 class="font-semibold text-2xl">Rp. 750.000</h1>
                    <h1 class="font-semibold text-lg">Order ID #123456</h1>
                </div>
                <div class="flex flex-row justify-between gap-3">
                    <h1 class="font-semibold text-lg">Bayar dalam</h1>
                    <h1 class="font-semibold text-lg">10:00:00</h1>
                </div>
            </div>
        </div>
    </div>
@endsection
