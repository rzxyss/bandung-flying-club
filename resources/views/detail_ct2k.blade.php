@extends('layouts.app')

@section('content')
    <div class="container mx-auto max-w-screen-lg p-4 overflow-visible ">
        <div class="w-full flex flex-col justify-center items-center pb-10">
            <h1 class="font-semibold text-3xl py-2">CT-2K</h1>
        </div>

        <div class="flex flex-col-reverse md:flex-row w-full gap-5">
            <div class="w-full">
                <h1 class="font-semibold text-3xl pb-7">Spesifikasi CT-2K</h1>

                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <tbody>
                            <tr class="bg-white dark:bg-gray-800">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Ketinggian Maksimal
                                </th>
                                <td class="px-6 py-4">
                                    : 6000 - 10000 Feet
                                </td>
                            </tr>
                            <tr class="bg-white dark:bg-gray-800">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Daya Jelalah
                                </th>
                                <td class="px-6 py-4">
                                    : 60 - 10 Km
                                </td>
                            </tr>
                            <tr class="bg-white dark:bg-gray-800">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Jenis Bahan Bakar
                                </th>
                                <td class="px-6 py-4">
                                    : Shell V Power / Pertamax Turbo
                                </td>
                            </tr>
                            <tr class="bg-white dark:bg-gray-800">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Kapasitas Penumpang
                                </th>
                                <td class="px-6 py-4">
                                    : 1 - 2 Orang
                                </td>
                            </tr>
                            <tr class="bg-white dark:bg-gray-800">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Jenis Mesin
                                </th>
                                <td class="px-6 py-4">
                                    : Rotax 582
                                </td>
                            </tr>
                            <tr class="bg-white dark:bg-gray-800">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Warna
                                </th>
                                <td class="px-6 py-4">
                                    : Kuning, Merah, Hitam
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="w-full">
                <img src="{{ asset('assets/image/pesawat1.png') }}" alt="News"
                    class="w-full max-h-full rounded-md bg-cover object-cover">
            </div>
        </div>
    </div>
@endsection
