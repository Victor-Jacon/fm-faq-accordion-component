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
    <body class="bg-white h-screen" style="font-family: Franklin">
        <!-- create mobile menu, hamburger menu style -->
        <header id="action-bar" class="flex flex-row">
            <span id="mobile-menu">menu hamburger</span>
            <span>logo</span>
            <span>search</span>
            <span>profile</span>
        </header>

        <div id="content-padding" class="pr-5 pl-5">
            <div>
                <div
                    id="disclaimer-affiliation"
                    class="bg-[#F4F2EF] w-full pt-2 pb-2 pl-2 pr-2"
                >
                    <p class="text-xs leading-5 text-left w-full h-9">
                        We independently review everything we recommend. When
                        you buy through our links, we may earn a commission.
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
                    <span class="text-sm font-franklin text-[#333333] mt-1"
                        >updatedOn</span
                    >
                </div>

                <div id="share-on-social" class="mt-4 flex flex-row">
                    <a
                        class="rounded-full mr-4 flex justify-center items-center w-8 h-8 border-[1px] border-[#2AA9E0]"
                        href="https://twitter.com/intent/tweet?text=The%20Best%20Android%20and%20iPhone%20Gimbal%20%7C%20Wirecutter&url=https://www.nytimes.com/wirecutter/reviews/best-android-and-iphone-gimbal/&via=wirecutter"
                        ><img src="/assets/twitterLogo.png" alt="" class="h-3"
                    /></a>

                    <a
                        class="rounded-full mr-4 flex justify-center items-center w-8 h-8 border-[1px] border-[#45629D]"
                        href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.nytimes.com%2Fwirecutter%2Freviews%2Fbest-android-and-iphone-gimbal%2F"
                        ><img src="/assets/faceLogo.png" alt="" class="h-3"
                    /></a>

                    <a
                        class="rounded-full mr-4 flex justify-center items-center w-8 h-8 border-[1px] border-black"
                        href="mailto:?subject=Wirecutter: The Best Android and iPhone Gimbal&body=Wirecutter: The Best Android and iPhone Gimbal%0D%0A%0D%0Ahttps://www.nytimes.com/wirecutter/reviews/best-android-and-iphone-gimbal/"
                        ><img
                            src="/assets/emailLogo.png"
                            alt=""
                            class="w-[13px]"
                    /></a>

                    <button
                        class="flex flex-row items-center justify-center w-[78px] h-8 bg-[#e9e9e9] rounded-md hover:bg-white hover:border-2 hover:border-[#e9e9e9]"
                    >
                        <img
                            src="/assets/bookmark.png"
                            alt=""
                            class="w-4 mr-1"
                        />
                        <span class="font-franklin font-bold text-sm"
                            >Save</span
                        >
                    </button>
                </div>

                <div
                    id="article-hero-image"
                    class="flex flex-col items-end mt-3"
                >
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
                        After our latest tests, we think the DJI OM 5 is the
                        best gimbal, though the Zhiyun Smooth 5 makes sense if
                        you need fine-tuned control.
                    </p>
                    <p class="text-xl mt-8">
                        {{ $productReviews[0]->excerpt }}
                    </p>
                </div>

                <div class="mt-8">
                    {{ $productReviews[0]->body }}
                </div>
            </content>

            <section>
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

                    <div
                        class="border-t-2 border-black flex flex-col"
                        x-data="{ isOpen: false }"
                        @click="isOpen = !isOpen"
                    >
                        <div class="flex flex-row justify-between items-start">
                            <span
                                class="text-2xl font-black leading-7 font-franklin tracking-tighter pt-1 pb-4"
                                >Why you should trust us</span
                            >
                            <span
                                class="text-xs font-medium leading-5 underline mt-3"
                                :class="{ 'rotate-180': isOpen }"
                                ><img
                                    src="/assets/arrowWire.svg"
                                    alt=""
                                    class="w-5 h-[13px]"
                            /></span>
                        </div>

                        <p
                            x-show="isOpen"
                            class="text-base text-[#222222] min-w-min pb-8"
                        >
                            I’m a lifelong photography enthusiast and journalist
                            who has spent nearly a decade writing about emerging
                            camera technology, such as drones, 360-degree
                            cameras, and light field cameras. I’ve spent
                            hundreds of hours flying drones, and I’ve seen the
                            benefits that a gimbal can provide for stabilizing
                            footage.
                        </p>
                    </div>

                    <div
                        class="border-t-2 border-black flex flex-col"
                        x-data="{ isOpen: false }"
                        @click="isOpen = !isOpen"
                    >
                        <div class="flex flex-row justify-between items-start">
                            <span
                                class="text-2xl font-black leading-7 font-franklin tracking-tighter pt-1 pb-4"
                                >Who should get this</span
                            >
                            <span
                                class="text-xs font-medium leading-5 underline mt-3"
                                :class="{ 'rotate-180': isOpen }"
                                ><img
                                    src="/assets/arrowWire.svg"
                                    alt=""
                                    class="w-5 h-[13px]"
                            /></span>
                        </div>

                        <p
                            x-show="isOpen"
                            class="text-base text-[#222222] min-w-min pb-8"
                        >
                            Smartphones that shoot 4K video are now common
                            enough that even amateur videographers can capture
                            high-quality videos with them. A gimbal—a pivoting
                            suspension device that mechanically stabilizes a
                            camera—can replace an expensive tripod or dolly to
                            make cinematic video effects accessible to anyone.
                            Primarily, gimbals smooth out hand tremors or a
                            bumpy gait if you are filming while walking. They
                            can also make pans look smooth and consistent, or
                            automate time-lapses and other tricky shots.
                            Additionally, they can serve as souped-up selfie
                            sticks that allow you to hold a phone farther away
                            from your face, for better framing.
                        </p>
                    </div>

                    <div
                        class="border-t-2 border-black flex flex-col"
                        x-data="{ isOpen: false }"
                        @click="isOpen = !isOpen"
                    >
                        <div class="flex flex-row justify-between items-start">
                            <span
                                class="text-2xl font-black leading-7 font-franklin tracking-tighter pt-1 pb-4"
                                >How we picked</span
                            >
                            <span
                                class="text-xs font-medium leading-5 underline mt-3"
                                :class="{ 'rotate-180': isOpen }"
                                ><img
                                    src="/assets/arrowWire.svg"
                                    alt=""
                                    class="w-5 h-[13px]"
                            /></span>
                        </div>

                        <p
                            x-show="isOpen"
                            class="text-base text-[#222222] min-w-min pb-8"
                        >
                            We read Amazon and B&H reviews to find the most
                            popular smartphone gimbals currently available. We
                            also watched YouTube reviews and footage shot with
                            different gimbals to find promising options. Going
                            by what we learned, and keeping our own habits in
                            mind, we determined that the following features are
                            most important: A three-axis gimbal: A three-axis
                            gimbal provides stabilization superior to that of a
                            two-axis gimbal because it stabilizes on the pitch
                            (up and down), roll (rotation sideways), and yaw
                            (left and right) axes. A two-axis gimbal usually
                            forgoes the yaw axis. We skipped testing stabilizers
                            that did not have a true three-axis gimbal.
                            Autonomous modes: Preprogrammed shooting modes make
                            getting some types of shots, including time-lapses
                            and dolly zooms, dead simple. Many gimbals can also
                            autonomously track a moving subject. Great customer
                            service: Reaching a customer service representative
                            and receiving a response should be easy; the faster,
                            the better. Companies should provide tailored
                            support instead of pointing photographers to an
                            instruction manual. Many people have never used a
                            gimbal, so good customer service can be a lifesaver
                            as they tackle the learning curve. Warranty
                            coverage: Manufacturers should be willing to repair
                            or replace gimbals that develop problems outside the
                            owner’s control. A yearlong warranty is standard.
                            Easy setup: An instruction booklet (or a link to a
                            video that shows how to set up and operate the
                            gimbal) is essential, since every gimbal operates
                            differently. If the gimbal needs adjustment for the
                            phone to balance correctly, it should take just one
                            or two steps. The gimbal, phone, and app should all
                            connect to one another without much fuss.
                            Compatibility with a wide range of phones: Companies
                            usually list a range of phone sizes and weights that
                            work with their gimbals. We looked for options that
                            worked with a wide selection of phones, but
                            especially with our top iPhone and Android picks. A
                            great app: The best apps are easy to use, thanks to
                            clear design, and they should come with lots of
                            options for customizing camera settings. The app
                            should be available for both iOS and Android
                            devices. Easy-to-use buttons: Whether you prefer
                            more or fewer buttons on a gimbal’s handle, each
                            button should have a clear purpose and be relatively
                            easy to learn and use. However, if you dislike a
                            gimbal’s buttons, you can usually accomplish the
                            same tasks by touching your phone’s screen instead.
                            Long battery life: Unless you’re especially worried
                            about weight, a longer battery life is better
                            because it means you have to charge the gimbal less
                            often. Gimbals can usually charge a phone too, so a
                            bigger battery means a longer life for your phone.
                            Comfortable design: A light gimbal with an ergonomic
                            grip is much easier to hold during lengthy shoots.
                            Accessories: It’s nice, but not essential, to get
                            useful accessories, like a carrying case and a small
                            tripod, along with your gimbal.
                        </p>
                    </div>

                    <div
                        class="border-t-2 border-black flex flex-col"
                        x-data="{ isOpen: false }"
                        @click="isOpen = !isOpen"
                    >
                        <div class="flex flex-row justify-between items-start">
                            <span
                                class="text-2xl font-black leading-7 font-franklin tracking-tighter pt-1 pb-4"
                                >How we tested</span
                            >
                            <span
                                class="text-xs font-medium leading-5 underline mt-3"
                                :class="{ 'rotate-180': isOpen }"
                                ><img
                                    src="/assets/arrowWire.svg"
                                    alt=""
                                    class="w-5 h-[13px]"
                            /></span>
                        </div>

                        <p
                            x-show="isOpen"
                            class="text-base text-[#222222] min-w-min pb-8"
                        >
                            We timed how long it took us to set up each gimbal,
                            ranked how much we liked the iOS and Android apps,
                            noted our experience using the buttons on each
                            handle, recorded how easy (or difficult) it was to
                            balance each gimbal, and noted any included
                            accessories. We also asked customer service at each
                            company how to balance the gimbal, and we recorded
                            how long it took a representative to respond and how
                            helpful they were. In an initial round of testing,
                            in 2018, we compared five smartphone gimbals by
                            filming videos with an Apple iPhone 8 and a Samsung
                            Galaxy S8. We used the front-facing camera while
                            walking down a street, and we used the back-facing
                            camera, combined with the gimbals’ object-tracking
                            modes, to film a moving drone. In another round of
                            testing, in early 2019, we tested the DJI Osmo
                            Pocket (a gimbal with a built-in camera) against the
                            GoPro Hero7 Black and its electronic image
                            stabilization, at the Minneapolis Sculpture Garden.
                            We tested the DJI Osmo Mobile 3 in late 2019. Then,
                            in late 2020, we tested the DJI Pocket 2, DJI OM 4,
                            and Zhiyun Smooth X. In 2022, we used an Apple
                            iPhone XR and Samsung Galaxy S8 to test the DJI OM
                            5, Zhiyun Smooth 5, and Zhiyun Smooth Q3 at
                            Minnehaha Falls in Minneapolis.
                        </p>
                    </div>

                    <div
                        class="border-t-2 border-black flex flex-col"
                        x-data="{ isOpen: false }"
                        @click="isOpen = !isOpen"
                    >
                        <div class="flex flex-row justify-between items-start">
                            <span
                                class="text-2xl font-black leading-7 font-franklin tracking-tighter pt-1 pb-4"
                                >Our pick: DJI OM 5</span
                            >
                            <span
                                class="text-xs font-medium leading-5 underline mt-3"
                                :class="{ 'rotate-180': isOpen }"
                                ><img
                                    src="/assets/arrowWire.svg"
                                    alt=""
                                    class="w-5 h-[13px]"
                            /></span>
                        </div>

                        <p
                            x-show="isOpen"
                            class="text-base text-[#222222] min-w-min pb-8"
                        >
                            The DJI OM 5 is the first gimbal we’ve used that
                            feels like it’s built for anyone. It’s simple to use
                            and portable. And this gimbal comes with thoughtful
                            accessories—like an unusual integrated selfie
                            stick—that can make it appeal to both beginners and
                            dedicated hobbyists. The OM 5 has a nice selection
                            of autonomous shooting modes, a straightforward app,
                            and a comfortable handle with just a few buttons, so
                            it’s one of the easiest to learn how to use. It also
                            benefits from having the best customer service of
                            any gimbal we tested. However, there are questions
                            surrounding security, privacy, and ethics that have
                            landed DJI in trouble with the US government, and
                            this is worth considering. The OM 5’s three-axis
                            design allowed us to shoot footage that looked
                            smooth and shake-free, similar to what we got from
                            the Smooth 5. We also liked the selection of
                            autonomous modes, including ActiveTrack, which cues
                            the gimbal to automatically track a moving object
                            (or a still one, while you move around it with the
                            camera). In addition, the gimbal can help you make a
                            time-lapse or keep the camera steady while you zoom
                            or film in slow motion. The hyper-lapse and
                            motion-lapse options combine the camera moving with
                            a time-lapse, making for even more sophisticated
                            shots. The gimbal’s 326-gram weight (a bit less than
                            a can of soda) made this model comfortable to hold.
                            And the buttons are all within easy reach of a
                            thumb. There is a circular magnetic pad at the top
                            end of the gimbal. You can either affix a clamp that
                            will hold your phone (a standard design for gimbals)
                            or stick the included magnetic disc to the back of
                            your phone. The disc makes your phone magnetic and
                            allows you to quickly stick it to the gimbal. The
                            feature might be useful if you are constantly
                            switching between shooting and using your phone for
                            other purposes, but we were not that excited about
                            saving a half-second in attaching the phone. Using a
                            clamp attached to the gimbal is also quick and easy.
                            For beginning gimbal users, easy access to helpful
                            customer service, a decent warranty, and
                            simple-to-follow instructions for setup and
                            operation are especially valuable. When we reached
                            out via live chat on DJI’s website, a customer
                            service representative responded almost instantly.
                            They also walked us through steps to diagnose our
                            stated problem, instead of just pointing us toward a
                            tutorial (as the other gimbal companies did). Like
                            all of the other gimbals we tested, the OM 5 comes
                            with a one-year warranty. DJI offers a quick-start
                            guide for the OM 5, plus a more in-depth instruction
                            manual. You can also find a wide variety of DJI and
                            third-party tutorial videos online. Overall, this
                            gimbal comes with the most thorough set of
                            documentation of any gimbal we tested. Setting up
                            the OM 5 for the first time, including connecting
                            the phone and gimbal via Bluetooth, took less than a
                            minute. The gimbal does not need to be balanced, so
                            there is less of a chance that you’ll need to
                            troubleshoot. DJI publishes a list (PDF) of phones
                            that are compatible with the OM 5; this includes
                            larger modern phones like the Galaxy S21 Ultra,
                            iPhone 13 Pro Max, and Google Pixel 6 Pro. Like the
                            Smooth 5, this gimbal has a weakness when it comes
                            to Android phones: Users of the Android DJI Mimo app
                            can shoot 4K video at a max of 30 fps, while iOS
                            users can shoot at up to 60 fps. The OM 5 has a
                            trigger, two buttons, a joystick, and a slider,
                            amounting to fewer buttons compared with the
                            assortment found on other gimbals we tested. And
                            fewer buttons means a simpler learning curve, which
                            is nice if you are picking up a gimbal for the first
                            time and prefer to use the easier-to-decipher
                            digital buttons in the DJI Mimo app. One button
                            allows you to turn on the gimbal; once it’s on, you
                            can press the button one, two, or three times to
                            select different camera modes. Press the other
                            button to take a photo or start recording. The
                            joystick moves the gimbal to point the camera left,
                            right, up, or down. The slider lets you zoom in or
                            out without touching the phone. You can complete any
                            other tasks by manually moving the gimbal or
                            navigating within the DJI Mimo app. DJI says the OM
                            5’s battery lasts 6.4 hours. Although we weren’t
                            able to run it continuously for that amount of time,
                            it never ran out of battery while we used it. The OM
                            5 has a surprise up its sleeve: Its handle
                            telescopes to turn it into a selfie stick. This
                            model also comes with a cloth bag, tripod, magnetic
                            clamp, and magnetic ring holder. The OM 5 folds up
                            to the size of a sandwich, and we think it’s sturdy
                            enough to toss into a backpack or camera bag without
                            a specialized case. For about $60, you can add on a
                            clamp that doubles as a fill light; we think
                            everyone can benefit from the more-even light
                            provided by a fill light, but it’s not necessary. We
                            also recommend reading our guide to phone lenses.
                        </p>
                    </div>

                    <div
                        class="border-t-2 border-black flex flex-col"
                        x-data="{ isOpen: false }"
                        @click="isOpen = !isOpen"
                    >
                        <div class="flex flex-row justify-between items-start">
                            <span
                                class="text-2xl font-black leading-7 font-franklin tracking-tighter pt-1 pb-4"
                                >Flaws but not dealbreakers
                            </span>
                            <span
                                class="text-xs font-medium leading-5 underline mt-3"
                                :class="{ 'rotate-180': isOpen }"
                                ><img
                                    src="/assets/arrowWire.svg"
                                    alt=""
                                    class="w-5 h-[13px]"
                            /></span>
                        </div>

                        <p
                            x-show="isOpen"
                            class="text-base text-[#222222] min-w-min pb-8"
                        >
                            The US government and security researchers have
                            criticized DJI in recent years due to security
                            concerns. It’s also worth noting that Android users
                            will have to download the DJI Mimo app directly from
                            DJI’s website, instead of from the Google Play
                            store. We have some thoughts about the security of
                            DJI in our drone guide; gimbal users should take
                            similar precautions. Although it was easier to learn
                            how to use the few buttons on the OM 5, as we grew
                            more comfortable with all of the gimbals, we
                            discovered we preferred having the large array of
                            buttons on the Smooth 5—touching the phone screen
                            when the phone was at an odd angle could be
                            annoying, so we opted for a gimbal’s physical
                            buttons when possible.
                        </p>
                    </div>

                    <div
                        class="border-t-2 border-black flex flex-col"
                        x-data="{ isOpen: false }"
                        @click="isOpen = !isOpen"
                    >
                        <div class="flex flex-row justify-between items-start">
                            <span
                                class="text-2xl font-black leading-7 font-franklin tracking-tighter pt-1 pb-4"
                                >Runner-up: Zhiyun Smooth 5
                            </span>
                            <span
                                class="text-xs font-medium leading-5 underline mt-3"
                                :class="{ 'rotate-180': isOpen }"
                                ><img
                                    src="/assets/arrowWire.svg"
                                    alt=""
                                    class="w-5 h-[13px]"
                            /></span>
                        </div>

                        <p
                            x-show="isOpen"
                            class="text-base text-[#222222] min-w-min pb-8"
                        >
                            If you want to maximize the amount of control you
                            have over your phone, the Zhiyun Smooth 5 has more
                            buttons and knobs on its handle that put finer-tuned
                            controls at your fingertips. These make it possible
                            to shoot more-complicated shots without touching
                            your phone. Some people may also wish to buy a
                            Zhiyun gimbal to avoid the DJI brand. Although it’s
                            easy to figure out how to use the OM 5 right out of
                            the box, it’s worth taking an hour or two to watch
                            the Zhiyun tutorials on controlling the Smooth 5
                            (which has a bigger learning curve). Unlike the OM
                            5, the Smooth 5 needs to be balanced based on the
                            size of your phone; this can create additional setup
                            time and problems switching between phones. However,
                            a devoted user’s time spent learning the controls
                            will be rewarded with even greater control over
                            their videos. The Smooth 5 is compatible with modern
                            phones like the Galaxy S21 Ultra, Google Pixel 6
                            Pro, and iPhone 13 Pro Max. And the additional
                            payload means you don’t have to sweat pairing them
                            with a case and additional lenses. If your phone has
                            compatibility issues with Zhiyun’s ZY Play app, we
                            recommend downloading the Filmic Pro app instead.
                            Like OM 5 users, purchasers of the Smooth 5 will
                            find that they can shoot at 30 fps only with Android
                            phones; iOS phones can shoot at 60 fps. The Zhiyun
                            Smooth 5 has fewer buttons on its handle than
                            previous models but still more than the OM 5. This
                            array can be overwhelming at first, but over time we
                            found ourselves using the buttons more. It’s nice
                            not having to touch the phone screen when the phone
                            is oriented at an awkward angle, and hitting a
                            physical button when your thumb is already on the
                            handle is faster. The buttons are well placed, and
                            they integrate with the app seamlessly. We recommend
                            watching the video tutorial a few times to learn the
                            basics of how to use each button. If you’re still
                            overwhelmed, you can always interact with the
                            digital buttons on the phone screen instead. Zhiyun
                            says the Smooth 5’s battery lasts up to 25 hours on
                            standby, or as few as 4.5 hours with a fill light
                            attached and running; DJI lists a 6.4-hour run time
                            for its gimbal. The batteries of both gimbals last
                            long enough that we didn’t drain them during
                            testing. The Smooth 5 comes with a charger and
                            tripod; for an additional $50, you can buy a Combo
                            package that includes a fill light and filters, plus
                            a carrying case. Moment also sells a bundle of
                            Smooth 5 accessories; we haven’t tested this package
                            in particular, but we already recommend its lenses
                            for smartphones. The Smooth 5 also comes with a
                            carrying case and a tripod. The tripod is just a few
                            inches tall; it works fine if you place it on a
                            table but is mostly useless if you don’t have a
                            raised place to set it (you may want to invest in a
                            full-size tripod). The Smooth 5 comes with a
                            one-year warranty. Just be sure to buy the gimbal
                            directly from Zhiyun, since its warranty covers only
                            devices it sells directly. In the area of customer
                            service, Zhiyun fell short of DJI. We reached out
                            via email and Zhiyun’s support page on Facebook. In
                            both cases, it took a representative about 10 hours
                            to respond, since the company is based in China and
                            responds only during local business hours. Instead
                            of helping us troubleshoot our problem directly, the
                            representatives linked us to a relevant tutorial.
                            The response was helpful—just not as personal.
                            Although we found the Smooth 5’s handle comfortable
                            enough to hold, the device is significantly heavier
                            than the OM 5 (615 grams versus 326 grams, before
                            adding accessories). If you plan to shoot many hours
                            of video in a week, the weight could be something to
                            consider before you make a purchase.
                        </p>
                    </div>

                    <div
                        class="border-t-2 border-black flex flex-col"
                        x-data="{ isOpen: false }"
                        @click="isOpen = !isOpen"
                    >
                        <div class="flex flex-row justify-between items-start">
                            <span
                                class="text-2xl font-black leading-7 font-franklin tracking-tighter pt-1 pb-4"
                                >Upgrade pick: DJI Pocket 2
                            </span>
                            <span
                                class="text-xs font-medium leading-5 underline mt-3"
                                :class="{ 'rotate-180': isOpen }"
                                ><img
                                    src="/assets/arrowWire.svg"
                                    alt=""
                                    class="w-5 h-[13px]"
                            /></span>
                        </div>

                        <p
                            x-show="isOpen"
                            class="text-base text-[#222222] min-w-min pb-8"
                        >
                            We think most people with a modern smartphone camera
                            will prefer a less expensive gimbal that clamps to
                            their phone. But if you want something you can pull
                            out of your pocket to begin shooting immediately, or
                            you have a phone with a low-quality camera, consider
                            upgrading to the DJI Pocket 2. It’s tiny enough to
                            fit in your pocket, and I mean that—at its smallest,
                            it measures 4.9 by 1.5 by 1.2 inches (a little
                            larger than a standard Snickers bar). Yet it still
                            packs in a 4K camera and autonomous features. The
                            Pocket 2 also frees up your phone to do any of the
                            other thousands of things our phones do these days.
                            This model’s pocket-friendly form and its ability to
                            begin filming in seconds brings back memories of the
                            Flip Video camera era, with the bonus of video
                            stabilization and autonomous modes. We also think
                            its portability makes it an interesting competitor
                            to action and 360-degree cameras (though we don’t
                            think it will withstand the same knocks and falls as
                            an action camera). The videos we filmed with the DJI
                            Pocket 2 looked shake-free and smooth. We were able
                            to use features such as ActiveTrack (where the
                            camera autonomously follows a moving object) and
                            MotionLapse (which condenses long shots into short,
                            smooth videos). The built-in camera is capable of
                            capturing 4K, 60 fps videos. DJI’s customer service
                            is easy to access and responsive (as we found with
                            the OM 5). And we almost didn’t need an instruction
                            manual to get started with the Pocket 2. The gimbal
                            has three buttons: one that turns the device on and
                            off, a start/stop filming button, and a function
                            button (which lets you click through the menu of
                            options). You can access other features, such as
                            video-quality adjustments, by swiping the Pocket 2’s
                            touchscreen. The smartphone app also lets you
                            control more specialized settings, such as white
                            balance and noise reduction. There’s also the option
                            to add on accessories, like a phone clip, an
                            extended handle, and a tripod mount, that augment
                            its abilities. DJI says the Pocket 2’s battery lasts
                            2 hours 20 minutes while recording 1080p video. That
                            isn’t very long compared with the battery life of
                            our top smartphone gimbal picks, but it was enough
                            to last through testing. Thanks to the smaller
                            battery, this model weighs a slight 117 grams
                            without accessories.
                        </p>
                    </div>

                    <div
                        class="border-t-2 border-black flex flex-col"
                        x-data="{ isOpen: false }"
                        @click="isOpen = !isOpen"
                    >
                        <div class="flex flex-row justify-between items-start">
                            <span
                                class="text-2xl font-black leading-7 font-franklin tracking-tighter pt-1 pb-4"
                                >The competition
                            </span>
                            <span
                                class="text-xs font-medium leading-5 underline mt-3"
                                :class="{ 'rotate-180': isOpen }"
                                ><img
                                    src="/assets/arrowWire.svg"
                                    alt=""
                                    class="w-5 h-[13px]"
                            /></span>
                        </div>

                        <p
                            x-show="isOpen"
                            class="text-base text-[#222222] min-w-min pb-8"
                        >
                            We’ve previously recommended all of the predecessors
                            to the OM 5 and Smooth 5. If you see one for a
                            discounted price, we still think they’re a good buy.
                            The Zhiyun Smooth Q3 looked like an inexpensive,
                            easy-to-use alternative to the OM 5, but we were
                            unable to connect it to our iPhone XR. The Zhiyun
                            Smooth X is an interesting compromise between a
                            gimbal and a selfie stick, but it supports only
                            two-axis stabilization and has a short battery life
                            of 5½ hours. The Evo Pro is identical to the Zhiyun
                            Smooth 4 in looks and operation. Its customer
                            service is US-based, and a representative answered
                            our request within a few minutes. However, it’s no
                            longer in stock. And it didn’t come with an
                            instructional video link, as the Smooth 4 did, so
                            its setup might be more confusing for a beginner. We
                            recommend following the Zhiyun Smooth 4 setup video
                            for the Evo Pro. The Evo Pro usually costs more than
                            the Smooth 4, but if you find it in stock and are
                            willing to spend a bit more for better customer
                            service, you should consider buying it instead. The
                            FreeVision Vilta-M has the simplest handle of any
                            gimbal we tested and an exceptionally long, 17-hour
                            battery life. It took less than a minute to set up.
                            We also liked its easy-to-use app and cloth carrying
                            case. However, it typically costs a bit more, and
                            our customer support request via an online form
                            didn’t seem to go through. The Moza Mini-Mi is the
                            least expensive gimbal we tested, and it has some
                            interesting features, such as wireless charging. But
                            we couldn’t figure out how to connect it and the
                            phone over Bluetooth, so it never worked correctly,
                            and we didn’t get a chance to put this gimbal
                            through our full tests.
                        </p>
                    </div>
                </section>

                <section
                    id="last-updated-or-edited-by"
                    class="mt-3 bg-orange-200 rounded-md p-2"
                >
                    <p class="text-base text-[#222222] text-center italic">
                        This guide was edited by Phil Ryan and Erica Ogg.
                    </p>
                </section>

                <section
                    id="newsletter"
                    class="bg-blue-600 pt-4 pb-4 pr-6 pl-6 flex flex-col rounded-md mt-6"
                >
                    <span class="text-white font-bold text-[22px]"
                        >Get our newsletter
                    </span>
                    <span class="text-white text-sm mt-1">
                        Subscribe to our newsletter to get shopping advice, our
                        favorite gifts, and the best deals on
                        Wirecutter-approved picks sent to your inbox.
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
                                <span
                                    class="font-bold text-sm"
                                    >{{ $productReviews[0]->author }}</span
                                >
                                <div id="social" class="flex flex-row mt-2">
                                    <a
                                        class="rounded-full mr-[10px] flex justify-center items-center w-8 h-8 border-[1px] border-black"
                                        href="mailto:notes@wirecutter.com"
                                        ><img
                                            src="/assets/emailLogo.png"
                                            alt=""
                                            class="w-[13px]"
                                    /></a>

                                    <a
                                        class="rounded-full mr-[10px] flex justify-center items-center w-8 h-8 border-[1px] border-[#2AA9E0]"
                                        href="https://twitter.com/signe"
                                        ><img
                                            src="/assets/twitterLogo.png"
                                            alt=""
                                            class="h-3"
                                    /></a>

                                    <a
                                        class="rounded-full mr-[10px] flex justify-center items-center w-8 h-8 border-[1px] border-[#2AA9E0]"
                                        href="https://www.linkedin.com/in/signebrewster/"
                                        ><img
                                            src="/assets/linkedinLogo.png"
                                            alt=""
                                            class="h-3"
                                    /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="author-biography" class="mt-4 pb-20">
                        <p class="text-base">
                            Signe Brewster is an editor on Wirecutter's PC team.
                            She also writes about virtual reality. She
                            previously reported on emerging technology and
                            science for publications like Wirecutter, MIT
                            Technology Review, Wired, Science, and Symmetry
                            Magazine. She spends her free time quilting and
                            pursuing an MFA in creative writing.
                        </p>
                    </div>
                </section>

                <section
                    id="recommended-reviews"
                    class="border-t-2 border-black"
                >
                    <h2 class="text-2xl font-bold mt-1">Further reading</h2>

                    <div id="links" class="mt-5">
                        <div
                            class="flex flex-row items-center font-bold text-lg"
                        >
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
                        Be kind. Ask questions. Discriminatory language,
                        personal attacks, promotion, and spam will be removed.
                        Please read our Comment Policy before commenting.
                    </p>

                    <div id="disqus">
                        <!-- Disqus Comments Here -->
                        <p></p>
                    </div>
                </section>
            </section>
        </div>

        <section id="footer" class="bg-[#333333] pt-6 pb-6 pl-4 pr-4 flex mt-8">
            <section
                id="footer-links"
                class="flex flex-row flex-wrap pt-6 pb-6"
            >
                <div class="flex flex-row w-full">
                    <ul id="category-links-1" class="flex flex-col w-[50%]">
                        <li
                            class="text-base leading-[42px] font-franklin text-white font-semibold hover:text-[#666666]"
                        >
                            Popular
                        </li>
                        <li
                            class="text-base leading-[42px] font-franklin text-white font-semibold hover:text-[#666666]"
                        >
                            Tech
                        </li>
                        <li
                            class="text-base leading-[42px] font-franklin text-white font-semibold hover:text-[#666666]"
                        >
                            Home & Garden
                        </li>
                        <li
                            class="text-base leading-[42px] font-franklin text-white font-semibold hover:text-[#666666]"
                        >
                            Sleep
                        </li>
                        <li
                            class="text-base leading-[42px] font-franklin text-white font-semibold hover:text-[#666666]"
                        >
                            Kitchen
                        </li>
                        <li
                            class="text-base leading-[42px] font-franklin text-white font-semibold hover:text-[#666666]"
                        >
                            Money
                        </li>
                        <li
                            class="text-base leading-[42px] font-franklin text-white font-semibold hover:text-[#666666]"
                        >
                            Gifts
                        </li>
                    </ul>

                    <ul
                        id="category-links-2"
                        class="flex flex-col w-[50%] items-end"
                    >
                        <li
                            class="text-base leading-[42px] font-franklin text-white font-semibold hover:text-[#666666]"
                        >
                            Appliances
                        </li>
                        <li
                            class="text-base leading-[42px] font-franklin text-white font-semibold hover:text-[#666666]"
                        >
                            Travel
                        </li>
                        <li
                            class="text-base leading-[42px] font-franklin text-white font-semibold hover:text-[#666666]"
                        >
                            Health & Fitness
                        </li>
                        <li
                            class="text-base leading-[42px] font-franklin text-white font-semibold hover:text-[#666666]"
                        >
                            Baby & Kid
                        </li>
                        <li
                            class="text-base leading-[42px] font-franklin text-white font-semibold hover:text-[#666666]"
                        >
                            Outdoors
                        </li>
                        <li
                            class="text-base leading-[42px] font-franklin text-white font-semibold hover:text-[#666666]"
                        >
                            Pets
                        </li>
                        <li
                            class="text-base leading-[42px] font-franklin text-white font-semibold hover:text-[#666666]"
                        >
                            Hooby & Crafts
                        </li>
                    </ul>
                </div>

                <div class="flex flex-row w-full mt-[46px]">
                    <ul id="category-links-3" class="flex flex-col basis-2/4">
                        <li
                            class="text-base leading-[42px] font-franklin text-white font-semibold hover:text-[#666666]"
                        >
                            Software & Apps
                        </li>
                        <li
                            class="text-base leading-[42px] font-franklin text-white font-semibold hover:text-[#666666]"
                        >
                            Office
                        </li>
                        <li
                            class="text-base leading-[42px] font-franklin text-white font-semibold hover:text-[#666666]"
                        >
                            Cars
                        </li>
                        <li
                            class="text-base leading-[42px] font-franklin text-white font-semibold hover:text-[#666666]"
                        >
                            Adults
                        </li>
                        <li
                            class="text-base leading-[42px] font-franklin text-white font-semibold hover:text-[#666666]"
                        >
                            Deals
                        </li>
                        <li
                            class="text-base leading-[42px] font-franklin text-white font-semibold hover:text-[#666666]"
                        >
                            Lists
                        </li>
                        <li
                            class="text-base leading-[42px] font-franklin text-white font-semibold hover:text-[#666666]"
                        >
                            Blog
                        </li>
                    </ul>

                    <ul class="flex flex-col basis-2/4 items-end">
                        <li
                            class="text-base leading-[42px] font-franklin text-white font-semibold hover:text-[#666666]"
                        >
                            About Wirecutter
                        </li>
                        <li
                            class="text-base leading-[42px] font-franklin text-white font-semibold hover:text-[#666666]"
                        >
                            Our team
                        </li>
                        <li
                            class="text-base leading-[42px] font-franklin text-white font-semibold hover:text-[#666666]"
                        >
                            Staff Demographics
                        </li>
                        <li
                            class="text-base leading-[42px] font-franklin text-white font-semibold hover:text-[#666666]"
                        >
                            Jobs at Wirecutter
                        </li>
                        <li
                            class="text-base leading-[42px] font-franklin text-white font-semibold hover:text-[#666666]"
                        >
                            Contact Us
                        </li>
                        <li
                            class="text-base leading-[42px] font-franklin text-white font-semibold hover:text-[#666666]"
                        >
                            How to Pitch
                        </li>
                    </ul>
                </div>

                <div class="flex flex-row w-full mt-[46px]">
                    <ul id="misc-links-1" class="flex flex-col basis-[100%]">
                        <li
                            class="text-base leading-[42px] font-franklin text-[#CCCCCC] font-semibold"
                        >
                            Privacy Policy
                        </li>
                        <li
                            class="text-base leading-[42px] font-franklin text-[#CCCCCC] font-semibold"
                        >
                            Terms of Use
                        </li>
                        <li
                            class="text-base leading-[42px] font-franklin text-[#CCCCCC] font-semibold"
                        >
                            Cookie Policy
                        </li>
                        <li
                            class="text-base leading-[42px] font-franklin text-[#CCCCCC] font-semibold"
                        >
                            Partnerships & Advertising
                        </li>
                        <li
                            class="text-base leading-[42px] font-franklin text-[#CCCCCC] font-semibold"
                        >
                            Licesing & Reprints
                        </li>
                        <li
                            class="text-base leading-[42px] font-franklin text-[#CCCCCC] font-semibold"
                        >
                            RSS Feed
                        </li>
                    </ul>
                </div>

                <section id="footer-social">
                    <h3
                        class="text-base font-franklin text-white font-semibold mt-12"
                    >
                        Let's be friends
                    </h3>
                    <div id="footer-social-links" class="flex flex-row mt-3">
                        <a
                            class="mr-4"
                            href="https://www.facebook.com/thewirecutter/"
                            ><img src="/assets/fb1.png" alt=""
                        /></a>

                        <a
                            class="mr-4"
                            href="https://www.instagram.com/wirecutter/"
                            ><img src="/assets/ig1.png" alt=""
                        /></a>

                        <a
                            class="pt-[3px] mr-4"
                            href="https://twitter.com/wirecutter/"
                            ><img src="/assets/tt1.png" alt=""
                        /></a>

                        <a
                            class="pt-[3px] mr-4"
                            href="https://www.tiktok.com/@wirecutter"
                            ><img src="/assets/tiktok1.png" alt=""
                        /></a>
                    </div>
                    <a
                        class="text-base font-franklin text-white font-medium"
                        href="https://www.nytimes.com/wirecutter/contact-us/"
                        >You can <u>send us a note</u> too.
                    </a>
                </section>

                <span
                    >© 2022 Wirecutter, Inc.,
                    <a href="https://www.nytimes.com/"
                        >A New York Times Company</a
                    ></span
                >
            </section>
        </section>

        <button
            class="bg-[#3C78F0] text-white font-bold w-28 h-[42px] rounded-md fixed bottom-0 right-0 mr-4 mb-4"
        >
            <span class="text-xs font-bold font-franklin">Back to top</span>
        </button>
    </body>
</html>
