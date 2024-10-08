@extends('layouts.app')

@section('content')
    <div class="relative max-w-screen-xl mx-auto flex flex-col justify-center w-full min-h-full md:h-[70rem]">
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
        <img src="{{url('assets/images/banner_about.jpg')}}" class="absolute inset-0 object-center object-cover h-full w-full">
        <div class="absolute inset-0 bg-gradient-to-t from-[#002561]/0 to-[#002561] z-[15] h-[30rem] md:h-[20rem] lg:h-[30rem]"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-[#ffffff] to-[#ffffff]/10 z-[10]"></div>
        <div class="relative flex flex-col justify-start w-full max-w-screen-md mx-auto z-[30] mt-[10rem]" data-aos="flip-left" data-aos-duration="2500">
            <h1 class="text-[30px] font-extrabold uppercase text-center font-['inter']">About Us</h1>
            <p class="text-[16px] font-medium text-center font-['inter']">
                The Trustee Firm was registered since 2022 under the laws of the Kingdom of Cambodia with a group of trustee professionals practicing and accredited individual trustee and commercial trustee license by Trust Regulator of the Ministry of Economics and Finance.
            </p>
        </div>
        <div class="relative flex flex-col justify-start w-full max-w-screen-xl mx-auto z-[30]">
            <div class="swiper_ab mySwiper_ab overflow-hidden">
                <div class="swiper-wrapper">
                    <div class="swiper-slide overflow-hidden relative flex flex-col justify-center items-center bg-gradient-to-br from-[#20305B] to-[#20305B]/90 rounded-full">
                        <div class="mx-auto text-center p-5">
                                <span>
                                    <svg class="mx-auto w-[38px] 2xl:w-[60px]" viewBox="0 0 146 109" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M34.6783 51.3894C30.145 51.3894 25.7136 52.7337 21.9444 55.2522C18.1751 57.7707 15.2373 61.3504 13.5025 65.5386C11.7677 69.7268 11.3138 74.3353 12.1982 78.7814C13.0826 83.2276 15.2656 87.3116 18.4711 90.5171C21.6766 93.7226 25.7606 95.9055 30.2067 96.7899C34.6529 97.6743 39.2614 97.2204 43.4496 95.4856C47.6377 93.7508 51.2174 90.813 53.7359 87.0438C56.2545 83.2745 57.5987 78.8431 57.5987 74.3099C57.5987 71.2999 57.0059 68.3194 55.854 65.5386C54.7022 62.7577 53.0139 60.231 50.8855 58.1027C48.7571 55.9743 46.2304 54.286 43.4496 53.1341C40.6687 51.9823 37.6882 51.3894 34.6783 51.3894ZM34.6783 90.625C31.4515 90.625 28.2971 89.6681 25.6141 87.8754C22.9311 86.0827 20.8399 83.5346 19.6051 80.5534C18.3702 77.5722 18.0471 74.2918 18.6766 71.1269C19.3062 67.9621 20.86 65.055 23.1417 62.7733C25.4234 60.4916 28.3305 58.9377 31.4954 58.3082C34.6602 57.6787 37.9406 58.0018 40.9218 59.2366C43.903 60.4715 46.4511 62.5627 48.2438 65.2457C50.0366 67.9287 50.9934 71.083 50.9934 74.3099C50.942 78.6209 49.2066 82.7409 46.158 85.7896C43.1094 88.8382 38.9894 90.5736 34.6783 90.625Z" fill="white"/>
                                    <path d="M110.64 51.3894C106.106 51.3894 101.675 52.7337 97.9058 55.2522C94.1365 57.7707 91.1988 61.3504 89.464 65.5386C87.7292 69.7268 87.2753 74.3353 88.1597 78.7814C89.044 83.2276 91.227 87.3116 94.4325 90.5171C97.638 93.7226 101.722 95.9055 106.168 96.7899C110.614 97.6743 115.223 97.2204 119.411 95.4856C123.599 93.7508 127.179 90.813 129.697 87.0438C132.216 83.2745 133.56 78.8431 133.56 74.3099C133.56 68.231 131.145 62.4011 126.847 58.1027C122.549 53.8042 116.719 51.3894 110.64 51.3894ZM110.64 90.625C107.413 90.625 104.259 89.6681 101.575 87.8754C98.8925 86.0827 96.8013 83.5346 95.5665 80.5534C94.3316 77.5722 94.0085 74.2918 94.6381 71.1269C95.2676 67.9621 96.8215 65.055 99.1032 62.7733C101.385 60.4916 104.292 58.9377 107.457 58.3082C110.622 57.6787 113.902 58.0018 116.883 59.2366C119.864 60.4715 122.413 62.5627 124.205 65.2457C125.998 67.9287 126.955 71.083 126.955 74.3099C126.903 78.6209 125.168 82.7409 122.119 85.7896C119.071 88.8382 114.951 90.5736 110.64 90.625Z" fill="white"/>
                                    <path d="M142.015 59.4479L121.869 18.3628C121.576 17.7899 121.13 17.3096 120.581 16.9757L118.236 15.5555L117.245 14.9941L114.834 9.01626C113.785 6.36557 111.966 4.08998 109.611 2.48293C107.256 0.87588 104.474 0.0110635 101.623 0C98.3101 0.00936322 95.1015 1.161 92.5386 3.26069C89.9756 5.36039 88.2151 8.27968 87.554 11.5263L85.8697 19.1554L84.1853 29.7239H80.5193C78.2783 27.9615 75.51 27.0033 72.659 27.0033C69.808 27.0033 67.0397 27.9615 64.7987 29.7239H61.1327L59.4484 19.2875L57.9292 11.6584C57.2927 8.37635 55.5341 5.41804 52.955 3.29086C50.3759 1.16368 47.137 0.000206023 43.7938 0C40.943 0.0110635 38.1609 0.87588 35.8063 2.48293C33.4516 4.08998 31.6324 6.36557 30.5831 9.01626L28.1722 14.9941L27.1814 15.5555L24.8365 16.9757C24.2868 17.3096 23.8409 17.7899 23.5485 18.3628L3.30317 59.4479C1.10119 64.0913 -0.0275876 69.1708 0.000512041 74.3098C-0.00968783 82.1229 2.62134 89.71 7.46643 95.8393C12.3115 101.969 19.0862 106.28 26.6905 108.074C34.2948 109.868 42.2822 109.039 49.356 105.722C56.4297 102.404 62.1744 96.7931 65.6574 89.7993C67.7321 91.1782 70.1678 91.9138 72.659 91.9138C75.1502 91.9138 77.5859 91.1782 79.6607 89.7993C83.1436 96.7931 88.8883 102.404 95.9621 105.722C103.036 109.039 111.023 109.868 118.628 108.074C126.232 106.28 133.007 101.969 137.852 95.8393C142.697 89.71 145.328 82.1229 145.318 74.3098C145.346 69.1708 144.217 64.0913 142.015 59.4479ZM93.9281 12.8143C94.252 11.178 95.0966 9.6903 96.3358 8.57362C97.575 7.45695 99.1423 6.7712 100.803 6.61884C102.465 6.46648 104.13 6.85568 105.552 7.72829C106.974 8.6009 108.075 9.91008 108.691 11.4602L108.922 12.0547C103.864 11.0331 98.6167 11.5154 93.8291 13.4418L93.9281 12.8143ZM92.2108 21.6985C95.2841 19.5977 98.8692 18.3686 102.585 18.1418C106.301 17.915 110.009 18.699 113.315 20.4104L114.801 21.2361L116.32 22.1608L126.889 43.6942C120.673 40.3785 113.592 39.0444 106.596 39.8709C99.5996 40.6974 93.024 43.6451 87.7522 48.3179L92.2108 21.6985ZM36.627 11.4602C37.2431 9.91008 38.3443 8.6009 39.766 7.72829C41.1876 6.85568 42.8535 6.46648 44.5146 6.61884C46.1758 6.7712 47.743 7.45695 48.9822 8.57362C50.2214 9.6903 51.066 11.178 51.3899 12.8143V13.4418C46.6123 11.5219 41.3777 11.0397 36.3298 12.0547L36.627 11.4602ZM28.9648 22.1608L30.4841 21.2361L31.9703 20.4104C35.2763 18.699 38.9842 17.915 42.7 18.1418C46.4159 18.3686 50.0009 19.5977 53.0742 21.6985L57.4998 48.3179C52.228 43.6451 45.6524 40.6974 38.6564 39.8709C31.6604 39.0444 24.5789 40.3785 18.3633 43.6942L28.9648 22.1608ZM34.6784 102.382C29.1262 102.382 23.6987 100.736 19.0821 97.6514C14.4656 94.5667 10.8675 90.1824 8.74273 85.0528C6.61798 79.9232 6.06205 74.2787 7.14524 68.8331C8.22843 63.3876 10.9021 58.3855 14.8281 54.4595C18.7541 50.5335 23.7562 47.8598 29.2017 46.7766C34.6473 45.6935 40.2918 46.2494 45.4214 48.3741C50.551 50.4989 54.9353 54.097 58.02 58.7135C61.1046 63.3301 62.751 68.7576 62.751 74.3098C62.7423 81.7525 59.7819 88.8878 54.5191 94.1505C49.2564 99.4133 42.1211 102.374 34.6784 102.382ZM79.2643 59.4479C77.0688 64.0701 75.9401 69.1267 75.9617 74.2438C75.9789 77.3002 76.3896 80.3416 77.1837 83.2931H76.9195C76.3632 83.8583 75.7 84.3071 74.9686 84.6135C74.2371 84.9199 73.452 85.0777 72.659 85.0777C71.866 85.0777 71.0809 84.9199 70.3495 84.6135C69.618 84.3071 68.9549 83.8583 68.3986 83.2931H68.1344C68.9228 80.363 69.3335 77.3441 69.3564 74.3098C69.3879 69.1704 68.2589 64.0902 66.0537 59.4479C66.0701 59.25 66.0701 59.0512 66.0537 58.8534L62.2556 36.3293H66.0537C66.4883 36.3318 66.9192 36.2485 67.3216 36.0841C67.724 35.9198 68.09 35.6776 68.3986 35.3715C68.9549 34.8063 69.618 34.3574 70.3495 34.051C71.0809 33.7447 71.866 33.5869 72.659 33.5869C73.452 33.5869 74.2371 33.7447 74.9686 34.051C75.7 34.3574 76.3632 34.8063 76.9195 35.3715C77.2281 35.6776 77.594 35.9198 77.9964 36.0841C78.3988 36.2485 78.8297 36.3318 79.2643 36.3293H83.0624L79.2643 58.9194C79.2514 59.0953 79.2514 59.272 79.2643 59.4479ZM110.64 102.382C105.087 102.382 99.6598 100.736 95.0433 97.6514C90.4268 94.5667 86.8286 90.1824 84.7039 85.0528C82.5791 79.9232 82.0232 74.2787 83.1064 68.8331C84.1896 63.3876 86.8633 58.3855 90.7893 54.4595C94.7153 50.5335 99.7174 47.8598 105.163 46.7766C110.608 45.6935 116.253 46.2494 121.383 48.3741C126.512 50.4989 130.896 54.097 133.981 58.7135C137.066 63.3301 138.712 68.7576 138.712 74.3098C138.703 81.7525 135.743 88.8878 130.48 94.1505C125.218 99.4133 118.082 102.374 110.64 102.382Z" fill="white"/>
                                    </svg>
                                </span>
                                <h1 class="text-white font-bold text-md 2xl:text-xl">Mutual Vision</h1>
                                <p class="text-white text-[10px] 2xl:text-[12px]">
                                    Our professional team’s combination of strong knowledge and connection and thorough understanding of how Good Practice of Trust Regulation is implemented and conducted in the Kingdom of Cambodia enables our team to deliver professional, practical and reliable services to our local and international investor, fund owner and their respective beneficiary.
                                </p>
                            </div>
                    </div>
                    <div class="swiper-slide overflow-hidden relative flex flex-col justify-center items-center bg-gradient-to-br from-[#20305B] to-[#20305B]/90 rounded-full">
                        <div class="mx-auto text-center p-5">
                            <span>
                                <svg class="mx-auto w-[38px] 2xl:w-[60px]" viewBox="0 0 130 131" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <mask id="mask0_29_898" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="130" height="131">
                                        <path d="M129.333 130.144V1.47771H0.666667V130.144H129.333Z" fill="white" stroke="white" stroke-width="1.33333"/>
                                        </mask>
                                        <g mask="url(#mask0_29_898)">
                                        <path d="M66.8725 82.5688C66.8725 81.5355 66.0335 80.6965 65.0001 80.6965C63.9667 80.6965 63.1277 81.5355 63.1277 82.5688C63.1277 83.6022 63.9667 84.4412 65.0001 84.4412C66.0335 84.4412 66.8725 83.6022 66.8725 82.5688Z" fill="white" stroke="white" stroke-width="1.33333"/>
                                        <path d="M46.4572 92.3899L34.5313 73.0118L2.53906 128.272H127.461L95.4688 73.0118L83.5428 92.3899" stroke="white" stroke-width="5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M105.625 128.272L65.0001 62.2563L24.3751 128.272" stroke="white" stroke-width="5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M70.7333 90.9503L87.4505 118.116" stroke="white" stroke-width="5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M65.0002 62.2563V3.35009" stroke="white" stroke-width="5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M65.0002 3.35009H105.625L95.469 16.0454L105.625 28.7407H65.0002" stroke="white" stroke-width="5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        </g>
                                        <defs>
                                        <linearGradient id="paint0_linear_29_898" x1="65.0001" y1="85.1079" x2="65.0001" y2="80.0298" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#67DEFF"/>
                                        <stop offset="1" stop-color="#0488FF"/>
                                        </linearGradient>
                                        </defs>
                                    </svg>
                            </span>
                            <h1 class="text-[#ffffff] font-bold text-md 2xl:text-xl">Mission Statement</h1>
                            <p class="text-white text-[10px] 2xl:text-[12px]">
                                Our professional team is dynamic, result-oriented with high commitment to provide the best value services to support our clients’ business and its growth.
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide overflow-hidden relative flex flex-col justify-center items-center bg-gradient-to-br from-[#20305B] to-[#20305B]/90 rounded-full">
                        <div class="mx-auto text-center p-5">
                            <span>
                                <svg class="mx-auto w-[38px] 2xl:w-[60px]" viewBox="0 0 121 122" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <mask id="mask0_29_922" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="121" height="122">
                                        <path d="M0 0.811035H121V121.811H0V0.811035Z" fill="white"/>
                                        </mask>
                                        <g mask="url(#mask0_29_922)">
                                        <path d="M83.7968 70.4269L98.8858 55.3378C101.545 52.6787 103.039 49.0723 103.039 45.3116V16.645C103.039 12.7293 106.213 9.55518 110.129 9.55518C114.044 9.55518 117.219 12.7293 117.219 16.645V55.3544C117.219 60.8828 115.281 66.2366 111.741 70.4836L93.5859 92.27V104.086H60.5V83.4623C60.5 77.1949 62.9897 71.1839 67.4213 66.7518L87.9996 46.1723C90.7682 43.4037 95.2568 43.4035 98.0256 46.1719C100.794 48.9404 100.795 53.4295 98.0261 56.1981L83.797 70.4281" stroke="white" stroke-width="6" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M37.203 70.4269L22.1139 55.3378C19.4545 52.6787 17.9607 49.0723 17.9607 45.3116V16.645C17.9607 12.7293 14.7863 9.55518 10.8709 9.55518C6.95537 9.55518 3.78101 12.7293 3.78101 16.645V55.3544C3.78101 60.8828 5.71913 66.2366 9.25862 70.4836L27.4138 92.27V104.086H60.4998V83.4623C60.4998 77.1949 58.01 71.1839 53.5784 66.7518L33.0001 46.1723C30.2316 43.4037 25.743 43.4035 22.9742 46.1719C20.2053 48.9404 20.2051 53.4295 22.9737 56.1981L37.2028 70.4281" stroke="white" stroke-width="6" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M98.3125 118.266H60.5V104.086H98.3125V118.266Z" stroke="white" stroke-width="6" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M60.4998 118.266H22.6873V104.086H60.4998V118.266Z" stroke="white" stroke-width="6" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M60.4997 11.3477L56.9441 7.79217C52.3624 3.21047 44.9341 3.21047 40.3522 7.79217C35.7703 12.3741 35.7703 19.8024 40.3522 24.3843L60.4997 44.5317L80.6471 24.3843C85.229 19.8024 85.229 12.3741 80.6471 7.79217C76.0652 3.21047 68.6369 3.21047 64.0552 7.79217L60.4997 11.3477Z" stroke="white" stroke-width="6" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        </g>
                                    </svg>
                            </span>
                            <h1 class="text-[#ffffff] font-bold text-xl">Core Values</h1>
                            <p class="text-white text-[10px] 2xl:text-[12px]">
                                Our professional team strives to provide the best client care experience. We are identified as teamwork, persistence and always listen to the client’s concern with respect.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-[#ffffff] min-h-full max-w-screen-sm md:max-w-screen-xl mx-auto py-10">
        <h1 class="font-semibold font-['inter'] text-2xl text-center" data-aos="flip-right" data-aos-duration="2500">Business Registration Certificates</h1>

        <div class="swiper_brs mySwiper_brs">
            <div class="swiper-wrapper">
                <div class="swiper-slide overflow-hidden" >
                    <a href="{{url('assets/images/brc_1.jpg')}}" target="_blank">
                        <img src="{{url('assets/images/brc_1.jpg')}}" alt="" class="w-full block mx-auto object-cover object-center">
                    </a>
                </div>
                <div class="swiper-slide overflow-hidden">
                    <a href="{{url('assets/images/brc_2.jpg')}}" target="_blank">
                        <img src="{{url('assets/images/brc_2.jpg')}}" alt="" class="w-full block mx-auto object-cover object-center">
                    </a>
                </div>
                <div class="swiper-slide overflow-hidden">
                    <a href="{{url('assets/images/brc_3.jpg')}}" target="_blank">
                        <img src="{{url('assets/images/brc_3.jpg')}}" alt="" class="w-full block mx-auto object-cover object-center">
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
