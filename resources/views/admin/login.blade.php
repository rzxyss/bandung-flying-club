<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Bandung Flying Club</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            font-family: "Poppins", sans-serif;
        }
    </style>
    @vite('resources/css/app.css')
</head>

<body class="bg-[#EBEBEB]">
    <div class="p-5 md:flex md:flex-row justify-between items-start">
        <div class="md:flex ms-2 md:me-24 gap-1 w-full hidden">
            {{-- <img src="" class="h-8 me-3" alt="Logo" /> --}}
            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_58_385)">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M13.7146 0C11.4582 0 9.2943 0.896337 7.69881 2.49183L0 10.1906V13.7146C0 16.2043 1.06944 18.4442 2.77401 20C1.06944 21.5558 0 23.7957 0 26.2854V29.8094L7.69881 37.5082C9.2943 39.1037 11.4582 40 13.7146 40C16.2043 40 18.4442 38.9306 20 37.226C21.5558 38.9306 23.7957 40 26.2854 40C28.5418 40 30.7057 39.1037 32.3012 37.5082L40 29.8094V26.2854C40 23.7957 38.9306 21.5558 37.226 20C38.9306 18.4442 40 16.2043 40 13.7146V10.1906L32.3012 2.49183C30.7057 0.896337 28.5418 0 26.2854 0C23.7957 0 21.5558 1.06944 20 2.77401C18.4442 1.06944 16.2043 0 13.7146 0ZM25.7588 20C25.6629 19.9125 25.5688 19.8226 25.4766 19.7304L20 14.2538L14.5234 19.7304C14.4312 19.8226 14.3371 19.9125 14.2412 20C14.3371 20.0875 14.4312 20.1774 14.5234 20.2696L20 25.7462L25.4766 20.2696C25.5688 20.1774 25.6629 20.0875 25.7588 20ZM22.2222 29.8094V31.4924C22.2222 33.7364 24.0414 35.5556 26.2854 35.5556C27.363 35.5556 28.3965 35.1275 29.1585 34.3655L35.5556 27.9684V26.2854C35.5556 24.0414 33.7364 22.2222 31.4924 22.2222C30.4148 22.2222 29.3813 22.6503 28.6193 23.4123L22.2222 29.8094ZM17.7778 29.8094L11.3807 23.4123C10.6187 22.6503 9.58524 22.2222 8.50762 22.2222C6.26359 22.2222 4.44444 24.0414 4.44444 26.2854V27.9684L10.8415 34.3655C11.6035 35.1275 12.637 35.5556 13.7146 35.5556C15.9586 35.5556 17.7778 33.7364 17.7778 31.4924V29.8094ZM17.7778 8.50762V10.1906L11.3807 16.5877C10.6187 17.3497 9.58524 17.7778 8.50762 17.7778C6.26359 17.7778 4.44444 15.9586 4.44444 13.7146V12.0316L10.8415 5.63452C11.6035 4.87253 12.637 4.44445 13.7146 4.44445C15.9586 4.44445 17.7778 6.26359 17.7778 8.50762ZM28.6193 16.5877L22.2222 10.1906V8.50762C22.2222 6.26359 24.0414 4.44445 26.2854 4.44445C27.363 4.44445 28.3965 4.87253 29.1585 5.63452L35.5556 12.0316V13.7146C35.5556 15.9586 33.7364 17.7778 31.4924 17.7778C30.4148 17.7778 29.3813 17.3497 28.6193 16.5877Z"
                        fill="#000000" />
                </g>
                <defs>
                    <clipPath id="clip0_58_385">
                        <rect width="40" height="40" fill="white" />
                    </clipPath>
                </defs>
            </svg>
            <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap">Bandung
                Flying Club</span>
        </div>
        <div class="flex flex-col items-center bg-[#D0CFCF] w-full h-screen rounded-lg p-3">
            <div class="flex md:hidden pt-5 pb-10">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_58_385)">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M13.7146 0C11.4582 0 9.2943 0.896337 7.69881 2.49183L0 10.1906V13.7146C0 16.2043 1.06944 18.4442 2.77401 20C1.06944 21.5558 0 23.7957 0 26.2854V29.8094L7.69881 37.5082C9.2943 39.1037 11.4582 40 13.7146 40C16.2043 40 18.4442 38.9306 20 37.226C21.5558 38.9306 23.7957 40 26.2854 40C28.5418 40 30.7057 39.1037 32.3012 37.5082L40 29.8094V26.2854C40 23.7957 38.9306 21.5558 37.226 20C38.9306 18.4442 40 16.2043 40 13.7146V10.1906L32.3012 2.49183C30.7057 0.896337 28.5418 0 26.2854 0C23.7957 0 21.5558 1.06944 20 2.77401C18.4442 1.06944 16.2043 0 13.7146 0ZM25.7588 20C25.6629 19.9125 25.5688 19.8226 25.4766 19.7304L20 14.2538L14.5234 19.7304C14.4312 19.8226 14.3371 19.9125 14.2412 20C14.3371 20.0875 14.4312 20.1774 14.5234 20.2696L20 25.7462L25.4766 20.2696C25.5688 20.1774 25.6629 20.0875 25.7588 20ZM22.2222 29.8094V31.4924C22.2222 33.7364 24.0414 35.5556 26.2854 35.5556C27.363 35.5556 28.3965 35.1275 29.1585 34.3655L35.5556 27.9684V26.2854C35.5556 24.0414 33.7364 22.2222 31.4924 22.2222C30.4148 22.2222 29.3813 22.6503 28.6193 23.4123L22.2222 29.8094ZM17.7778 29.8094L11.3807 23.4123C10.6187 22.6503 9.58524 22.2222 8.50762 22.2222C6.26359 22.2222 4.44444 24.0414 4.44444 26.2854V27.9684L10.8415 34.3655C11.6035 35.1275 12.637 35.5556 13.7146 35.5556C15.9586 35.5556 17.7778 33.7364 17.7778 31.4924V29.8094ZM17.7778 8.50762V10.1906L11.3807 16.5877C10.6187 17.3497 9.58524 17.7778 8.50762 17.7778C6.26359 17.7778 4.44444 15.9586 4.44444 13.7146V12.0316L10.8415 5.63452C11.6035 4.87253 12.637 4.44445 13.7146 4.44445C15.9586 4.44445 17.7778 6.26359 17.7778 8.50762ZM28.6193 16.5877L22.2222 10.1906V8.50762C22.2222 6.26359 24.0414 4.44445 26.2854 4.44445C27.363 4.44445 28.3965 4.87253 29.1585 5.63452L35.5556 12.0316V13.7146C35.5556 15.9586 33.7364 17.7778 31.4924 17.7778C30.4148 17.7778 29.3813 17.3497 28.6193 16.5877Z"
                            fill="#000000" />
                    </g>
                    <defs>
                        <clipPath id="clip0_58_385">
                            <rect width="40" height="40" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
                <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap">Bandung
                    Flying Club</span>
            </div>
            <h1 class="pt-5 pb-10 font-semibold text-2xl">Login</h1>
            <div class="w-full px-5">
                <form>
                    <div class="mb-5">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email"
                            class="bg-[#EBEBEB] border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none block w-full p-2.5"
                            required />
                    </div>
                    <div class="mb-5">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <input type="password"
                            class="bg-[#EBEBEB] border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none block w-full p-2.5"
                            required />
                    </div>
                    <div class="w-full flex justify-center">
                        {{-- <button class="mt-10 text-center bg-[#67C8D6] py-2 px-6 rounded-full">Login</button> --}}
                        <a href="/admin/dashboard" class="mt-10 text-center bg-[#67C8D6] py-2 px-6 rounded-full">Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/tailwind.js') }}"></script>
</body>

</html>
