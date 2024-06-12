@extends('layouts.admin')

@section('content')
    <div class="grid gap-3 grid-cols-2 justify-items-center md:grid-cols-3 md:gap-4">
        <div class="flex flex-col items-center">
            <div class="bg-white rounded-lg flex flex-col justify-between items-center py-3 px-11 gap-2">
                <i class="fa-solid fa-users text-2xl md:text-8xl"></i>
                <h1 class="font-semibold text-base md:text-3xl">Total Staff</h1>
                <h1 class="font-semibold text-base md:text-5xl">50</h1>
            </div>
        </div>
        <div class="flex flex-col items-center">
            <div class="bg-white rounded-lg flex flex-col justify-between items-center py-3 px-11 gap-2">
                <i class="fa-solid fa-plane-departure text-2xl md:text-8xl"></i>
                <h1 class="font-semibold text-base md:text-3xl">Total Aircraft</h1>
                <h1 class="font-semibold text-base md:text-5xl">50</h1>
            </div>
        </div>
        <div class="flex flex-col items-center">
            <div class="bg-white rounded-lg flex flex-col justify-between items-center py-3 px-11 gap-2">
                <i class="fa-solid fa-gas-pump text-2xl md:text-8xl"></i>
                <h1 class="font-semibold text-base md:text-xl">Fuel & Sparepart</h1>
                <h1 class="font-semibold text-base md:text-5xl">50</h1>
            </div>
        </div>
    </div>

    <div class="pt-10 flex flex-col gap-3">
        <h1 class="font-semibold text-xl">Rencently Activities</h1>
        <div class="bg-[#EBEBEB] min-h-screen">
            <h1></h1>
        </div>
    </div>
@endsection
