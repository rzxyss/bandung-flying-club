@extends('layouts.admin')

@section('content')
    <div class="flex justify-between items-center pb-10 pt-3 w-full">
        <div>

            <h1 class="font-semibold text-2xl">Staff Bandung Flying Club</h1>
        </div>
        <a href="#" class="flex items-center gap-1 bg-[#88CCA7] p-5 rounded-full text-white">
            <i class="fa-solid fa-plus font-semibold text-xl"></i>
            <h1 class="font-semibold font-xl">Tambah</h1>
        </a>
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
@endsection
