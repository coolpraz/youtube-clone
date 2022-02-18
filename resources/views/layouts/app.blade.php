<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="shortcut icon" href="https://www.youtube.com/s/desktop/2ecd39d3/img/favicon.ico" type="image/x-icon">
        <link rel="icon" href="https://www.youtube.com/s/desktop/2ecd39d3/img/favicon_32x32.png" sizes="32x32">
        <link rel="icon" href="https://www.youtube.com/s/desktop/2ecd39d3/img/favicon_48x48.png" sizes="48x48">
        <link rel="icon" href="https://www.youtube.com/s/desktop/2ecd39d3/img/favicon_96x96.png" sizes="96x96">
        <link rel="icon" href="https://www.youtube.com/s/desktop/2ecd39d3/img/favicon_144x144.png" sizes="144x144">

        <title>{{ 'YouTube Clone' }}</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="min-h-full overflow-y-scroll antialiased text-white bg-yt-bgmain">
        <nav class="fixed top-0 z-30 w-full bg-yt-nav">
            <div class="flex items-center justify-between px-4 h-14">
                <div id="start" class="flex items-center h-full">
                    <div class="p-2">
                        <x-icon.ham fill="#fff" />
                    </div>
                    <div class="h-full py-4 pl-4 pr-3">
                        <x-icon.logo />
                    </div>
                </div>
                <div id="center" class="ytmob:flex w-[51.705%] h-10 hidden">
                    <div class="flex items-center ml-8 border-l border-y border-yt-searchBorder py-0.5 px-1.5 bg-yt-input flex-1">
                        <input type="text" placeholder="Search" class="px-0 py-0 border-none bg-yt-input">
                    </div>
                    <button class="flex py-px border bg-yt-searchButton border-yt-searchBorder px-1.5 w-16 items-center justify-center">
                        <x-icon.search fill="#fff" />
                    </button>
                    <div class="ml-2 rounded-full bg-yt-bgmain">
                        <button class="p-2">
                            <x-icon.mic fill="#fff" />
                        </button>
                    </div>
                </div>
                <div id="end" class="flex items-center">
                    <div class="p-2 mr-2 ytmob:hidden">
                        <x-icon.search fill="#fff" />
                    </div>
                    <div class="p-2 mr-2 ytmob:hidden">
                        <x-icon.mic fill="#fff" />
                    </div>
                    <div class="p-2 mr-2">
                        <x-icon.video_create fill="#fff" />
                    </div>
                    <div class="p-2 mr-2">
                        <x-icon.yt_apps fill="#fff" />
                    </div>
                    <div class="p-2 mr-2">
                        <x-icon.notification_bell fill="#fff" />
                    </div>
                    <button class="px-1.5 py-px">
                        <div class="mx-2">
                            <img alt="Avatar image" class="w-8 h-8 rounded-full" src="https://yt3.ggpht.com/yti/APfAmoGVpOmUvZjYZ4ERymGtrFNQztvyM034PtqT3I0R=s88-c-k-c0x00ffffff-no-rj-mo">
                        </div>
                    </button>
                </div>
            </div>
        </nav>
        <aside class="fixed inset-0 z-20 flex-col flex-1 hidden overflow-y-auto ipad:w-60 bg-yt-nav mt-14 shrink-0 ipad:block">
            <div id="section" class="w-full">
                <div class="py-3 border-b border-yt-menuBorder">
                    <div id="items">
                        <div class="flex items-center h-10 px-6 hover:bg-yt-menuBorder">
                            <x-icon.home fill="#fff" class="mr-6" />
                            <p class="text-sm">Home</p>
                        </div>
                        <div class="flex items-center h-10 px-6 hover:bg-yt-menuBorder">
                            <x-icon.explore fill="#fff" class="mr-6" />
                            <p class="text-sm">Explore</p>
                        </div>
                        <div class="flex items-center h-10 px-6 hover:bg-yt-menuBorder">
                            <x-icon.subscriptions fill="#fff" class="mr-6" />
                            <p class="text-sm">Subscriptions</p>
                        </div>
                        <div class="pt-3 mt-3 border-t border-yt-menuBorder">
                            <div class="flex items-center h-10 px-6 hover:bg-yt-menuBorder">
                                <x-icon.library fill="#fff" class="mr-6" />
                                <p class="text-sm">Library</p>
                            </div>
                            <div class="flex items-center h-10 px-6 hover:bg-yt-menuBorder">
                                <x-icon.history fill="#fff" class="mr-6" />
                                <p class="text-sm">History</p>
                            </div>
                            <div class="flex items-center h-10 px-6 hover:bg-yt-menuBorder">
                                <x-icon.your_videos fill="#fff" class="mr-6" />
                                <p class="text-sm">Your videos</p>
                            </div>
                            <div class="flex items-center h-10 px-6 hover:bg-yt-menuBorder">
                                <x-icon.watch_later fill="#fff" class="mr-6" />
                                <p class="text-sm">Watch later</p>
                            </div>
                            <div class="flex items-center h-10 px-6 hover:bg-yt-menuBorder">
                                <x-icon.liked_videos fill="#fff" class="mr-6" />
                                <p class="text-sm">Liked videos</p>
                            </div>
                            <div class="flex items-center h-10 px-6 hover:bg-yt-menuBorder">
                                <x-icon.playlist fill="#fff" class="mr-6" />
                                <p class="text-sm">Random Play</p>
                            </div>
                            <div class="flex items-center h-10 px-6 hover:bg-yt-menuBorder">
                                <x-icon.liked_videos fill="#fff" class="mr-6" />
                                <p class="text-sm">Liked videos</p>
                            </div>
                            <div class="flex items-center h-10 px-6 hover:bg-yt-menuBorder">
                                <x-icon.show_more fill="#fff" class="mr-6" />
                                <p class="text-sm">Show more</p>
                            </div>
                            <div class="flex items-center h-10 px-6 hover:bg-yt-menuBorder">
                                <x-icon.show_less fill="#fff" class="mr-6" />
                                <p class="text-sm">Show less</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-2 border-b border-yt-menuBorder">
                    <h3 class="h-8 px-6 py-2 text-sm font-medium uppercase text-yt-menuFontColor">
                        Subscriptions
                    </h3>
                    <div id="items">
                        <div class="flex items-center h-10 px-6 hover:bg-yt-menuBorder">
                            <img id="img" class="w-6 h-6 mr-6 rounded-full" src="https://yt3.ggpht.com/ytc/AKedOLQaETCh14d7igGVqkisxT5FzYNCvtIqMLiSINzG=s88-c-k-c0x00ffffff-no-rj">
                            <p class="text-sm">Laravel</p>
                        </div>
                        <div class="flex items-center h-10 px-6 hover:bg-yt-menuBorder">
                            <img id="img" class="w-6 h-6 mr-6 rounded-full" src="https://yt3.ggpht.com/ytc/AKedOLQaETCh14d7igGVqkisxT5FzYNCvtIqMLiSINzG=s88-c-k-c0x00ffffff-no-rj">
                            <p class="text-sm">Laravel</p>
                        </div>
                        <div class="flex items-center h-10 px-6 hover:bg-yt-menuBorder">
                            <img id="img" class="w-6 h-6 mr-6 rounded-full" src="https://yt3.ggpht.com/ytc/AKedOLQaETCh14d7igGVqkisxT5FzYNCvtIqMLiSINzG=s88-c-k-c0x00ffffff-no-rj">
                            <p class="text-sm">Laravel</p>
                        </div>
                        <div class="flex items-center h-10 px-6 hover:bg-yt-menuBorder">
                            <img id="img" class="w-6 h-6 mr-6 rounded-full" src="https://yt3.ggpht.com/ytc/AKedOLQaETCh14d7igGVqkisxT5FzYNCvtIqMLiSINzG=s88-c-k-c0x00ffffff-no-rj">
                            <p class="text-sm">Laravel</p>
                        </div>
                        <div class="flex items-center h-10 px-6 hover:bg-yt-menuBorder">
                            <img id="img" class="w-6 h-6 mr-6 rounded-full" src="https://yt3.ggpht.com/ytc/AKedOLQaETCh14d7igGVqkisxT5FzYNCvtIqMLiSINzG=s88-c-k-c0x00ffffff-no-rj">
                            <p class="text-sm">Laravel</p>
                        </div>
                        <div class="flex items-center h-10 px-6 hover:bg-yt-menuBorder">
                            <x-icon.show_more fill="#fff" class="mr-6" />
                            <p class="text-sm">Show 12 more</p>
                        </div>
                        <div class="flex items-center h-10 px-6 hover:bg-yt-menuBorder">
                            <x-icon.show_less fill="#fff" class="mr-6" />
                            <p class="text-sm">Show less</p>
                        </div>
                    </div>
                </div>
                <div class="py-2 border-b border-yt-menuBorder">
                    <h3 class="h-8 px-6 py-2 text-sm font-medium uppercase text-yt-menuFontColor">
                        More from youtube
                    </h3>
                    <div id="items">
                        <div class="flex items-center h-10 px-6 hover:bg-yt-menuBorder">
                            <x-icon.gaming fill="#fff" class="mr-6" />
                            <p class="text-sm">Gaming</p>
                        </div>
                        <div class="flex items-center h-10 px-6 hover:bg-yt-menuBorder">
                            <x-icon.live fill="#fff" class="mr-6" />
                            <p class="text-sm">Live</p>
                        </div>
                        <div class="flex items-center h-10 px-6 hover:bg-yt-menuBorder">
                            <x-icon.sports fill="#fff" class="mr-6" />
                            <p class="text-sm">Sports</p>
                        </div>
                    </div>
                </div>
                <div class="py-2">
                    <div id="items">
                        <div class="flex items-center h-10 px-6 hover:bg-yt-menuBorder">
                            <x-icon.settings fill="#fff" class="mr-6" />
                            <p class="text-sm">Settings</p>
                        </div>
                        <div class="flex items-center h-10 px-6 hover:bg-yt-menuBorder">
                            <x-icon.report fill="#fff" class="mr-6" />
                            <p class="text-sm">Report history</p>
                        </div>
                        <div class="flex items-center h-10 px-6 hover:bg-yt-menuBorder">
                            <x-icon.help fill="#fff" class="mr-6" />
                            <p class="text-sm">Help</p>
                        </div>
                        <div class="flex items-center h-10 px-6 hover:bg-yt-menuBorder">
                            <x-icon.feedback fill="#fff" class="mr-6" />
                            <p class="text-sm">Send feedback</p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="footer" class="w-full">
                <div class="px-6 pt-4 border-t border-yt-menuBorder">
                    <a href="#" class="mr-2 text-[13px] font-medium text-yt-menuFontColor">About</a>
                    <a href="#" class="mr-2 text-[13px] font-medium text-yt-menuFontColor">Press</a>
                    <a href="#" class="mr-2 text-[13px] font-medium text-yt-menuFontColor">Copyright</a>
                    <a href="#" class="mr-2 text-[13px] font-medium text-yt-menuFontColor">Contact us</a>
                    <a href="#" class="mr-2 text-[13px] font-medium text-yt-menuFontColor">Creators</a>
                    <a href="#" class="mr-2 text-[13px] font-medium text-yt-menuFontColor">Advertise</a>
                    <a href="#" class="text-[13px] font-medium text-yt-menuFontColor">Developers</a>
                </div>
                <div class="px-6 pt-3">
                    <a href="#" class="mr-2 text-[13px] font-medium text-yt-menuFontColor">Terms</a>
                    <a href="#" class="mr-2 text-[13px] font-medium text-yt-menuFontColor">Privacy</a>
                    <a href="#" class="mr-2 text-[13px] font-medium text-yt-menuFontColor">Policy & Saftey</a>
                    <a href="#" class="mr-2 text-[13px] font-medium text-yt-menuFontColor">How YouTube works</a>
                    <a href="#" class="mr-2 text-[13px] font-medium text-yt-menuFontColor">Test new features</a>
                </div>
                <div class="px-6 py-4">
                    <p class="text-xs font-medium text-yt-copyright">© 2022 Google LLC</p>
                </div>
            </div>
        </aside>
        <aside class="fixed inset-0 z-20 flex-col flex-1 overflow-y-auto w-[4.5rem] bg-yt-nav mt-14 shrink-0 ipad:hidden hidden ytbigmob:block">
            <div id="items" class="flex flex-col mt-1">
                <div class="h-[4.625rem] hover:bg-yt-menuBorder">
                    <a href="#" class="flex flex-col items-center justify-center pt-4 pb-3.5">
                        <x-icon.home fill="#fff" class="mb-1.5" />
                        <span class="text-[10px] font-normal">Home</span>
                    </a>
                </div>
                <div class="h-[4.625rem] hover:bg-yt-menuBorder">
                    <a href="#" class="flex flex-col items-center justify-center pt-4 pb-3.5">
                        <x-icon.explore fill="#fff" class="mb-1.5" />
                        <span class="text-[10px] font-normal">Explore</span>
                    </a>
                </div>
                <div class="h-[4.625rem] hover:bg-yt-menuBorder">
                    <a href="#" class="flex flex-col items-center justify-center pt-4 pb-3.5">
                        <x-icon.subscriptions fill="#fff" class="mb-1.5" />
                        <span class="text-[10px] font-normal">Subscriptions</span>
                    </a>
                </div>
                <div class="h-[4.625rem] hover:bg-yt-menuBorder">
                    <a href="#" class="flex flex-col items-center justify-center pt-4 pb-3.5">
                        <x-icon.library fill="#fff" class="mb-1.5" />
                        <span class="text-[10px] font-normal">Library</span>
                    </a>
                </div>
            </div>
        </aside>
        <main class="flex ipad:mb-4 mt-14 ytbigmob:ml-[4.5rem] ipad:ml-60">
            {{ $slot }}
        </main>
    </body>
</html>
