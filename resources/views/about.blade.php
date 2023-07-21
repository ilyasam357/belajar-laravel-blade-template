@extends('layouts.mainLayout')
@section('title', 'About')

@section('content')

    {{-- hero section --}}
    <div class="grid grid-cols-4  pl-10 pr-10 py-8 justify-items-center">

        @foreach ($desimg as $item)
            <div class="gap-14 pb-10">
                <div class="">
                    <div class="absolute mt-36 ml-6 bg-slate-300 hidden text-white   cursor-pointer">
                        <p>Agency Website Design...</p>
                    </div>
                    <div class="">
                        <img class="rounded-2xl w-72" src="{{ asset('build/assets/img/Image.png') }}" alt="">
                    </div>

                </div>

                <div class="flex flex-row pt-4 items-center justify-between">
                    <div class="flex gap-3">
                        <img class="rounded-full w-6 " src="{{ asset('/build/assets/img/profil/Image.png') }}"
                            alt="">
                        <h1 class="text-base not-italic font-semibold text-neutral_400">{{ $item }}</h1>
                    </div>

                    <a href="" class="bg-green_500 px-6 py-1 rounded-md text-neutral_100">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.66667 7.99984L8 11.3332M8 11.3332L11.3333 7.99984M8 11.3332V2.6665M4 13.3332H12"
                                stroke="#F7F7F7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>

                </div>
            </div>
        @endforeach


    </div>

    <button class="mx-btnLoad mt-10 mb-20">
        <a href="/"
            class="w-14 bg-neutral_100 text-neutral_500 hover:bg-green_500 hover:text-white rounded-xl px-5 py-3 font-bold">
            Load More
        </a>
    </button>


@endsection
