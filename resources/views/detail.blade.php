@extends('layouts.app')

@section('content')
    <div class="container max-w-screen-lg lg:max-w-screen-xl mx-auto p-4">
        <div class="flex flex-row pb-10">
            <button disabled type="button"
                class="cursor-not-allowed px-4 py-2 font-medium text-left border border-gray-200 cursor-pointer rounded-l-lg dark:border-gray-600 bg-[#D9D9D9]">
                Pilih Paket
            </button>
            <button disabled type="button"
                class="cursor-not-allowed px-4 py-2 font-medium text-left border border-gray-200 cursor-pointer dark:border-gray-600 bg-[#141E38] text-white">
                Isi Detail
            </button>
            <button disabled type="button"
                class="cursor-not-allowed px-4 py-2 font-medium text-left border border-gray-200 cursor-pointer rounded-r-lg dark:border-gray-600 bg-[#D9D9D9]">
                Bayar & Konfirmasi
            </button>
        </div>

        <div class="w-full md:w-3/5 flex flex-col bg-[#D9D9D9] p-5">
            <form>
                <div class="grid md:grid-cols-2 md:gap-6">
                    <div class="mb-5">
                        <label
                            class="block mb-2 text-sm font-medium text-black">Nama Depan</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <input type="text"
                                class="bg-transparent border border-black focus:outline-none text-gray-900 text-sm rounded-lg block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                                placeholder="">
                        </div>
                    </div>
                    <div class="mb-5">
                        <label
                            class="block mb-2 text-sm font-medium text-black">Nama Belakang</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <input type="text"
                                class="bg-transparent border border-black focus:outline-none text-gray-900 text-sm rounded-lg block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                                placeholder="">
                        </div>
                    </div>
                </div>
                <div class="mb-5">
                    <label
                        class="block mb-2 text-sm font-medium text-black">No Handphone</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <input type="text"
                            class="bg-transparent border border-black focus:outline-none text-gray-900 text-sm rounded-lg block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                            placeholder="">
                    </div>
                </div>
                <div class="mb-5">
                    <label
                        class="block mb-2 text-sm font-medium text-black">Email</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <input type="email"
                            class="bg-transparent border border-black focus:outline-none text-gray-900 text-sm rounded-lg block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                            placeholder="">
                    </div>
                </div>
                <div class="mb-5">
                    <label
                        class="block mb-2 text-sm font-medium text-black">Foto KTP</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                            <i class="fa-solid fa-address-card"></i>
                        </div>
                        <input type="file"
                            class="bg-transparent border border-black focus:outline-none text-gray-900 text-sm rounded-lg block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                            placeholder="">
                    </div>
                </div>
            </form>

            <div class="text-right">
                <a href="?bayar" class="bg-[#141E38] text-white py-2 px-5 font-semibold">Lanjut</a>
            </div>
        </div>
    </div>
@endsection
