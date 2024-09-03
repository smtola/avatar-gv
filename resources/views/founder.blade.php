@extends('layouts.app')
@section('banner')
    <img src="{{url('assets/images/banner.jpg')}}" class="absolute inset-0 object-center object-cover h-full w-full">
@endsection
@section('content')
    <div class="absolute inset-0 bg-gradient-to-t from-[#002561]/0 to-[#002561] z-[15] h-[30rem] md:h-[20rem] lg:h-[30rem] md:mt-[11.3%] lg:mt-[9.8%] xl:mt-[7.8%] 2xl:mt-[5.6%]"></div>
    <div class="absolute inset-0 bg-gradient-to-t from-[#ffffff] to-[#ffffff]/70 z-[10]"></div>
    <div class="absolute inset-0 w-full max-w-screen-lg 2xl:max-w-screen-xl mx-auto p-5 2lx:px-0 z-[25]">
        <h1 class="text-[30px] md:text-[40px] font-extrabold uppercase text-center font-['inter'] my-5 mt-[50%] md:mt-[30%]">Founder</h1>
        <p class="text-[14px] md:text-[20px] font-medium text-center font-['inter']">
            Our Trustee Firm was formed by H.E. SENG BUN HUY and his role as the President with the specialist in commercial practice, notary public profession, insolvency administrator and governmental mediator of the Ministry of Justice.      
            <br/>
            <br/>
            His Excellency held a L.L.B (Royal University of Law and Economics – Faculty of Law in Cambodia) and a L.L.M (Yokohama National University – Faculty of International Business Law in Japan). He was member of the Bar of the Kingdom of Cambodia. He was appointed as the member of Legal and Justice Council of the Ministry of Justice. He experienced in commercial contract law, Corporate Commercial, Mergers & Acquisition and Restructuring & Insolvency and a well-known law professor at various universities in the Kingdom. He has extensive experiences in legal advises in the field of Real Estate, Corporate & Tax, Trust Law and Mediation Dispute Resolution. He speaks Khmer, English, and Chinese.
        </p>
    </div>

@endsection
@section('detail')
    <div class="w-full max-w-screen-xl mx-auto bg-white mb-16">
    <h1 class="text-[16px] md:text-[30px] font-extrabold uppercase text-center font-['inter'] mt-7">
        Member of the Board of Director
    </h1>
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="{{url('assets/images/ceo.png')}}" class="mx-auto"/>
                <div >
                    <h1 class="text-center font-semibold text-[16px] ">H.E. SENG BUN HUY</h1>
                    <p class="text-center text-[14px]">CEO</p>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="{{url('assets/images/director_2.png')}}" class="mx-auto"/>
                <div >
                    <h1 class="text-center font-semibold text-[16px] ">Ms. TANG MOUYSRANG</h1>
                    <p class="text-center text-[14px]">Director</p>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="{{url('assets/images/director.png')}}" class="mx-auto"/>
                <div>
                    <h1 class="text-center font-semibold text-[16px] ">Mr. HO, MING-YU</h1>
                    <p class="text-center text-[14px]">Director</p>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="{{url('assets/images/director.png')}}" class="mx-auto"/>
                <div>
                    <h1 class="text-center font-semibold text-[16px] ">Mr. KITH VEASNA</h1>
                    <p class="text-center text-[14px]">Director</p>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="{{url('assets/images/director_1.png')}}" class="mx-auto"/>
                <div class="my-5">
                    <h1 class="text-center font-semibold text-[16px] ">Mr. SENG SARUM</h1>
                    <p class="text-center text-[14px]">Director</p>
                </div>
            </div>
        </div>
    </div>
        <h1 class="text-center font-semibold text-[20px] my-5">Executive Trustee Committee</h1>
        <div class="flex flex-wrap xl:flex-nowrap justify-evenly md:justify-center items-center p-2 gap-[2vw] md:p-5 md:gap-[5vw]">
            <div>
                <div class="w-[10rem] h-[10rem] overflow-hidden mx-auto rounded-full bg-[#F1F1F1]">
                    <img src="" alt="">
                </div>
                <h1 class="text-center font-semibold text-[14px] md:text-[16px] ">Mr. HO, MING-YU</h1>
                <p class="text-center text-[12px] md:text-[14px]">Chief of Operator</p>
            </div>
            <div>
                <div class="w-[10rem] h-[10rem] overflow-hidden mx-auto rounded-full bg-[#F1F1F1]">
                    <img src="{{url('assets/images/soklen.png')}}" alt="">
                </div>
                <h1 class="text-center font-semibold text-[14px] md:text-[16px] ">Ms. SAN SOKLEN</h1>
                <p class="text-center text-[12px] md:text-[14px]">Chief of Executive</p>
            </div>
            <div>
                <div class="w-[10rem] h-[10rem] overflow-hidden mx-auto rounded-full bg-[#F1F1F1]">
                    <img src="{{url('assets/images/ceo.png')}}" alt="">
                </div>
                <h1 class="text-center font-semibold text-[14px] md:text-[16px] ">H.E. SENG BUN HUY</h1>
                <p class="text-center text-[12px] md:text-[14px]">President</p>
            </div>
            <div>
                <div class="w-[10rem] h-[10rem] overflow-hidden mx-auto rounded-full bg-[#F1F1F1]">
                    <img src="{{url('assets/images/director_2.png')}}" alt="">
                </div>
                <h1 class="text-center font-semibold text-[14px] md:text-[16px] ">Ms. TANG MOUYSRANG</h1>
                <p class="text-center text-[12px] md:text-[14px]">Legal Director</p>
            </div>
            <div>
                <div class="w-[10rem] h-[10rem] overflow-hidden mx-auto rounded-full bg-[#F1F1F1]">
                    <img src="{{url('assets/images/director_1.png')}}" alt="">
                </div>
                <h1 class="text-center font-semibold text-[14px] md:text-[16px] ">Mr. SENG SARUM</h1>
                <p class="text-center text-[12px] md:text-[14px]">Finance Director</p>
            </div>
        </div>
    </div>
@endsection
