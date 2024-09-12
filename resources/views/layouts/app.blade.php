<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Avatar Global Ventures</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="{{url('logo.png')}}" type="image/x-icon">
        <link
          rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;800&display=swap"
        />
        <link
          rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Kokoro:wght@400&display=swap"
        />
        <link
          rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Arimo Hebrew Subset:wght@400&display=swap"
        />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="{{url('assets/css/styles.css')}}">

        @vite('resources/css/app.css')
    </head>
    <body class="text-[#1D2E5C]">
        <main>
            @yield('content')
        </main>
            <footer class="bg-[#20305B]/95">
                <div class="w-full max-w-screen-xl mx-auto p-5 2lx:px-0">
                    <div class="grid grid-cols-12 justify-center items-start gap-[5vw]">
                        <div class="col-span-12 md:col-span-6">
                            <ul>
                                <li>
                                    <img src="{{url('assets/images/logo/white_logo.png')}}" class="w-[20rem]" data-aos="fade-right" data-aos-duration="1000">
                                </li>
                                <li class="flex justify-start items-center gap-[1vw] my-5">
                                    <span data-aos="fade-left" data-aos-duration="1000">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-line bg-[#00C200] w-[32px] md:w-[46px] h-[32px] md:h-[46px] rounded-full p-1" viewBox="0 0 24 24" stroke-width="1" stroke="none" fill="#ffffff" stroke-linecap="round" stroke-linejoin="round">
                                          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                          <path d="M21 10.663c0 -4.224 -4.041 -7.663 -9 -7.663s-9 3.439 -9 7.663c0 3.783 3.201 6.958 7.527 7.56c1.053 .239 .932 .644 .696 2.133c-.039 .238 -.184 .932 .777 .512c.96 -.42 5.18 -3.201 7.073 -5.48c1.304 -1.504 1.927 -3.029 1.927 -4.715v-.01z" />
                                        </svg>
                                    </span>
                                    <span data-aos="fade-left" data-aos-duration="1500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-line bg-[#00C200] w-[32px] md:w-[46px] h-[32px] md:h-[46px] rounded-full p-1" viewBox="0 0 24 24" stroke-width="1" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                             <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                              <path d="M16.5 10c3.038 0 5.5 2.015 5.5 4.5c0 1.397 -.778 2.645 -2 3.47l0 2.03l-1.964 -1.178a6.649 6.649 0 0 1 -1.536 .178c-3.038 0 -5.5 -2.015 -5.5 -4.5s2.462 -4.5 5.5 -4.5z" />
                                              <path d="M11.197 15.698c-.69 .196 -1.43 .302 -2.197 .302a8.008 8.008 0 0 1 -2.612 -.432l-2.388 1.432v-2.801c-1.237 -1.082 -2 -2.564 -2 -4.199c0 -3.314 3.134 -6 7 -6c3.782 0 6.863 2.57 7 5.785l0 .233" />
                                              <path d="M10 8h.01" />
                                              <path d="M7 8h.01" />
                                              <path d="M15 14h.01" />
                                              <path d="M18 14h.01" />
                                        </svg>
                                    </span>
                                    <span data-aos="fade-left" data-aos-duration="2000">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-line bg-[#00C200] w-[32px] md:w-[46px] h-[32px] md:h-[46px] rounded-full p-1" viewBox="0 0 24 24" stroke-width="1" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                           <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                                            <path d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1" />
                                        </svg>
                                    </span>
                                    <span data-aos="fade-left" data-aos-duration="2500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-line bg-[#039BE5] w-[32px] md:w-[46px] h-[32px] md:h-[46px] rounded-full p-1" viewBox="0 0 24 24" stroke-width="1" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                             <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                             <path d="M15 10l-4 4l6 6l4 -16l-18 7l4 2l2 6l3 -4" />
                                        </svg>
                                    </span>
                                    <span data-aos="fade-left" data-aos-duration="3000">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-line bg-[#6F3FAA] w-[32px] md:w-[46px] h-[32px] md:h-[46px] rounded-full p-1" viewBox="0 0 24 24" stroke-width="1" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                              <path stroke="none" d="M0 0h24v24H0z" fill="none"/> <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" /> <path d="M15 7a2 2 0 0 1 2 2" /> <path d="M15 3a6 6 0 0 1 6 6" />
                                        </svg>
                                    </span>
                                </li>
                                <li>
                                    <p class="text-white font-inter text-[12px] md:text-[16px]" data-aos="zoom-in" data-aos-duration="1500">
                                        Email: huy@ avatar-globalventures.com.kh
                                        <br/>
                                        Website: www. avatar-globalventures.com.kh
                                        <br/>
                                        Address: Villa No. 37-R04, Street 360, Village 1, Sangkat Boeung Keng Kang 1, Khan Boeung Keng Kang, Phnom Penh City, Kingdom of Cambodia.
                                    </p>
                                </li>
                                <li class="my-2">
                                    <h1 class="text-[14px] md:text-[20px] font-bold text-[#ffffff]" data-aos="zoom-in" data-aos-duration="1500">Follow us on</h1>
                                    <div class="flex justify-start items-center gap-[1vw] my-5">
                                        <span data-aos="fade-left" data-aos-duration="1000">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-line bg-[#1877F2] w-[32px] md:w-[46px] h-[32px] md:h-[46px] rounded-full p-1" viewBox="0 0 24 24" stroke-width="1" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                              <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                                            </svg>
                                        </span>
                                        <span data-aos="fade-left" data-aos-duration="1500">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-line bg-[#007AB9] w-[32px] md:w-[46px] h-[32px] md:h-[46px] rounded-full p-1" viewBox="-5 -3 26 26" stroke-width="1" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path xmlns="http://www.w3.org/2000/svg" d="M16.0979 10.7658V16.957H12.6678V11.1808C12.6678 9.7304 12.1726 8.73993 10.9307 8.73993C9.98292 8.73993 9.41989 9.40675 9.17125 10.0524C9.08095 10.2832 9.05768 10.6036 9.05768 10.9273V16.9568H5.62735C5.62735 16.9568 5.67339 7.17366 5.62735 6.16098H9.05793V7.69084C9.05102 7.70289 9.0413 7.71467 9.03516 7.72618H9.05793V7.69084C9.51377 6.95683 10.3267 5.90748 12.1493 5.90748C14.406 5.90748 16.0979 7.45046 16.0979 10.7658ZM2.03894 0.957031C0.865566 0.957031 0.0979004 1.76305 0.0979004 2.82205C0.0979004 3.85855 0.843312 4.68787 1.99392 4.68787H2.01617C3.21256 4.68787 3.95644 3.85855 3.95644 2.82205C3.93367 1.76305 3.21256 0.957031 2.03894 0.957031ZM0.301776 16.957H3.73082V6.16098H0.301776V16.957Z" fill="#F1F2F2"/>
                                            </svg>
                                        </span>
                                        <span data-aos="fade-left" data-aos-duration="2000">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-line bg-[#ffffff] w-[32px] md:w-[46px] h-[32px] md:h-[46px] rounded-full p-1" viewBox="-5 -3 26 26" stroke-width="1" stroke="#545454" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M10.298 7.24804L16.2544 0.473145H14.843L9.67103 6.35571L5.54025 0.473145H0.775879L7.02242 9.36861L0.775879 16.4731H2.18743L7.6491 10.261L12.0115 16.4731H16.7759L10.2977 7.24804H10.298ZM2.69602 1.5129H4.86406L14.8436 15.4807H12.6755L2.69602 1.5129Z" fill="black"/>
                                            </svg>
                                        </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-span-12 md:col-span-6">
                            <ul>
                                <li>
                                    <div class="bg-[#D9D9D9] w-full min-h-[50px]" data-aos="flip-up" data-aos-duration="1000">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d7818.092837452229!2d104.921833!3d11.548528!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTHCsDMyJzU0LjIiTiAxMDTCsDU1JzIzLjkiRQ!5e0!3m2!1sen!2skh!4v1725288271235!5m2!1sen!2skh"
                                                class="w-full h-[250px]"
                                                width="600" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </li>
                                <li class="mt-5" data-aos="flip-up" data-aos-duration="1000">
                                    <h1 class="text-[16px] md:text-[20px] font-semibold text-[#ffffff]">
                                        Office and Emergency Contact
                                        <br/>
                                        Office Contact:
                                    </h1>
                                </li>
                                <li class="my-2" data-aos="flip-up" data-aos-duration="2000">
                                    <h1 class="text-[#ffffff] font-bold text-[14px] md:text-[16px]">
                                        Mr. NGUON SO SOK HEANG
                                    </h1>
                                    <div class="flex justify-start items-center gap-[1vw]">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-line bg-[#039BE5] w-[20px] h-[20px] rounded-full p-1" viewBox="0 0 24 24" stroke-width="1" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                         <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                         <path d="M15 10l-4 4l6 6l4 -16l-18 7l4 2l2 6l3 -4" />
                                    </svg>
                                </span>
                                        <p class="text-[#ffffff] text-[12px] md:text-[16px]">+855 17 600 499</p>
                                    </div>
                                </li>
                                <li class="my-2" data-aos="flip-up" data-aos-duration="2500">
                                    <h1 class="text-[#ffffff] font-bold text-[14px] md:text-[16px]">
                                        Mr. HORM PHANNAK
                                    </h1>
                                    <div class="flex justify-start items-center gap-[1vw]">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-line bg-[#039BE5] w-[20px] h-[20px] rounded-full p-1" viewBox="0 0 24 24" stroke-width="1" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                         <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                         <path d="M15 10l-4 4l6 6l4 -16l-18 7l4 2l2 6l3 -4" />
                                    </svg>
                                </span>
                                        <p class="text-[#ffffff] text-[12px] md:text-[16px]">+855 88 544 4905</p>
                                    </div>
                                </li>
                                <li class="my-2" data-aos="flip-up" data-aos-duration="3000">
                                    <h1 class="text-[#ffffff] font-bold text-[14px] md:text-[16px]">
                                        Operation Contact: H/P
                                    </h1>
                                    <div class="flex justify-start items-center gap-[1vw]">
                                        <p class="text-[#ffffff] text-[12px] md:text-[16px]">
                                            +855 12 772 771
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
            <div class="text-center font-normal font-inter text-[12px] md:text-[16px] p-5">&#169;{{ date('Y') }} All right reserve by Avatar Global Ventures Co., LTD</div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        const swiper_pro = new Swiper(".mySwiper-pro", {
            slidesPerView: 1,
            spaceBetween: 20,
            loop:true,
            grabCursor:true,
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                1280: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
            },
            mousewheel: {
                invert: true,
            },
        });

        const swiper_ab = new Swiper(".mySwiper_ab", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            loop:true,
            cardsEffect:{
                effect:"fade",
            },
            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 150,
                modifier: 2,
                slideShadows: true,
            }
        });

        const swiper_brs = new Swiper(".mySwiper_brs", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            loop:true,
            coverflowEffect: {
                rotate: 2,
                stretch: 0,
                depth: 150,
                scale:1,
                modifier: 2,
                slideShadows: true,
            },
        });

        const swiper_op = new Swiper(".mySwiper_op", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            loop:true,
            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 150,
                modifier: 2,
                slideShadows: false,
            },
        });

        const swiper_pg = new Swiper(".mySwiper_pg", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            loop:true,
            coverflowEffect: {
                rotate: 0,
                stretch: 50,
                depth: 50,
                modifier:10,
                slideShadows: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });

        function isOpen(){
            document.querySelector('.navbar-wrap').classList.add('visible');
        }
        function isClose(){
            document.querySelector('.navbar-wrap').classList.remove('visible');
        }
    </script>
</html>
