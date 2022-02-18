<x-app-layout>
    <div class="grid w-full grid-flow-row">
        <header class="flex items-center overflow-x-scroll border-t border-b border-yt-menuBorder bg-yt-nav h-14">
            <div class="flex items-center h-8 px-3 my-3 ml-6 mr-3 text-black bg-white border rounded-full shrink-0">
                <p class="text-sm font-normal">All</p>
            </div>
            <div class="flex items-center h-8 px-3 my-3 mr-3 border rounded-full bg-yt-menuBorder border-yt-tagBorder hover:bg-yt-tagHover hover:border-yt-tagHoverBorder shrink-0">
                <p class="text-sm font-normal">Gaming</p>
            </div>
            <div class="flex items-center h-8 px-3 my-3 mr-3 border rounded-full bg-yt-menuBorder border-yt-tagBorder hover:bg-yt-tagHover hover:border-yt-tagHoverBorder shrink-0">
                <p class="text-sm font-normal">Reptiles</p>
            </div>
            <div class="flex items-center h-8 px-3 my-3 mr-3 border rounded-full bg-yt-menuBorder border-yt-tagBorder hover:bg-yt-tagHover hover:border-yt-tagHoverBorder shrink-0">
                <p class="text-sm font-normal">Terrestrial animals</p>
            </div>
            <div class="flex items-center h-8 px-3 my-3 mr-3 border rounded-full bg-yt-menuBorder border-yt-tagBorder hover:bg-yt-tagHover hover:border-yt-tagHoverBorder shrink-0">
                <p class="text-sm font-normal">Computer Science</p>
            </div>
            <div class="flex items-center h-8 px-3 my-3 mr-3 border rounded-full bg-yt-menuBorder border-yt-tagBorder hover:bg-yt-tagHover hover:border-yt-tagHoverBorder shrink-0">
                <p class="text-sm font-normal">Linux</p>
            </div>
            <div class="flex items-center h-8 px-3 my-3 mr-3 border rounded-full bg-yt-menuBorder border-yt-tagBorder hover:bg-yt-tagHover hover:border-yt-tagHoverBorder shrink-0">
                <p class="text-sm font-normal">History</p>
            </div>
            <div class="flex items-center h-8 px-3 my-3 mr-3 border rounded-full bg-yt-menuBorder border-yt-tagBorder hover:bg-yt-tagHover hover:border-yt-tagHoverBorder shrink-0">
                <p class="text-sm font-normal">Scene</p>
            </div>
            <div class="flex items-center h-8 px-3 my-3 mr-3 border rounded-full bg-yt-menuBorder border-yt-tagBorder hover:bg-yt-tagHover hover:border-yt-tagHoverBorder shrink-0">
                <p class="text-sm font-normal">Stock markets</p>
            </div>
            <div class="flex items-center h-8 px-3 my-3 mr-3 border rounded-full bg-yt-menuBorder border-yt-tagBorder hover:bg-yt-tagHover hover:border-yt-tagHoverBorder shrink-0">
                <p class="text-sm font-normal">Comedies</p>
            </div>
            <div class="flex items-center h-8 px-3 my-3 mr-3 border rounded-full bg-yt-menuBorder border-yt-tagBorder hover:bg-yt-tagHover hover:border-yt-tagHoverBorder shrink-0">
                <p class="text-sm font-normal">Music</p>
            </div>
            <div class="flex items-center h-8 px-3 my-3 mr-3 border rounded-full bg-yt-menuBorder border-yt-tagBorder hover:bg-yt-tagHover hover:border-yt-tagHoverBorder shrink-0">
                <p class="text-sm font-normal">Like</p>
            </div>
        </header>
        <div id="content" class="mt-6">
            <div class="flex flex-wrap justify-center">
                <div class="grid justify-center grid-cols-1 mx-4 ytsm:grid-cols-2 ytmid:grid-cols-4 yttablet:grid-cols-3 ytbig:grid-cols-5 ytverybig:grid-cols-6">
                    @for ($i = 1; $i < 10; $i++)
                        <div class="flex-initial mx-2 mb-10">
                            <div class="flex-col">
                                <a href="#">
                                    <img src="https://i.ytimg.com/vi/0azMpBagjI4/hq720.jpg?sqp=-oaymwEcCNAFEJQDSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLAI7VnUv9ho2a81f1_mL9nwuyUBQg" alt="img">
                                </a>

                                <div class="flex">
                                    <a href="#" class="flex-shrink-0 mt-3 mr-3 w-9 h-9">
                                        <img src="https://yt3.ggpht.com/ytc/AKedOLTwIQuQ1aL1wDRZIsnllpwvKKRz4kTw5sixjPcQsA=s68-c-k-c0x00ffffff-no-rj" alt="profile" class="rounded-full">
                                    </a>
                                    <div class="pr-6">
                                        <h3 class="line-clamp-2 mt-3 mb-1.5 text-xs font-bold">What exactly is Metaverse? | Explained in Hindi | Dhruv Rathee</h3>
                                        <div class="flex-col">
                                            <div class="flex items-center">
                                                <p class="text-xs text-yt-menuFontColor font-normal pr-[1.2px] mr-[1.2px]">The Dodo</p>
                                                <div class="pl-1">
                                                    <x-icon.verified class="mr-2" fill="#aaa" />
                                                </div>
                                            </div>
                                            <div class="flex">
                                                <p class="text-xs text-yt-menuFontColor font-normal pr-[1.2px] mr-[1.2px]">586K views •</p>
                                                <p class="text-xs text-yt-menuFontColor font-normal pr-[1.2px] mr-[1.2px]">3 months ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
