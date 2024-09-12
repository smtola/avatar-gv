@extends('layouts.app')

@section('content')
    <div class="relative flex flex-col justify-end items-center w-full min-h-[30rem] md:min-h-[56rem]">
        <header class="absolute inset-0 z-[26] min-h-[1rem]">
                <div class="bg-[#5dd7fe]/85">
                    <div class="w-full max-w-screen-2xl mx-auto px-5 lg:p-1">
                        <div class="flex justify-between lg:justify-evenly items-center">
                            <div>
                                <img src="{{url('logo.png')}}" class="w-[14rem] md:w-[16rem]">
                            </div>
                            <div class="md:block hidden">
                                <ul class="flex flex-col lg:flex-row justify-end items-center gap-[1vw]">
                                    <li class="flex justify-center items-center gap-[1vw]">
                                        <span >
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook bg-[#1D2E5C] rounded-full p-1 w-[24px] h-[24px]" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                              <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                              <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                                            </svg>
                                        </span >
                                        <p>AVATAR ACCOUNTING & FINANCE</p>
                                    </li>
                                    <li class="flex justify-center items-center gap-2">
                                        <span >
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook bg-[#1D2E5C] rounded-full p-1 w-[24px] h-[24px]" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                             <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                                            </svg>
                                        </span >
                                        <p>AVATAR ACCOUNTING & FINANCE</p>
                                    </li>
                                </ul>
                            </div>
                            <button class="md:hidden block" onclick="isOpen()">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2 hover:bg-white/30 p-1 rounded-full transition-all duration-[500ms]" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#1d2e5c" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M4 6l16 0" />
                                    <path d="M4 12l16 0" />
                                    <path d="M4 18l16 0" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </header>
        @include('components.navbar')
        <div class="absolute inset-0 bg-gradient-to-t from-[#002561]/0 to-[#002561] md:h-[20rem] xl:h-[30rem] z-[15]"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-slate-50 to-white/30 z-[10]"></div>
        <div class="relative flex flex-col justify-center items-center w-full max-w-screen-xl mx-auto p-5 z-[30]">
            <h1 class="font-bold text-center text-2xl md:text-5xl" data-aos="zoom-in-down" data-aos-duration="2500">Photo Gallery</h1>
            <div class="swiper_pg mySwiper_pg overflow-hidden">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="{{url('assets/images/process/pro_1.jpg')}}" target="_blank">
                        <img src="{{url('assets/images/process/pro_1.jpg')}}" />
                    </div>
                    <div class="swiper-slide">
                        <a href="{{url('assets/images/process/pro_2.jpg')}}" target="_blank">
                            <img src="{{url('assets/images/process/pro_2.jpg')}}" />
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{url('assets/images/process/pro_3.jpg')}}" target="_blank">
                            <img src="{{url('assets/images/process/pro_3.jpg')}}" />
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{url('assets/images/process/pro_4.jpg')}}" target="_blank">
                            <img src="{{url('assets/images/process/pro_4.jpg')}}" />
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{url('assets/images/process/pro_5.jpg')}}" target="_blank">
                            <img src="{{url('assets/images/process/pro_5.jpg')}}" />
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{url('assets/images/process/pro_6.jpg')}}" target="_blank">
                            <img src="{{url('assets/images/process/pro_6.jpg')}}" />
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{url('assets/images/process/pro_7.jpg')}}" target="_blank">
                            <img src="{{url('assets/images/process/pro_7.jpg')}}" />
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{url('assets/images/process/pro_8.jpg')}}" target="_blank">
                            <img src="{{url('assets/images/process/pro_8.jpg')}}" />
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{url('assets/images/process/pro_9.jpg')}}" target="_blank">
                            <img src="{{url('assets/images/process/pro_9.jpg')}}" />
                        </a>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
@endsection
