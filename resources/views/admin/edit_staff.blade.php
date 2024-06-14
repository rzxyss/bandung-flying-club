@extends('layouts.admin')

@section('content')
    <div class="flex justify-between items-center pb-10 pt-3 w-full">
        <h1 class="font-semibold text-2xl">Edit Staff Bandung Flying Club</h1>
    </div>

    <div>
        <form>
            <div class="p-4 md:p-5 space-y-4">
                <div class="mb-5">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                    <input type="text"
                        class="bg-[#EBEBEB] border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none block w-full p-2.5"
                        value="Rizky Albani"
                        required />
                </div>
                <div class="mb-5">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                        Lahir</label>
                    <input type="date"
                        class="bg-[#EBEBEB] border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none block w-full p-2.5"
                        value="1999-08-17"
                        required />
                </div>
                <div class="mb-5">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                    <input type="text"
                        class="bg-[#EBEBEB] border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none block w-full p-2.5"
                        value="Jl. Buah Batu"
                        required />
                </div>
                <div class="mb-5">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No Handphone</label>
                    <input type="text"
                        class="bg-[#EBEBEB] border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none block w-full p-2.5"
                        value="081234567890"
                        required />
                </div>
                <div class="mb-5">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                    <input type="email"
                        class="bg-[#EBEBEB] border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none block w-full p-2.5"
                        value="rizkyal@gmail.com"
                        required />
                </div>
                <div class="mb-5">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                    <input type="password"
                        class="bg-[#EBEBEB] border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none block w-full p-2.5"
                        value="Rizkyal"
                        required />
                </div>
                <div class="mb-5">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Foto</label>
                    <input type="file"
                        class="bg-[#EBEBEB] border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none block w-full p-2.5"
                        required />
                </div>
            </div>

            <div class="flex items-center p-4 md:p-5 gap-2">
                <button
                    class="text-white bg-green-700 hover:bg-green-800 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center">Submit</button>
                <a href="/admin/staff" 
                    class="text-white bg-red-700 hover:bg-red-800 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center">Cancel</a>
            </div>
        </form>
    </div>
    {{-- End Modal Tambah Staff --}}
@endsection
