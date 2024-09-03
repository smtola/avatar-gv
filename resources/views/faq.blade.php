@extends('layouts.app')
@section('banner')
    <img src="{{url('assets/images/banner_faq.jpg')}}" class="absolute inset-0 object-center object-cover h-full w-full">
@endsection
@section('content')
    <div class="absolute inset-0 bg-gradient-to-t from-[#002561]/0 to-[#002561] z-[15] h-[30rem] md:h-[20rem] lg:h-[30rem] md:mt-[11.3%] lg:mt-[9.8%] xl:mt-[7.8%] 2xl:mt-[5.6%]"></div>
    <div class="absolute inset-0 bg-gradient-to-t from-[#ffffff] to-[#ffffff]/70 z-[10]"></div>
    <div class="absolute inset-0 w-full max-w-screen-lg 2xl:max-w-screen-md mx-auto md:mb-[10%] lg:my-0 p-5 2xl:px-0 z-[25]">
        <h1 class="text-[20px] md:text-[30px] font-extrabold uppercase text-center font-['inter'] mt-[30%] md:mt-[25%] xl:mt-[20%] 2xl:mt-[40%]">F A Q</h1>
        <ul>
                <li class="my-2">
                    <h1 class="font-semibold text-[16px] md:text-[20px]">Corporate Due Diligence</h1>
                    <p class="text-[12px] md:text-[16px]">
                        Cambodia is the place where it is moving forward to rule of laws and fully challenge by unpredictable environment of legal practice. Therefore, it would be necessary to minimize the risk and encourage for pre-post due diligence as the basic of understanding the counterparty’s position in every commercial deal we are hired to engage with.
                    </p>
                </li>
                <li class="my-2">
                    <h1 class="font-semibold text-[16px] md:text-[20px]">Legal Opinion & Trustee Advice</h1>
                    <p class="text-[12px] md:text-[16px]">
                        Prior to the registration of the Trust Deed, it is always a great concern from the Asset Owner or their beneficiary or clients to under the legally or validity of the deed to be implemented under Cambodian law and authorities. Our legal team is in the specialist of commercial contract and notary profession would rending the issuance of legal documents to opine and provide advice on Cambodian trust transaction to the full extent of international good practice.
                    </p>
                </li>
                <li class="my-2">
                    <h1 class="font-semibold text-[16px] md:text-[20px]">Asset Transfer and M&A</h1>
                    <p class="text-[12px] md:text-[16px]">
                        Cambodian regulations have been paved the ways of determination on the nature of property and transfer pricing. We experienced in this M&A deal and mostly for Asset Transfer practice through the regulation to meet with client’s needs...
                    </p>
                </li>
            </ul>
        <div class="pt-5 md:py-10 2xl:px-0">
                <p class="font-['kokoro'] text-center text-[12px] md:text-[20px]">
                    Our experience in private equity and asset regeneration opportunities in Southeast Asia, including in the areas of AI technology and financial sector (banking and non-banking service) and others forms of security mechanization. We would be able to tailor your needs within the scope of trust regulator given to the view that kind of adaptation and customization.
                </p>
            </div>
    </div>
@endsection
