@extends('layouts.admin')

@section('content')
    <div class="flex justify-between items-center pb-10 pt-3 w-full">
        <div>

            <h1 class="font-semibold text-2xl">Staff Bandung Flying Club</h1>
        </div>
        <button data-modal-target="staff-modal" data-modal-toggle="staff-modal"
            class="flex items-center gap-1 bg-[#88CCA7] p-5 rounded-full text-white">
            <i class="fa-solid fa-plus font-semibold text-xl"></i>
            <h1 class="font-semibold font-xl">Tambah</h1>
        </button>
    </div>
    <div class="grid md:grid-cols-3 gap-4">
        {{-- Start Looping Staff --}}
        <div class="flex flex-col items-center">
            <div class="flex flex-row justify-between items-center bg-white p-5 w-full rounded-lg drop-shadow-md">
                <div class="flex flex-row items-start gap-2">
                    <img class="w-16 h-16 rounded-full"
                        src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png"
                        alt="Foto Profile">
                    <div class="flex flex-col">
                        <h1 class="font-semibold">Rizky Albani</h1>
                        <h1 class="font-medium">Staff</h1>
                    </div>
                </div>
                <button class="show-detail">
                    <i class="fa-solid fa-angle-right"></i>
                </button>
            </div>
            <div class="bg-[#CCCCCC] w-full drop-shadow-md rounded-lg p-3 flex flex-row justify-around detail-staff hidden">
                <a href="#" class="flex flex-row items-center gap-2">
                    <i class="fa-solid fa-pencil"></i>
                    <h1>Edit</h1>
                </a>
                <a href="#" class="flex flex-row items-center gap-2 text-[#B76B6B]">
                    <i class="fa-solid fa-trash"></i>
                    <h1>Delete</h1>
                </a>
            </div>
        </div>
        {{-- End Looping Staff --}}
    </div>

    {{-- Modal Tambah Staff --}}
    <div id="staff-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Tambah Staff
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="staff-modal">
                        <i class="fa-solid fa-x"></i>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <form>
                    <div class="p-4 md:p-5 space-y-4">
                        <div class="mb-5">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                            <input type="text"
                                class="bg-[#EBEBEB] border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none block w-full p-2.5"
                                required />
                        </div>
                        <div class="mb-5">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                                Lahir</label>
                            <input type="text"
                                class="bg-[#EBEBEB] border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none block w-full p-2.5"
                                required />
                        </div>
                        <div class="mb-5">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                            <input type="text"
                                class="bg-[#EBEBEB] border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none block w-full p-2.5"
                                required />
                        </div>
                        <div class="mb-5">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No Handphone</label>
                            <input type="text"
                                class="bg-[#EBEBEB] border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none block w-full p-2.5"
                                required />
                        </div>
                        <div class="mb-5">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Foto</label>
                            <input type="file"
                                class="bg-[#EBEBEB] border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none block w-full p-2.5"
                                required />
                        </div>
                    </div>

                    <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600 gap-2">
                        <button
                            class="text-white bg-green-700 hover:bg-green-800 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center">Submit</button>
                        <button data-modal-hide="staff-modal" type="button"
                            class="text-white bg-red-700 hover:bg-red-800 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- End Modal Tambah Staff --}}
@endsection
