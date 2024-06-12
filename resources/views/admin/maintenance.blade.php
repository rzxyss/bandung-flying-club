@extends('layouts.admin')

@section('content')
    <div class="flex justify-between items-center pb-10 pt-3 w-full">
        <div>

            <h1 class="font-semibold text-2xl">Maintenance Report</h1>
        </div>
        <button data-modal-target="report-modal" data-modal-toggle="report-modal"
            class="flex items-center gap-1 bg-[#B30000] px-5 py-3 rounded-full text-white">
            <i class="fa-solid fa-plus font-semibold text-xl"></i>
            <h1 class="font-semibold font-xl">Report</h1>
        </button>
    </div>
    <div class="relative overflow-x-auto">
        <div class="h-16 w-auto bg-[#141E38]"></div>
        <div class="p-2 w-auto bg-white flex flex-col gap-2">
            {{-- Looping Report Maintenance --}}
            <div class="flex flex-col md:flex-row items-start justify-between gap-1 md:gap-5 border border-black md:border-none p-2">
                <div class="flex">
                    <img class="object-cover w-96 rounded-lg"
                        src="https://aeropedia.com.au/wp-content/uploads/2019/05/Flight-Design-CT-2K_Aeropedia-The-Encyclopedia-of-Aircraft.jpg"
                        alt="Report 1">
                </div>
                <div class="flex flex-col bg-[#D9D9D9] w-full h-full p-5">
                    <h1 class="font-semibold text-2xl">CT-2K</h1>
                    <h1 class="font-medium text-lg">Mengganti baling-baling yang patah</h1>
                </div>
                <div class="flex flex-row justify-center self-center gap-2">
                    <button><i class="fa-solid fa-circle-check text-green-500 text-5xl"></i></button>
                    <button><i class="fa-solid fa-circle-exclamation text-green-500 text-5xl"></i></button>
                </div>
            </div>
            {{-- End Looping --}}
        </div>
    </div>

    {{-- Modal Report Maintenance --}}
    <div id="report-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Report Maintenance
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="report-modal">
                        <i class="fa-solid fa-x"></i>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <form>
                    <div class="p-4 md:p-5 space-y-4">
                        <div class="mb-5">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Unit
                                Pesawat</label>
                            <input type="text"
                                class="bg-[#EBEBEB] border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none block w-full p-2.5"
                                required />
                        </div>
                        <div class="mb-5">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
                            <textarea
                                class="bg-[#EBEBEB] border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none block w-full p-2.5"
                                required></textarea>
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
                        <button data-modal-hide="report-modal" type="button"
                            class="text-white bg-red-700 hover:bg-red-800 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- End Modal Report --}}
@endsection
