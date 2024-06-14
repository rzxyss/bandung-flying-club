@extends('layouts.app')

@section('content')
    <div class="container mx-auto max-w-screen-lg p-4 overflow-visible ">
        <div class="w-full flex flex-col justify-center items-center pb-10">
            <h1 class="font-semibold text-3xl py-2">Tanggapan pelanggan terhadap layanan BFC</h1>
            <h1 class="font-light text-sm py-2">By <span class="font-bold">Admin</span>, 20 February 2024</h1>
        </div>

        <div class="flex flex-col md:flex-row w-full gap-5">
            <div class="w-9/12">
                <img src="{{ asset('assets/image/news1.png') }}" alt="News"
                    class="aspect-video w-full max-h-full rounded-md bg-cover bg-center object-cover">
                <h1>
                    {!! nl2br("Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                        
                                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).") !!}
                </h1>
            </div>
            <div class="w-3/12">
                <h1 class="text-center font-semibold text-xl">Terpopuler</h1>
                <div class="flex flex-col gap-3">
                    <div class="flex flex-row items-start gap-2 p-3">
                        <img src="{{ asset('assets/image/news1.png') }}" alt="News"
                            class="aspect-video w-40 max-h-full rounded-md bg-cover bg-center object-cover">
                        <div class="flex flex-col">
                            <h1 class="font-semibold text-sm">Pesawat Baru</h1>
                            <h1 class="font-light text-xs">20 Feb</h1>
                        </div>
                    </div>
                    <div class="flex flex-row items-start gap-2 p-3">
                        <img src="{{ asset('assets/image/news2.png') }}" alt="News"
                            class="aspect-video w-40 max-h-full rounded-md bg-cover bg-center object-cover">
                        <div class="flex flex-col">
                            <h1 class="font-semibold text-sm">Pesawat Baru</h1>
                            <h1 class="font-light text-xs">20 Feb</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
