@extends('layouts.app')

@section('banner')
    <img src="{{url('assets/images/banner.jpg')}}" class="absolute inset-0 object-center object-cover h-full w-full">
@endsection
@section('content')
        <div class="absolute inset-0 bg-gradient-to-t from-[#002561]/0 to-[#002561] md:h-[20rem] xl:h-[30rem] z-[15] mt-0 md:mt-[11.3%] lg:mt-[9.8%] xl:mt-[7.8%] 2xl:mt-[5.6%]"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-slate-50 to-white/30 z-[10]"></div>
        <div class="absolute inset-0 w-full max-w-screen-xl mx-auto  p-5 2lx:px-0 z-[25]">
            <img src="{{url('assets/images/logo/logo.png')}}" class="w-[16rem] md:w-[10rem] 2xl:w-[12rem] mx-auto mt-[30%] md:mt-[27%] xl:mt-[15%] 2xl:mt-[20%]">
            <h1 class="text-[30px] md:text-[60px] lg:text-[76px] 2xl:text-[100px] font-extrabold uppercase text-center font-['inter'] my-5 h-[24px] md:h-[60px] lg:h-[76px] 2xl:h-[90px]">Welcome to</h1>
            <h2 class="text-[18px] md:text-[20px] lg:text-[40px] 2xl:text-[50px] font-extrabold uppercase text-center font-['inter'] my-5">AVATAR GLOBAL VENTURES</h2>
            <p class="md:text-[14px] lg:text-[18px] 2xl:text-[24px] font-medium text-center font-['inter']">
                We are an independent legal entity duly registered and accredited by Cambodian Trust Regulator, the Commercial Trust License no. 009TR/LC/TC dated 20 August 2024.
            </p>
        </div>
@endsection
