@extends('layouts.app')

@section('content')
    <div class="relative flex flex-col justify-end w-full h-[66rem] md:min-h-[100vh] lg:min-h-[80vh] xl:min-h-[70rem] 2xl:px-0">
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
        <img src="{{url('assets/images/banner.jpg')}}" class="absolute inset-0 object-center object-cover w-full h-full">
        <div class="absolute inset-0 bg-gradient-to-t from-[#002561]/0 to-[#002561] z-[15] h-[30rem]"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-[#ffffff] to-[#ffffff]/30  z-[10]"></div>
        <div class="relative flex flex-col justify-end w-full max-w-screen-lg 2xl:max-w-screen-xl mx-auto p-5 2lx:px-0 z-[30]">
            <h1 class="text-[16px] md:text-[30px] font-extrabold uppercase text-center font-['inter'] " data-aos="fade-up" data-aos-duration="1000">Our People</h1>
            <p class="text-[12px] md:text-[16px] font-medium text-center font-['inter']" data-aos="fade-up" data-aos-duration="2000">
                Our Trustee Firm was formed by H.E. SENG BUN HUY and his role as the President with the specialist in commercial practice, notary public profession, insolvency administrator and governmental mediator of the Ministry of Justice.      
                <br/>
                <br/>
                His Excellency held a L.L.B (Royal University of Law and Economics – Faculty of Law in Cambodia) and a L.L.M (Yokohama National University – Faculty of International Business Law in Japan). He was member of the Bar of the Kingdom of Cambodia. He was appointed as the member of Legal and Justice Council of the Ministry of Justice. He experienced in commercial contract law, Corporate Commercial, Mergers & Acquisition and Restructuring & Insolvency and a well-known law professor at various universities in the Kingdom. He has extensive experiences in legal advises in the field of Real Estate, Corporate & Tax, Trust Law and Mediation Dispute Resolution. He speaks Khmer, English, and Chinese.
            </p>
        </div>
        <div class="relative flex flex-col justify-end w-full max-w-screen-lg 2xl:max-w-screen-xl mx-auto 2lx:px-0 z-[30]">
            <h1 class="text-[16px] md:text-[20px] font-extrabold uppercase text-center font-['inter'] mt-7">
                Member of the Board of Director
            </h1>
            <div class="swiper_op mySwiper_op overflow-hidden">
                <div class="swiper-wrapper">
                    <div class="swiper-slide relative flex flex-col justify-end items-center">
                        <img src="{{url('assets/images/ceo.png')}}" alt="" class="absolute inset-0">
                        <div class="relative flex flex-col justify-end translate-y-[70%]">
                            <h1 class="font-bold text-[14px] text-center">
                                H.E. SENG BUN HUY
                            </h1>
                            <p class="font-bold text-[12px] text-center">Chairman of the Board of</p>
                        </div>
                    </div>
                    <div class="swiper-slide relative flex flex-col justify-end items-center">
                        <img src="{{url('assets/images/op_1.png')}}" alt="" class="absolute inset-0">
                        <div class="relative flex flex-col justify-end translate-y-[70%]">
                            <h1 class="font-bold text-[14px] text-center">
                                Ms. TANG MOUYSRANG
                            </h1>
                            <p class="font-bold text-[12px] text-center">Director</p>
                        </div>
                    </div>
                    <div class="swiper-slide relative flex flex-col justify-end items-center">
                        <img src="{{url('assets/images/op_2.png')}}" alt="" class="absolute inset-0">
                        <div class="relative flex flex-col justify-end translate-y-[70%] text-center">
                            <h1 class="font-bold text-[14px] text-center">
                                Mr. HO, MING-YU
                            </h1>
                            <p class="font-bold text-[12px] text-center">Director</p>
                        </div>
                    </div>
                    <div class="swiper-slide relative flex flex-col justify-end items-center">
                        <img src="{{url('assets/images/op_2.png')}}" alt="" class="absolute inset-0">
                        <div class="relative flex flex-col justify-end translate-y-[70%]">
                            <h1 class="font-bold text-[14px] text-center">
                                Mr. KITH VEASNA
                            </h1>
                            <p class="font-bold text-[12px] text-center">Director</p>
                        </div>
                    </div>
                    <div class="swiper-slide relative flex flex-col justify-end items-center">
                        <img src="{{url('assets/images/op_3.png')}}" alt="" class="absolute inset-0">
                        <div class="relative flex flex-col justify-end translate-y-[70%]">
                            <h1 class="font-bold text-[14px] text-center">
                                Mr. SENG SARUM
                            </h1>
                            <p class="font-bold text-[12px] text-center">Director</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full max-w-screen-xl mx-auto bg-white mb-16 px-1">
        <h1 class="text-center font-semibold text-[20px] my-10">Executive Trustee Committee</h1>
        <div class="flex flex-wrap xl:flex-nowrap justify-evenly md:justify-center items-center p-2 gap-[2vw] md:p-5 md:gap-[5vw]">
            <div data-aos="fade-up" data-aos-duration="1000">
                <div class="w-[10rem] h-[10rem] overflow-hidden mx-auto rounded-full bg-[#F1F1F1]">
                    <img src="" alt="">
                </div>
                <h1 class="text-center font-semibold text-[14px] md:text-[16px] ">Mr. HO, MING-YU</h1>
                <p class="text-center text-[12px] md:text-[14px]">Chief of Operator</p>
            </div>
            <div data-aos="fade-up" data-aos-duration="1500">
                <div class="w-[10rem] h-[10rem] overflow-hidden mx-auto rounded-full bg-[#F1F1F1]">
                    <img src="{{url('assets/images/soklen.png')}}" alt="">
                </div>
                <h1 class="text-center font-semibold text-[14px] md:text-[16px] ">Ms. SAN SOKLEN</h1>
                <p class="text-center text-[12px] md:text-[14px]">Chief of Executive</p>
            </div>
            <div data-aos="fade-up" data-aos-duration="2000">
                <div class="w-[10rem] h-[10rem] overflow-hidden mx-auto rounded-full bg-[#F1F1F1]">
                    <img src="{{url('assets/images/ceo_1.png')}}" alt="">
                </div>
                <h1 class="text-center font-semibold text-[14px] md:text-[16px] ">H.E. SENG BUN HUY</h1>
                <p class="text-center text-[12px] md:text-[14px]">President</p>
            </div>
            <div data-aos="fade-up" data-aos-duration="2500">
                <div class="w-[10rem] h-[10rem] overflow-hidden mx-auto rounded-full bg-[#F1F1F1]">
                    <img src="{{url('assets/images/director_2.png')}}" alt="">
                </div>
                <h1 class="text-center font-semibold text-[14px] md:text-[16px] ">Ms. TANG MOUYSRANG</h1>
                <p class="text-center text-[12px] md:text-[14px]">Legal Director</p>
            </div>
            <div data-aos="fade-up" data-aos-duration="3000">
                <div class="w-[10rem] h-[10rem] overflow-hidden mx-auto rounded-full bg-[#F1F1F1]">
                    <img src="{{url('assets/images/director_1.png')}}" alt="">
                </div>
                <h1 class="text-center font-semibold text-[14px] md:text-[16px] ">Mr. SENG SARUM</h1>
                <p class="text-center text-[12px] md:text-[14px]">Finance Director</p>
            </div>
        </div>

        <h1 class="text-center font-semibold text-[20px] my-10">Career Opportunity</h1>
        <div class="grid grid-cols-12 justify-center items-center bg-[#20305B] md:min-h-[20rem] w-full max-w-[60rem] mx-auto">
            <div class="col-span-12 md:col-span-6 p-10">
                <h1 class="text-white text-[20px] md:text-[30px]">
                    Personal
                    <br/>
                    Info
                </h1>
                @if (session('message'))
                    <div id="alert-message" class="flex justify-between bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                        <span class="block sm:inline">{{ session('message') }}</span>
                        <button onclick="document.getElementById('alert-message').style.display='none'" class="text-green-700 font-bold">x</button>
                    </div>
                @endif
                <form method="POST" action="{{ route('send.mail') }}">
                    @csrf
                    <div class="flex flex-col justify-center gap-2 font-['inter'] my-2" data-aos="fade-up" data-aos-duration="1000">
                        <label class="text-white">Job Title</label>
                        <input type="text" name="jobTitle" class="border-none outline-none text-[16px] p-2" />
                    </div>
                    <div class="flex flex-col justify-center gap-2 font-['inter'] my-2" data-aos="fade-up" data-aos-duration="2000">
                        <label class="text-white">Name</label>
                        <input type="text" name="name" class="border-none outline-none text-[16px] p-2" />
                    </div>
                    <div class="flex flex-col justify-center gap-2 font-['inter'] my-2" data-aos="fade-up" data-aos-duration="2500">
                        <label class="text-white">Email</label>
                        <input type="text" name="email" class="border-none outline-none text-[16px] p-2" />
                    </div>
                    <div class="flex flex-col justify-center gap-2 font-['inter'] my-2" data-aos="fade-up" data-aos-duration="3000">
                        <label class="text-white">Message</label>
                        <textarea rows="3" name="msg" class="border-none outline-none text-[16px] p-2"></textarea>
                    </div>
                    <button class="bg-[#ffffff] px-3 py-2 font-semibold">Submit</button>
                </form>

            </div>
            <div class="col-span-12 max-sm:order-first md:col-span-6 relative flex flex-col justify-end min-h-[20rem] md:h-full">
                <h1 class="absolute inset-0 text-white p-5 text-[16px] md:text-[30px] z-[20]">Have Question?</h1>
                <img src="{{url('assets/images/career_banner.jpg')}}" alt="" class="z-[10] absolute inset-0 w-full h-full object-center object-cover">
            </div>
        </div>
    </div>
@endsection
