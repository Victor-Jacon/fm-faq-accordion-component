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

        <title>Laravel</title>

        <!-- Fonts -->
        <link
            href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"
            rel="stylesheet"
        />
    </head>

    <!-- responsivo desktop: tailwind daria muito trabalho pra fazer este alinhamento, fiz no css puro -->
    <style>
        @media (min-width: 768px) {
            #image-bg {
                left: -35rem;
            }

            #image-bg img {
                width: 55rem;
            }
        }
    </style>

    <body
        class="bg-gradient-to-t from-violet-500 to-fuchsia-400 min-h-screen flex flex-col p-4 pt-10 lg:items-center"
    >
        <div
            id="card"
            class="bg-white rounded-3xl w-full p-6 pb-14 mb-3 relative flex flex-col items-center mt-24 lg:pb-24 lg:pr-24 lg:pt-16 lg:w-3/4 lg:mt-0 lg:mb-0 lg:mr-0 lg:ml-0 lg:items-end lg:overflow-hidden lg:max-w-4xl"
        >
            <!-- open: mobile woman illustration -->
            <div class="absolute -top-28 lg:hidden">
                <img
                    class="w-64"
                    src="/assets/accordion-component-illustration-woman-online-mobile.svg"
                    alt=""
                />
            </div>

            <div class="absolute top-0 lg:hidden">
                <img
                    class="w-64"
                    src="/assets/accordion-component-bg-pattern-mobile.svg"
                    alt=""
                />
            </div>
            <!-- close: mobile woman illustration -->

            <!-- open: tablet,laptop, desktop woman illustration -->
            <div class="absolute -left-16 hidden lg:flex">
                <img
                    class="w-96"
                    src="/assets/accordion-component-illustration-woman-online-desktop.svg"
                    alt=""
                />
            </div>

            <div
                class="absolute -left-16 hidden lg:flex lg:-bottom-28"
                id="image-bg"
            >
                <img
                    class="w-96"
                    src="/assets/accordion-component-bg-pattern-desktop.svg"
                    alt=""
                />
            </div>

            <!-- close: tablet,laptop, desktop woman illustration -->

            <div id="container-accordion" class="flex flex-col mt-2 lg:w-2/4">
                <p
                    class="text-black font-bold text-center text-4xl font-kumbh mt-28 lg:mt-0 lg:text-left"
                >
                    FAQ
                </p>
                <div
                    x-data="{ isOpen: false }"
                    class="border-b border-solid border-zinc-300 pt-3 pb-3 lg:mt-6"
                >
                    <div class="flex items-center justify-between">
                        <h2
                            @click="isOpen = !isOpen"
                            :class="{'font-bold': isOpen}"
                            class="hover:text-orange-300"
                        >
                            How many team members can I invite?
                        </h2>

                        <div
                            @click="isOpen = !isOpen"
                            class="ml-3"
                            :class="{ 'rotate-180': isOpen }"
                        >
                            <img
                                class="h-2 w-3"
                                src="/assets/accordion-component-icon-arrow-down.svg"
                                alt=""
                            />
                        </div>
                    </div>

                    <p x-show="isOpen" class="text-xs min-w-min mt-3">
                        You can invite up to 2 additional users on the Free
                        plan. There is no limit on team members for the Premium
                        plan.
                    </p>
                </div>

                <div
                    x-data="{ isOpen: false }"
                    class="border-b border-solid border-zinc-300 pt-3 pb-3"
                >
                    <div class="flex items-center justify-between">
                        <h2
                            @click="isOpen = !isOpen"
                            :class="{'font-bold': isOpen}"
                            class="hover:text-orange-300"
                        >
                            What is the maximum file upload size?
                        </h2>
                        <div
                            @click="isOpen = !isOpen"
                            class="ml-3"
                            :class="{ 'rotate-180': isOpen }"
                        >
                            <img
                                class="h-2 w-3"
                                src="/assets/accordion-component-icon-arrow-down.svg"
                                alt=""
                            />
                        </div>
                    </div>

                    <p x-show="isOpen" class="text-xs min-w-min mt-3">
                        No more than 2GB. All files in your account must fit
                        your allotted storage space.
                    </p>
                </div>

                <div
                    x-data="{ isOpen: false }"
                    class="border-b border-solid border-zinc-300 pt-3 pb-3"
                >
                    <div class="flex items-center justify-between">
                        <h2
                            @click="isOpen = !isOpen"
                            :class="{'font-bold': isOpen}"
                            class="hover:text-orange-300"
                        >
                            How do I reset my password?
                        </h2>
                        <div
                            @click="isOpen = !isOpen"
                            class="ml-3"
                            :class="{ 'rotate-180': isOpen }"
                        >
                            <img
                                class="h-2 w-3"
                                src="/assets/accordion-component-icon-arrow-down.svg"
                                alt=""
                            />
                        </div>
                    </div>

                    <p x-show="isOpen" class="text-xs min-w-min mt-3">
                        Click “Forgot password” from the login page or “Change
                        password” from your profile page. A reset link will be
                        emailed to you.
                    </p>
                </div>

                <div
                    x-data="{ isOpen: false }"
                    class="border-b border-solid border-zinc-300 pt-3 pb-3"
                >
                    <div class="flex items-center justify-between">
                        <h2
                            @click="isOpen = !isOpen"
                            :class="{'font-bold': isOpen}"
                            class="hover:text-orange-300"
                        >
                            Can I cancel my subscription?
                        </h2>
                        <div
                            @click="isOpen = !isOpen"
                            class="ml-3"
                            :class="{ 'rotate-180': isOpen }"
                        >
                            <img
                                class="h-2 w-3"
                                src="/assets/accordion-component-icon-arrow-down.svg"
                                alt=""
                            />
                        </div>
                    </div>

                    <p x-show="isOpen" class="text-xs min-w-min mt-3">
                        Yes! Send us a message and we’ll process your request no
                        questions asked.
                    </p>
                </div>

                <div
                    x-data="{ isOpen: false }"
                    class="border-b border-solid border-zinc-300 pt-3 pb-3"
                >
                    <div class="flex items-center justify-between">
                        <h2
                            @click="isOpen = !isOpen"
                            :class="{'font-bold': isOpen}"
                            class="hover:text-orange-300"
                        >
                            Do you provide additional support?
                        </h2>
                        <div
                            @click="isOpen = !isOpen"
                            class="ml-3"
                            :class="{ 'rotate-180': isOpen }"
                        >
                            <img
                                class="h-2 w-3"
                                src="/assets/accordion-component-icon-arrow-down.svg"
                                alt=""
                            />
                        </div>
                    </div>

                    <p x-show="isOpen" class="text-xs min-w-min mt-3">
                        Chat and email support is available 24/7. Phone lines
                        are open during normal business hours.
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>
