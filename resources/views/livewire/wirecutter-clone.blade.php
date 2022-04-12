<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="/css/app.css" rel="stylesheet" />
        <script
            defer
            src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"
        ></script>

        <title>Wirecutter Clone</title>

        <!-- Fonts -->
        <link
            href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"
            rel="stylesheet"
        />
    </head>
    <body class="bg-white h-screen pr-5 pl-5" style="font-family: Franklin">
        <!-- create mobile menu, hamburger menu style -->
        <header id="action-bar" class="flex flex-row">
            <span id="mobile-menu">menu hamburger</span>

            <span>logo</span>

            <span>search</span>

            <span>profile</span>
        </header>

        <div>
            <div
                id="disclaimer-affiliation"
                class="bg-[#F4F2EF] w-full pt-2 pb-2 pl-2 pr-2"
            >
                <p class="text-xs leading-5 text-left w-full h-9">
                    We independently review everything we recommend. When you
                    buy through our links, we may earn a commission.
                    <a
                        class="font-bold"
                        href="https://www.nytimes.com/wirecutter/about/"
                        >Learn more ›</a
                    >
                </p>
            </div>
            <div id="breadcrumbs" class="mt-4">
                <a
                    class="text-sm text-[#666666]"
                    href="https://www.nytimes.com/wirecutter/electronics/"
                    >ELECTRONICS</a
                >
                <a class="text-sm text-[#666666]">›</a>
                <a
                    class="text-sm text-[#666666]"
                    href="https://www.nytimes.com/wirecutter/electronics/accessories/"
                    >ACCESSORIES</a
                >
            </div>
        </div>

        <content>
            <h1
                id="article-title"
                class="text-3xl font-black -tracking-tight h-20 border-t-4 border-black pt-2 mt-6"
            >
                {{ $productReviews[0]->title }}
            </h1>

            <div id="article-author" class="flex flex-col mt-6">
                <span class="text-lg font-bold tracking-tight leading-6">
                    by
                    <a
                        class="underline"
                        href="https://www.nytimes.com/wirecutter/authors/signe-brewster/"
                        >{{  $productReviews[0]->author }}
                    </a>
                </span>
                <span class="mt-1">updatedOn</span>
            </div>

            <div id="share-on-social" class="mt-4">
                <span>twitter</span>
                <span>facebook</span>
                <span>email</span>
                <span>share</span>
            </div>

            <div id="article-hero-image" class="flex flex-col items-end mt-3">
                <img
                    src="https://cdn.thewirecutter.com/wp-content/media/2022/02/phonegimbals-2048px-8273-2x1-1.jpg?auto=webp&quality=75&crop=2:1&width=320&dpr=2"
                    alt=""
                />
                <span
                    id="image-credits-source-artist"
                    class="text-slate-500 text-xs mt-1"
                    >Photo: Sarah Kobos</span
                >
            </div>

            <div
                id="article-text-introduction"
                class="border-t border-[#1b4abe] mt-6"
            >
                <span id="article-date-last-updated" class="text-[#1b4abe]"
                    ><b>Updated ∙</b> March 2022 (@hc)</span
                >
                <p id="review-result-quick-answer" class="mt-4">
                    After our latest tests, we think the DJI OM 5 is the best
                    gimbal, though the Zhiyun Smooth 5 makes sense if you need
                    fine-tuned control.
                </p>
                <p class="text-xl mt-8">{{ $productReviews[0]->excerpt }}</p>
            </div>

            <div class="mt-8">
                {{ $productReviews[0]->body }}
            </div>
        </content>

        <div id="footer" class="mt-8">
            <section id="accordion-section">
                <div
                    class="border-t-4 border-black flex items-center justify-between pb-4 pt-1"
                >
                    <span
                        class="text-2xl font-black leading-7 font-franklin tracking-tighter"
                        >The research</span
                    >
                    <span class="text-xs font-medium leading-5 underline"
                        >Expand All</span
                    >
                </div>

                <div class="border-t-2 border-black flex justify-between">
                    <span
                        class="text-2xl font-black leading-7 font-franklin tracking-tighter pt-1 pb-4"
                        >Why you should trust us</span
                    >
                    <span class="text-xs font-medium leading-5 underline mt-3"
                        ><img
                            src="/assets/arrowWire.svg"
                            alt=""
                            class="w-5 h-[13px]"
                    /></span>
                </div>

                <div class="border-t-2 border-black flex justify-between">
                    <span
                        class="text-2xl font-black leading-7 font-franklin tracking-tighter pt-1 pb-4"
                        >Who should get this</span
                    >
                    <span class="text-xs font-medium leading-5 underline mt-3"
                        ><img
                            src="/assets/arrowWire.svg"
                            alt=""
                            class="w-5 h-[13px]"
                    /></span>
                </div>

                <div class="border-t-2 border-black flex justify-between">
                    <span
                        class="text-2xl font-black leading-7 font-franklin tracking-tighter pt-1 pb-4"
                        >How we picked</span
                    >
                    <span class="text-xs font-medium leading-5 underline mt-3"
                        ><img
                            src="/assets/arrowWire.svg"
                            alt=""
                            class="w-5 h-[13px]"
                    /></span>
                </div>

                <div class="border-t-2 border-black flex justify-between">
                    <span
                        class="text-2xl font-black leading-7 font-franklin tracking-tighter pt-1 pb-4"
                        >How we tested</span
                    >
                    <span class="text-xs font-medium leading-5 underline mt-3"
                        ><img
                            src="/assets/arrowWire.svg"
                            alt=""
                            class="w-5 h-[13px]"
                    /></span>
                </div>

                <div class="border-t-2 border-black flex justify-between">
                    <span
                        class="text-2xl font-black leading-7 font-franklin tracking-tighter pt-1 pb-4"
                        >Our pick: DJI OM 5</span
                    >
                    <span class="text-xs font-medium leading-5 underline mt-3"
                        ><img
                            src="/assets/arrowWire.svg"
                            alt=""
                            class="w-5 h-[13px]"
                    /></span>
                </div>

                <div class="border-t-2 border-black flex justify-between">
                    <span
                        class="text-2xl font-black leading-7 font-franklin tracking-tighter pt-1 pb-4"
                        >Flaws but not dealbreakers</span
                    >
                    <span class="text-xs font-medium leading-5 underline mt-3"
                        ><img
                            src="/assets/arrowWire.svg"
                            alt=""
                            class="w-5 h-[13px]"
                    /></span>
                </div>

                <div class="border-t-2 border-black flex justify-between">
                    <span
                        class="text-2xl font-black leading-7 font-franklin tracking-tighter pt-1 pb-4"
                        >Runner-up: Zhiyun Smooth 5</span
                    >
                    <span class="text-xs font-medium leading-5 underline mt-3"
                        ><img
                            src="/assets/arrowWire.svg"
                            alt=""
                            class="w-5 h-[13px]"
                    /></span>
                </div>

                <div class="border-t-2 border-black flex justify-between">
                    <span
                        class="text-2xl font-black leading-7 font-franklin tracking-tighter pt-1 pb-4"
                        >Upgrade pick: DJI Pocket 2</span
                    >
                    <span class="text-xs font-medium leading-5 underline mt-3"
                        ><img
                            src="/assets/arrowWire.svg"
                            alt=""
                            class="w-5 h-[13px]"
                    /></span>
                </div>

                <div class="border-t-2 border-black flex justify-between">
                    <span
                        class="text-2xl font-black leading-7 font-franklin tracking-tighter pt-1 pb-4"
                        >The competition</span
                    >
                    <span class="text-xs font-medium leading-5 underline mt-3"
                        ><img
                            src="/assets/arrowWire.svg"
                            alt=""
                            class="w-5 h-[13px]"
                    /></span>
                </div>
            </section>

            <section
                id="newsletter"
                class="bg-blue-600 pt-4 pb-4 pr-6 pl-6 flex flex-col rounded-md"
            >
                <span class="text-white font-bold text-[22px]"
                    >Get our newsletter</span
                >
                <span class="text-white text-sm mt-1">
                    Subscribe to our newsletter to get shopping advice, our
                    favorite gifts, and the best deals on Wirecutter-approved
                    picks sent to your inbox.
                </span>
                <div class="flex mt-[14px]">
                    <input
                        type="email"
                        placeholder="name@example.com"
                        class="text-left pl-2 rounded-l-md max-w-[728px] basis-[70%]"
                    />
                    <button
                        type="form-submit"
                        class="text-white bg-[#092F8D] rounded-r-md h-10 w-[104px] hover:bg-[#CCCCCC]"
                    >
                        Continue
                    </button>
                </div>
                <span class="text-white text-sm mt-[14px]">
                    Opt out or
                    <a href="https://www.nytimes.com/wirecutter/contact-us/"
                        ><u>contact us</u></a
                    >
                    anytime. See our
                    <a href="https://www.nytimes.com/privacy/privacy-policy"
                        ><u>Privacy Policy.</u></a
                    >
                </span>
            </section>

            <section id="author" class="mt-10 border-t-2 border-black">
                <h2 class="text-2xl font-bold">About your guide</h2>
                <div id="info" class="mt-9">
                    <div class="flex flex-row items-center">
                        <img
                            src="https://cdn.thewirecutter.com/wp-content/uploads/2017/08/brewster-signe.jpg?auto=webp&quality=60&crop=1:1&width=100&dpr=1.5"
                            alt=""
                            class="h-[75px] w-[75px] rounded-full mr-3"
                        />
                        <div class="flex flex-col">
                            <span>{{ $productReviews[0]->author }}</span>
                            <div id="social">
                                <span>email</span>
                                <span>twitter</span>
                                <span>linkedin</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="author-biography" class="mt-4 pb-20">
                    <p>
                        Signe Brewster is an editor on Wirecutter's PC team. She
                        also writes about virtual reality. She previously
                        reported on emerging technology and science for
                        publications like Wirecutter, MIT Technology Review,
                        Wired, Science, and Symmetry Magazine. She spends her
                        free time quilting and pursuing an MFA in creative
                        writing.
                    </p>
                </div>
            </section>

            <section id="recommended-reviews" class="border-t-2 border-black">
                <h2 class="text-2xl font-bold mt-1">Further reading</h2>

                <div id="links" class="mt-5">
                    <div class="flex flex-row items-center font-bold text-lg">
                        <a
                            href="https://www.nytimes.com/wirecutter/reviews/which-camera-should-i-get/"
                            ><img
                                src="https://cdn.thewirecutter.com/wp-content/uploads/2016/03/00-what-camera-feature-630.jpg?auto=webp&quality=60&crop=3:2&width=90&dpr=1.5"
                                alt=""
                                class="w-[90px] h-[60px] mr-6"
                        /></a>

                        <a
                            class="max-w-[66%] hover:text-[#979797]"
                            href="https://www.nytimes.com/wirecutter/reviews/which-camera-should-i-get/"
                            >What Camera Should I Buy?
                        </a>
                    </div>

                    <div
                        class="flex flex-row items-center font-bold text-lg mt-6"
                    >
                        <a
                            href="https://www.nytimes.com/wirecutter/lists/tools-for-improving-your-vacation-photos/"
                            ><img
                                src="https://cdn.thewirecutter.com/wp-content/uploads/2019/02/tools-improve-your-vacation-photos-3x2-1.jpg?auto=webp&quality=60&crop=3:2&width=150"
                                alt=""
                                class="w-[90px] h-[60px] mr-6"
                        /></a>

                        <a
                            class="max-w-[66%] hover:text-[#979797]"
                            href="https://www.nytimes.com/wirecutter/lists/tools-for-improving-your-vacation-photos/"
                            >Tools for Improving Your Vacation Photos
                        </a>
                    </div>

                    <div
                        class="flex flex-row items-center font-bold text-lg mt-6"
                    >
                        <a
                            href="https://www.nytimes.com/wirecutter/reviews/best-superzoom-camera/"
                            ><img
                                src="https://cdn.thewirecutter.com/wp-content/uploads/2020/02/superzoom-camera-2020-lowres-8570.jpg?auto=webp&quality=60&crop=3:2&width=90&dpr=2"
                                alt=""
                                class="w-[90px] h-[60px] mr-6"
                        /></a>

                        <a
                            class="max-w-[66%] hover:text-[#979797]"
                            href="https://www.nytimes.com/wirecutter/reviews/best-superzoom-camera/"
                            >The Best Superzoom Camera</a
                        >
                    </div>

                    <div
                        class="flex flex-row items-center font-bold text-lg mt-6"
                    >
                        <a
                            href="https://www.nytimes.com/wirecutter/reviews/best-vlogging-cameras/"
                            ><img
                                src="https://cdn.thewirecutter.com/wp-content/media/2021/05/vloggingcameras-2048px-0S1A5616.jpg?auto=webp&quality=60&crop=3:2&width=150&dpr=1.5"
                                alt=""
                                class="w-[90px] h-[60px] mr-6"
                        /></a>

                        <a
                            class="max-w-[66%] hover:text-[#979797]"
                            href="https://www.nytimes.com/wirecutter/reviews/best-vlogging-cameras/"
                            >The Best Vlogging Cameras and Gear</a
                        >
                    </div>
                </div>
            </section>

            <section
                id="comments"
                class="bg-[#EBEEF2] flex flex-col p-4 mt-[88px]"
            >
                <h3 class="text-base text-[#2A2E2E] font-bold">
                    Wirecutter Comment Policy
                </h3>
                <p class="mt-2 text-sm">
                    Be kind. Ask questions. Discriminatory language, personal
                    attacks, promotion, and spam will be removed. Please read
                    our Comment Policy before commenting.
                </p>

                <div id="disqus">
                    <!-- Disqus Comments Here -->
                    <p></p>
                </div>
            </section>

            <div class="mt-10 pb-20">space</div>
        </div>
    </body>
</html>
