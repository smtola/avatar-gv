@extends('layouts.app')

@section('content')
    <div class="relative flex flex-col justify-center items-center w-full h-screen md:h-[110vh] xl:h-[70rem] 2xl:px-0">
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
        <img src="{{url('assets/images/banner.jpg')}}" alt="" class="absolute inset-0 object-center object-cover h-full w-full">
        <div class="absolute inset-0 bg-gradient-to-t from-[#002561]/0 to-[#002561] md:h-[30rem] z-[15]"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-slate-50 to-white/30 z-[10]"></div>
        <div class="relative flex flex-col justify-center items-center w-full max-w-screen-xl mx-auto p-5 z-[25]">
            <img src="{{url('assets/images/logo/logo.png')}}" class="w-[10rem] md:w-[20rem] mx-auto" data-aos="fade-up" data-aos-duration="3000">
            <h1 class="text-[30px] md:text-[100px] font-extrabold uppercase text-center font-['inter'] my-5 h-[2px] md:h-[60px] lg:h-[76px] 2xl:h-[90px]" data-aos="fade-down" data-aos-duration="2000">Welcome to</h1>
            <h2 class="text-[15px] md:text-[50px] font-extrabold uppercase text-center font-['inter'] my-5" data-aos="zoom-in" data-aos-duration="1000">AVATAR GLOBAL VENTURES</h2>
            <p class="text-[12px] md:text-[24px] font-medium text-center font-['inter'] lg:w-[45rem]" data-aos="zoom-in" data-aos-duration="1000">
                We are an independent legal entity duly registered and accredited by Cambodian Trust Regulator, the Commercial Trust License no. 009TR/LC/TC dated 20 August 2024.
            </p>
        </div>
    </div>
    @include('components.our-service')
    <div class="relative flex-col justify-end min-h-[54rem] md:min-h-[26rem] xl:min-h-[27rem] bg-[#D9D9D9] overflow-hidden">
        <div class="absolute inset-0 flex flex-wrap md:flex-nowrap justify-center items-center gap-[2vw] xl:gap-[1vw] bg-[#ffffff] max-sm:p-5 md:mt-[3rem] xl:mt-[5rem]">
            <div>
                <img src="{{url('assets/images/ceo.png')}}" alt="" class="w-full h-full mx-auto" data-aos="fade-up" data-aos-duration="2000">
            </div>
            <div class="w-full max-w-[30rem] lg:max-w-[40rem] xl:max-w-[50rem] 2xl:max-w-[60rem]" data-aos="fade-left" data-aos-duration="2000">
                <h1 class="font-['inter'] font-bold text-[14px] lg:text-[24px]">Message From CEO</h1>
                <br/>
                <p class="font-['inter'] text-[12px] lg:text-[14px] xl:text-[16px]">
                    Our Trustee Firm was formed by H.E. SENG BUN HUY and his role as the President with the specialist in commercial
                    practice, notary public profession, insolvency administrator and governmental mediator of the Ministry of
                    Justice.
                    His Excellency held a L.L.B (Royal University of Law and Economics – Faculty of Law in Cambodia) and a L.L.M
                    (Yokohama National University – Faculty of International Business Law in Japan). He was member of the Bar of the
                    Kingdom of Cambodia. He was appointed as the member of Legal and Justice Council of the Ministry of Justice. He
                    experienced in commercial contract law, Corporate Commercial, Mergers & Acquisition and Restructuring &
                    Insolvency and a well-known law professor at various universities in the Kingdom. He has extensive experiences in
                    legal advises in the field of Real Estate, Corporate & Tax, Trust Law and Mediation Dispute Resolution. He speaks
                    Khmer, English, and Chinese.
                </p>
            </div>
        </div>
    </div>

    <div class="bg-[#20305B] min-h-[22rem] 2xl:min-h-[26rem] overflow-hidden">
        <div class="swiper_pro mySwiper-pro">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{url('assets/images/process/pro_1.jpg')}}" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="{{url('assets/images/process/pro_2.jpg')}}" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="{{url('assets/images/process/pro_3.jpg')}}" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="{{url('assets/images/process/pro_4.jpg')}}" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="{{url('assets/images/process/pro_5.jpg')}}" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="{{url('assets/images/process/pro_6.jpg')}}" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="{{url('assets/images/process/pro_7.jpg')}}" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="{{url('assets/images/process/pro_8.jpg')}}" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="{{url('assets/images/process/pro_9.jpg')}}" alt="">
                </div>
            </div>
        </div>

    </div>

    <div class="bg-[#ffffff] text-center w-full max-w-screen-xl mx-auto px-5 py-24">
        <h1 class="font-['inter'] font-bold text-md lg:text-[24px] mb-5" data-aos="fade-down" data-aos-duration="1000">Why Us</h1>
        <p class="font-['inter'] text-[16px]" data-aos="zoom-in-down" data-aos-duration="2000">
            Our Trustee Firm was formed by H.E. SENG BUN HUY and his role as the President with the specialist in commercial
            practice, notary public profession, insolvency administrator and governmental mediator of the Ministry of Justice.
            His Excellency held a L.L.B (Royal University of Law and Economics – Faculty of Law in Cambodia) and a L.L.M (Yokohama
            National University – Faculty of International Business Law in Japan.
        </p>
    </div>
@endsection
