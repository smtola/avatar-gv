<div class="md:block hidden absolute inset-0 w-full max-w-screen-sm lg:max-w-screen-md mx-auto md:pt-[15%] xl:pt-[10%] 2xl:pt-[7%] h-[10rem] z-[26]">
    <div class="border-[#6DDAFE]/30 border-y-2 bg-gradient-to-r from-[#20305B]/0 via-[#7ADDFE]/40 to-[#20305B]/0 ">
        <ul class="flex justify-center gap-[5vw] font-medium font-inter py-2 m-0">
                <li class="relative navbar-wrapper">
                    <a href="{{route('/home')}}"
                       class="text-[20px] text-[#ffffff]  {{ request()->routeIs('/home') ? 'active text-[#6DDAFE]' : '' }}"
                    >Home</a>
                </li>
                <li class="relative navbar-wrapper">
                    <a href="{{route('/about')}}"
                       class="text-[20px] text-[#ffffff]  {{ request()->routeIs('/about') ? 'active text-[#6DDAFE]' : '' }}"
                    >About Us</a>
                </li>
                <li class="relative navbar-wrapper">
                    <a href="{{route('/service')}}"
                       class="text-[20px] text-[#ffffff]  {{ request()->routeIs('/service') ? 'active text-[#6DDAFE]' : '' }}"
                    >Our Services</a>
                </li>
                <li class="relative navbar-wrapper">
                    <a href="{{route('/founder')}}"
                       class="text-[20px] text-[#ffffff]  {{ request()->routeIs('/founder') ? 'active text-[#6DDAFE]' : '' }}"
                    >Founder</a>
                </li>
                <li class="relative navbar-wrapper">
                    <a href="{{route('/faq')}}"
                       class="text-[20px] text-[#ffffff]  {{ request()->routeIs('/faq') ? 'active text-[#6DDAFE]' : '' }}"
                    >FAG</a>
                </li>
            </ul>
    </div>
</div>

<div class="md:hidden block fixed bottom-0 top-0 left-0 right-0 bg-[#1d2e5c]/30 backdrop-blur-[10px] bg-opacity-[1] z-[9999] rounded-tr-xl rounded-tl-xl navbar-wrap p-2 ">
    <button onclick="isClose()">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x hover:bg-[#eee]/30 rounded-full p-1" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
          <path d="M18 6l-12 12" />
          <path d="M6 6l12 12" />
        </svg>
    </button>

    <ul class="flex justify-start items-start flex-col gap-[5vw] font-medium font-inter p-2 m-0">
        <li class="relative navbar-wrapper">
            <a href="{{route('/home')}}"
               class="text-[20px] text-[#ffffff]  {{ request()->routeIs('/home') ? 'active text-[#6DDAFE]' : '' }}"
            >Home</a>
        </li>
        <li class="relative navbar-wrapper">
            <a href="{{route('/about')}}"
               class="text-[20px] text-[#ffffff]  {{ request()->routeIs('/about') ? 'active text-[#6DDAFE]' : '' }}"
            >About Us</a>
        </li>
        <li class="relative navbar-wrapper">
            <a href="{{route('/service')}}"
               class="text-[20px] text-[#ffffff]  {{ request()->routeIs('/service') ? 'active text-[#6DDAFE]' : '' }}"
            >Our Services</a>
        </li>
        <li class="relative navbar-wrapper">
            <a href="{{route('/founder')}}"
               class="text-[20px] text-[#ffffff]  {{ request()->routeIs('/founder') ? 'active text-[#6DDAFE]' : '' }}"
            >Founder</a>
        </li>
        <li class="relative navbar-wrapper">
            <a href="{{route('/faq')}}"
               class="text-[20px] text-[#ffffff]  {{ request()->routeIs('/faq') ? 'active text-[#6DDAFE]' : '' }}"
            >FAG</a>
        </li>
    </ul>
</div>
