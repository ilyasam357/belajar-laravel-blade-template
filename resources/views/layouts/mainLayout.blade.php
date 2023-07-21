<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>laravel | @yield('title')</title>
</head>

<body>
    <nav class="bg-slate-40 flex justify-between pl-16 pr-16 py-7 ">

        <div
            class="logo flex bg-neutral_100 rounded-xl border border-neutral_300 px-5 py-3 text-black gap-2 items-center">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M16.25 3.125H3.75C2.71447 3.125 1.875 3.96447 1.875 5V15C1.875 16.0355 2.71447 16.875 3.75 16.875H16.25C17.2855 16.875 18.125 16.0355 18.125 15V5C18.125 3.96447 17.2855 3.125 16.25 3.125Z"
                    stroke="#656565" stroke-linejoin="round" />
                <path
                    d="M13.125 8.125C13.8154 8.125 14.375 7.56536 14.375 6.875C14.375 6.18464 13.8154 5.625 13.125 5.625C12.4346 5.625 11.875 6.18464 11.875 6.875C11.875 7.56536 12.4346 8.125 13.125 8.125Z"
                    stroke="#656565" stroke-miterlimit="10" />
                <path
                    d="M11.875 13.1168L8.33359 9.58208C8.10824 9.35678 7.80535 9.22605 7.48684 9.21661C7.16832 9.20717 6.85822 9.31974 6.61992 9.5313L1.875 13.7501M8.75 16.8751L13.568 12.0571C13.7883 11.8363 14.0832 11.7059 14.3948 11.6914C14.7064 11.677 15.0121 11.7795 15.252 11.979L18.125 14.3751"
                    stroke="#656565" stroke-linecap="round" stroke-linejoin="round" />
            </svg>

            <span>
                Logo
            </span>
        </div>
        <ul class="flex items-center gap-4  not-italic font-bold text-sm leading-6">

            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="search" id="search"
                    class="block w-72 h-10 p-4 pl-10 text-sm bg-white  border border-green_500 rounded-xl   dark:placeholder-gray-400 "
                    placeholder="Search" required>
            </div>


            <li class="">
                <a href="/" class="h-10 bg-green_500 rounded-xl px-5 py-3 tracking-spacingbtn text-white">
                    Home
                </a>
            </li>

            <li>
                <a href="/about" class="h-10 bg-green_500 rounded-xl px-5 py-3 tracking-spacingbtn text-white">
                    About
                </a>
            </li>

            <li>
                <a href="/product" class="h-10 bg-green_500 rounded-xl px-5 py-3 tracking-spacingbtn  text-white">
                    Product
                </a>
            </li>
            <img class="rounded-full w-8 " src="{{ asset('/build/assets/img/profil/Image.png') }}" alt="">
        </ul>


    </nav>
    {{-- kategori --}}
    <div class=" flex justify-between pl-16 pr-16 py-8">
        <ul class="flex items-center gap-6  not-italic font-bold text-sm leading-6">
            @foreach ($kategori as $data)
                <li class="">
                    <a href="#"
                        class="w-14 bg-neutral_100 hover:bg-green_500 hover:text-white rounded-xl px-5 py-3 text-neutral_500 font-bold">
                        {{ $data }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
    @yield('content')

    {{-- footer --}}
    <div class="h-heightfooter bg-neutral_100 grid grid-cols-3 gap-20 pl-16 pr-16">

        <div class=" mt-10">
            <div class="w-24 mr-0 logo flex bg-white rounded-xl px-4 py-2 text-black gap-2 items-center">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M16.25 3.125H3.75C2.71447 3.125 1.875 3.96447 1.875 5V15C1.875 16.0355 2.71447 16.875 3.75 16.875H16.25C17.2855 16.875 18.125 16.0355 18.125 15V5C18.125 3.96447 17.2855 3.125 16.25 3.125Z"
                        stroke="#656565" stroke-linejoin="round" />
                    <path
                        d="M13.125 8.125C13.8154 8.125 14.375 7.56536 14.375 6.875C14.375 6.18464 13.8154 5.625 13.125 5.625C12.4346 5.625 11.875 6.18464 11.875 6.875C11.875 7.56536 12.4346 8.125 13.125 8.125Z"
                        stroke="#656565" stroke-miterlimit="10" />
                    <path
                        d="M11.875 13.1168L8.33359 9.58208C8.10824 9.35678 7.80535 9.22605 7.48684 9.21661C7.16832 9.20717 6.85822 9.31974 6.61992 9.5313L1.875 13.7501M8.75 16.8751L13.568 12.0571C13.7883 11.8363 14.0832 11.7059 14.3948 11.6914C14.7064 11.677 15.0121 11.7795 15.252 11.979L18.125 14.3751"
                        stroke="#656565" stroke-linecap="round" stroke-linejoin="round" />
                </svg>

                <span>
                    Logo
                </span>
            </div>
            <p class="mt-4 leading-6  text-sm font-medium text-neutral_400">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            </p>
            <div class="flex gap-4 mt-6 text-neutral_500">
                {{-- ig icon --}}
                <a href="#">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12 16C13.0609 16 14.0783 15.5786 14.8284 14.8284C15.5786 14.0783 16 13.0609 16 12C16 10.9391 15.5786 9.92172 14.8284 9.17157C14.0783 8.42143 13.0609 8 12 8C10.9391 8 9.92172 8.42143 9.17157 9.17157C8.42143 9.92172 8 10.9391 8 12C8 13.0609 8.42143 14.0783 9.17157 14.8284C9.92172 15.5786 10.9391 16 12 16Z"
                            stroke="#656565" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M3 16V8C3 6.67392 3.52678 5.40215 4.46447 4.46447C5.40215 3.52678 6.67392 3 8 3H16C17.3261 3 18.5979 3.52678 19.5355 4.46447C20.4732 5.40215 21 6.67392 21 8V16C21 17.3261 20.4732 18.5979 19.5355 19.5355C18.5979 20.4732 17.3261 21 16 21H8C6.67392 21 5.40215 20.4732 4.46447 19.5355C3.52678 18.5979 3 17.3261 3 16Z"
                            stroke="#656565" stroke-width="2" />
                        <path d="M17.5 6.52396L17.5227 6.49902" stroke="#656565" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </a>

                {{-- fb icon --}}
                <a href="#">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M21 8V16C21 17.3261 20.4732 18.5979 19.5355 19.5355C18.5979 20.4732 17.3261 21 16 21H8C6.67392 21 5.40215 20.4732 4.46447 19.5355C3.52678 18.5979 3 17.3261 3 16V8C3 6.67392 3.52678 5.40215 4.46447 4.46447C5.40215 3.52678 6.67392 3 8 3H16C17.3261 3 18.5979 3.52678 19.5355 4.46447C20.4732 5.40215 21 6.67392 21 8Z"
                            stroke="#656565" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M11 21V12C11 9.812 11.5 8 15 8M9 13H15" stroke="#656565" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
                {{-- twiter icon --}}
                <a href="#">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M23 3.01006C23 3.01006 20.982 4.20206 19.86 4.54006C19.2577 3.84757 18.4573 3.35675 17.567 3.13398C16.6767 2.91122 15.7395 2.96725 14.8821 3.29451C14.0247 3.62177 13.2884 4.20446 12.773 4.96377C12.2575 5.72309 11.9877 6.62239 12 7.54006V8.54006C10.2426 8.58562 8.50127 8.19587 6.93101 7.4055C5.36074 6.61513 4.01032 5.44869 3 4.01006C3 4.01006 -1 13.0101 8 17.0101C5.94053 18.408 3.48716 19.109 1 19.0101C10 24.0101 21 19.0101 21 7.51006C21 7.23206 20.972 6.95406 20.92 6.68006C21.94 5.67406 23 3.01006 23 3.01006Z"
                            stroke="#656565" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
                {{-- yt icon --}}
                <a href="#">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M14 12L10.5 14V10L14 12Z" fill="#656565" stroke="#656565" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M2 12.7074V11.2924C2 8.39739 2 6.94939 2.905 6.01839C3.811 5.08639 5.237 5.04639 8.088 4.96539C9.438 4.92739 10.818 4.90039 12 4.90039C13.181 4.90039 14.561 4.92739 15.912 4.96539C18.763 5.04639 20.189 5.08639 21.094 6.01839C22 6.94939 22 8.39839 22 11.2924V12.7074C22 15.6034 22 17.0504 21.095 17.9824C20.189 18.9134 18.764 18.9544 15.912 19.0344C14.562 19.0734 13.182 19.1004 12 19.1004C10.6958 19.0965 9.39163 19.0745 8.088 19.0344C5.237 18.9544 3.811 18.9144 2.905 17.9824C2 17.0504 2 15.6024 2 12.7084V12.7074Z"
                            stroke="#656565" stroke-width="2" />
                    </svg>
                </a>
                {{-- th icon --}}
                <a href="#">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M21 5L2 12.5L9 13.5M21 5L18.5 20L9 13.5M21 5L9 13.5M9 13.5V19L12.249 15.723"
                            stroke="#656565" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
            </div>
        </div>

        <div class=" mt-10">
            <h2 class="font-bold text-lg text-neutral_500">
                Alamat Qodr
            </h2>
            <p class="mt-4 leading-6  text-base font-medium text-neutral_400 mb-2">
                Sukorame RT 17 Mangunan, Dlingo, Bantul, 55783 Daerah Istimewa Yogyakarta
            </p>
            <a href="" class="text-green_500 text-base">
                https://s.id/1Nvtw
            </a>
        </div>

        <div class=" mt-10">
            <h2 class="font-bold text-lg text-neutral_500">
                Website Qodr
            </h2>
            <p class="mt-4 leading-6  text-base font-medium text-neutral_400 mb-2">
                Kunjungi website QODR untuk mendapatkan informasi lebih lanjut
            </p>
            <a href="" class="text-green_500 text-base">
                https://s.id/1Nvtw
            </a>
        </div>
    </div>
</body>

</html>
