@extends('layouts.admin')

@section('content')
    <div class="flex justify-between items-center pb-10 pt-3 w-full">
        <div>
            <h1 class="font-semibold text-2xl">Inventory Bandung Flying Club</h1>
        </div>
        <a href="/admin/inventory/add" class="flex items-center gap-1 bg-[#88CCA7] p-5 rounded-full text-white">
            <i class="fa-solid fa-plus font-semibold text-xl"></i>
            <h1 class="font-semibold font-xl">Tambah</h1>
        </a>
    </div>
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left p-2">
            <thead class="bg-[#EBEBEB]">
                <tr>
                    <th class="border-r border-white px-6 py-3">No</th>
                    <th class="px-6 py-3">Kode</th>
                    <th class="px-6 py-3">Nama Sparepart</th>
                    <th class="px-6 py-3">Kategori</th>
                    <th class="px-6 py-3">Stock</th>
                    <th class="px-6 py-3">Opsi</th>
                </tr>
            </thead>

            <tbody class="bg-[#D9D9D9]">
                <tr class="border-b">
                    <td class="border-r border-white px-6 py-4">1</td>
                    <td class="px-6 py-4">BL001</td>
                    <td class="px-6 py-4">Baling Baling</td>
                    <td class="px-6 py-4">Sparepart</td>
                    <td class="px-6 py-4">5</td>
                    <td class="px-6 py-4">
                        <div class="flex flex-row gap-2">
                            <a href="/admin/inventory/edit" class="bg-yellow-600 text-white py-2 px-5 rounded-lg">Edit</a>
                            <button data-modal-target="inv-modal" data-modal-toggle="inv-modal" class="bg-red-800 text-white py-2 px-5 rounded-lg">Delete</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>


    <div id="inv-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Delete Stock Inventory
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="inv-modal">
                        <i class="fa-solid fa-x"></i>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <div class="p-4 md:p-5 space-y-4">
                    <h1>Apakah anda yakin untuk menghapus Stock ini pada Inventory?</h1>
                </div>

                <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600 gap-2">
                    <button
                        class="text-white bg-green-700 hover:bg-green-800 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center">Ya</button>
                    <button data-modal-hide="inv-modal" type="button"
                        class="text-white bg-red-700 hover:bg-red-800 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center">Tidak</button>
                </div>
            </div>
        </div>
    </div>
@endsection
