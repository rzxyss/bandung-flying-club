@extends('layouts.admin')

@section('content')
    <h1 class="font-semibold text-2xl pt-2 pb-11">Staff Bandung Flying Club</h1>
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
                        <button class="bg-green-500 text-white py-2 px-5 rounded-lg">Request Stock</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
