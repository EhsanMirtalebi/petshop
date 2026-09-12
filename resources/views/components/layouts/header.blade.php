<header
    x-data="{ open: false }"
    @keydown.escape.window="open = false"
    class="w-full bg-white"
>

    {{-- =========================================================
        TOP BAR
    ========================================================== --}}
    <div class="bg-primary text-white rounded-b-lg">
        <div class="mx-auto flex max-w-7xl items-center justify-center px-4 py-2 text-xs sm:text-sm">

            <div class="flex items-center gap-2">
                {{-- Truck Icon --}}
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4 w-4 shrink-0"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="1.8"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M8 17h8m-8 0a2 2 0 1 1-4 0m4 0a2 2 0 1 0 4 0m4 0a2 2 0 1 0 4 0m-4 0h-4m-8-4h13l2 4h-3M4 13V7a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v6M17 9h3l2 3v1h-5V9Z"
                    />
                </svg>

                <span>
                    ارسال رایگان برای سفارش‌های بالای ۵۰۰ هزار تومان
                </span>
            </div>

        </div>
    </div>


    {{-- =========================================================
        MAIN HEADER
    ========================================================== --}}
    <div>

        <div class="mx-auto max-w-7xl px-4">

            {{-- Main Row --}}
            <div class="flex mt-2 sm:mt-4 items-center justify-between gap-3">


                {{-- =================================================
                    MOBILE MENU BUTTON
                ================================================== --}}
                <button
                    type="button"
                    @click="open = true"
                    class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl text-neutral-700 transition hover:bg-neutral-100 lg:hidden"
                    aria-label="باز کردن منو"
                >

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.8"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M4 6h16M4 12h16M4 18h16"
                        />
                    </svg>

                </button>


                {{-- =================================================
                    LOGO
                ================================================== --}}
                <a
                    href="{{ url('/') }}"
                    class="flex shrink-0 items-center gap-2"
                >

                    {{-- Logo Icon --}}
                    <div class="flex h-9 w-9 items-center justify-center rounded-xl bg-primary text-white sm:h-10 sm:w-10">

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-6 w-6 sm:h-7 sm:w-7"
                            viewBox="0 0 24 24"
                            fill="currentColor"
                        >
                            <path d="M7.5 8.5c1.38 0 2.5-1.57 2.5-3.5S8.88 1.5 7.5 1.5 5 3.07 5 5s1.12 3.5 2.5 3.5Zm9 0c1.38 0 2.5-1.57 2.5-3.5S17.88 1.5 16.5 1.5 14 3.07 14 5s1.12 3.5 2.5 3.5ZM4.5 13c1.38 0 2.5-1.57 2.5-3.5S5.88 6 4.5 6 2 7.57 2 9.5 3.12 13 4.5 13Zm15 0c1.38 0 2.5-1.57 2.5-3.5S20.88 6 19.5 6 17 7.57 17 9.5s1.12 3.5 2.5 3.5ZM12 10c-3.04 0-6 3.02-6 6.12C6 19.07 8.66 22 12 22s6-2.93 6-5.88C18 13.02 15.04 10 12 10Z"/>
                        </svg>

                    </div>

                    <span class="text-xl font-extrabold tracking-tight text-neutral-900 sm:text-2xl">
                        Pet<span class="text-primary">Shop</span>
                    </span>

                </a>


                {{-- =================================================
                    DESKTOP SEARCH
                ================================================== --}}
                <div class="mx-6 hidden flex-1 sm:block">

                    <div class="relative mx-auto max-w-2xl">

                        <input
                            type="search"
                            placeholder="جستجوی محصولات، برندها و ..."
                            class="w-full max-w-xl rounded-full border border-neutral-200 bg-neutral-50 py-3 pr-12 pl-5 text-sm text-neutral-900 outline-none transition placeholder:text-neutral-400 focus:border-primary focus:bg-white focus:ring-2 focus:ring-primary/10"
                        >

                        {{-- Search Icon --}}
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="pointer-events-none absolute right-4 top-1/2 h-5 w-5 -translate-y-1/2 text-neutral-400"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="1.8"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="m21 21-4.35-4.35m1.35-5.65a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"
                            />
                        </svg>

                    </div>

                </div>


                {{-- =================================================
                    ACCOUNT
                ================================================== --}}
                <a
                    href="#"
                    class="hidden shrink-0 items-center gap-2 text-neutral-800 transition hover:text-primary lg:flex"
                >

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.8"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M15.75 6.75a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.5 20.25a7.5 7.5 0 0 1 15 0"
                        />
                    </svg>

                    <span class="text-sm font-medium">
                        ورود / ثبت‌نام
                    </span>

                </a>


                {{-- Divider --}}
                <div class="hidden h-8 w-px bg-neutral-200 sm:block"></div>


                {{-- =================================================
                    CART
                ================================================== --}}
                <a
                    href="#"
                    class="relative flex h-10 w-10 shrink-0 items-center justify-center rounded-xl text-neutral-800 transition hover:bg-neutral-50 hover:text-primary"
                    aria-label="سبد خرید"
                >

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.8"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M2.25 3h1.386c.51 0 .955.343 1.087.836L5.4 6m0 0h14.55a1.5 1.5 0 0 1 1.456 1.862l-1.5 6A1.5 1.5 0 0 1 18.45 15H7.05a1.5 1.5 0 0 1-1.456-1.138L3.723 4.5M5.4 6 7.05 15m0 0-1.2 2.25h13.8M9 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm9.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1-1.5 0Z"
                        />
                    </svg>

                    {{-- Cart Count --}}
                    <span class="absolute -right-0.5 -top-0.5 flex h-5 min-w-5 items-center justify-center rounded-full bg-primary px-1 text-[10px] font-bold text-white">
                        0
                    </span>

                </a>

            </div>


            {{-- =================================================
                MOBILE SEARCH
            ================================================== --}}
            <div class="sm:hidden mt-2">

                <div class="relative">

                    <input
                        type="search"
                        placeholder="جستجوی محصولات و برندها..."
                        class="w-full rounded-full border border-neutral-200 bg-neutral-50 py-3 pr-11 pl-4 text-sm text-neutral-900 outline-none transition placeholder:text-neutral-400 focus:border-primary focus:bg-white focus:ring-2 focus:ring-primary/10"
                    >

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="pointer-events-none absolute right-3.5 top-1/2 h-5 w-5 -translate-y-1/2 text-neutral-400"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.8"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="m21 21-4.35-4.35m1.35-5.65a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"
                        />
                    </svg>

                </div>

            </div>

        </div>

    </div>


    {{-- =========================================================
        DESKTOP NAVIGATION
    ========================================================== --}}
    <nav class="hidden border-b border-neutral-100 lg:block">

        <div class="mx-4 xl:mx-auto flex max-w-7xl items-center gap-10 px-4">

            {{-- Home --}}
            <a
                href="{{ url('/') }}"
                class="relative py-4 text-sm font-semibold text-primary"
            >
                خانه

                <span class="absolute inset-x-0 bottom-0 h-0.5 rounded-full bg-primary"></span>
            </a>


            {{-- Products --}}
            <a
                href="#"
                class="flex items-center gap-1 py-4 text-sm font-medium text-neutral-700 transition hover:text-primary"
            >
                محصولات

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4 w-4"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="1.8"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="m6 9 6 6 6-6"
                    />
                </svg>
            </a>


            {{-- Categories --}}
            <a
                href="#"
                class="flex items-center gap-1 py-4 text-sm font-medium text-neutral-700 transition hover:text-primary"
            >
                دسته‌بندی‌ها

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4 w-4"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="1.8"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="m6 9 6 6 6-6"
                    />
                </svg>
            </a>


            {{-- Blog --}}
            <a
                href="#"
                class="py-4 text-sm font-medium text-neutral-700 transition hover:text-primary"
            >
                وبلاگ
            </a>


            {{-- Contact --}}
            <a
                href="#"
                class="py-4 text-sm font-medium text-neutral-700 transition hover:text-primary"
            >
                تماس با ما
            </a>

        </div>

    </nav>


    {{-- =========================================================
        MOBILE DRAWER
    ========================================================== --}}
    <div
        x-cloak
        x-show="open"
        class="fixed inset-0 z-50 lg:hidden"
        role="dialog"
        aria-modal="true"
    >

        {{-- =====================================================
            OVERLAY
        ====================================================== --}}
        <div
            x-show="open"
            x-transition:enter="transition-opacity duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition-opacity duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            @click="open = false"
            class="absolute inset-0 bg-black/40"
        ></div>


        {{-- =====================================================
            DRAWER
        ====================================================== --}}
        <aside
            x-show="open"
            x-transition:enter="transform transition duration-300 ease-out"
            x-transition:enter-start="translate-x-full"
            x-transition:enter-end="translate-x-0"
            x-transition:leave="transform transition duration-200 ease-in"
            x-transition:leave-start="translate-x-0"
            x-transition:leave-end="translate-x-full"
            class="absolute right-0 top-0 flex h-full w-[85%] max-w-sm flex-col bg-white shadow-2xl"
        >

            {{-- =================================================
                DRAWER HEADER
            ================================================== --}}
            <div class="flex h-20 shrink-0 items-center justify-between border-b border-neutral-100 px-5">

                {{-- Logo --}}
                <a
                    href="{{ url('/') }}"
                    @click="open = false"
                    class="flex items-center gap-2"
                >

                    <div class="flex h-9 w-9 items-center justify-center rounded-xl bg-primary text-white">

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-6 w-6"
                            viewBox="0 0 24 24"
                            fill="currentColor"
                        >
                            <path d="M7.5 8.5c1.38 0 2.5-1.57 2.5-3.5S8.88 1.5 7.5 1.5 5 3.07 5 5s1.12 3.5 2.5 3.5Zm9 0c1.38 0 2.5-1.57 2.5-3.5S17.88 1.5 16.5 1.5 14 3.07 14 5s1.12 3.5 2.5 3.5ZM4.5 13c1.38 0 2.5-1.57 2.5-3.5S5.88 6 4.5 6 2 7.57 2 9.5 3.12 13 4.5 13Zm15 0c1.38 0 2.5-1.57 2.5-3.5S20.88 6 19.5 6 17 7.57 17 9.5s1.12 3.5 2.5 3.5ZM12 10c-3.04 0-6 3.02-6 6.12C6 19.07 8.66 22 12 22s6-2.93 6-5.88C18 13.02 15.04 10 12 10Z"/>
                        </svg>

                    </div>

                    <span class="text-xl font-extrabold text-neutral-900">
                        Pet<span class="text-primary">Shop</span>
                    </span>

                </a>


                {{-- Close Button --}}
                <button
                    type="button"
                    @click="open = false"
                    class="flex h-10 w-10 items-center justify-center rounded-xl text-neutral-500 transition hover:bg-neutral-100 hover:text-neutral-900"
                    aria-label="بستن منو"
                >

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.8"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M6 6l12 12M18 6L6 18"
                        />
                    </svg>

                </button>

            </div>


            {{-- =================================================
                DRAWER NAVIGATION
            ================================================== --}}
            <nav class="flex-1 overflow-y-auto px-4 py-5">

                <div class="space-y-1">

                    {{-- Home --}}
                    <a
                        href="{{ url('/') }}"
                        @click="open = false"
                        class="flex items-center justify-between rounded-xl bg-primary/10 px-4 py-3.5 text-sm font-semibold text-primary"
                    >
                        خانه
                    </a>


                    {{-- Products --}}
                    <a
                        href="#"
                        @click="open = false"
                        class="flex items-center justify-between rounded-xl px-4 py-3.5 text-sm font-medium text-neutral-700 transition hover:bg-neutral-50"
                    >

                        <span>
                            محصولات
                        </span>

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4 text-neutral-400"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="1.8"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="m9 18 6-6-6-6"
                            />
                        </svg>

                    </a>


                    {{-- Categories --}}
                    <a
                        href="#"
                        @click="open = false"
                        class="flex items-center justify-between rounded-xl px-4 py-3.5 text-sm font-medium text-neutral-700 transition hover:bg-neutral-50"
                    >

                        <span>
                            دسته‌بندی‌ها
                        </span>

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4 text-neutral-400"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="1.8"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="m9 18 6-6-6-6"
                            />
                        </svg>

                    </a>


                    {{-- Blog --}}
                    <a
                        href="#"
                        @click="open = false"
                        class="block rounded-xl px-4 py-3.5 text-sm font-medium text-neutral-700 transition hover:bg-neutral-50"
                    >
                        وبلاگ
                    </a>


                    {{-- Contact --}}
                    <a
                        href="#"
                        @click="open = false"
                        class="block rounded-xl px-4 py-3.5 text-sm font-medium text-neutral-700 transition hover:bg-neutral-50"
                    >
                        تماس با ما
                    </a>

                </div>

            </nav>


            {{-- =================================================
                DRAWER FOOTER
            ================================================== --}}
            <div class="shrink-0 border-t border-neutral-100 p-4">

                <a
                    href="#"
                    @click="open = false"
                    class="flex w-full items-center justify-center gap-2 rounded-xl bg-primary px-4 py-3.5 text-sm font-semibold text-white transition hover:bg-primary-dark"
                >

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.8"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M15.75 6.75a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.5 20.25a7.5 7.5 0 0 1 15 0"
                        />
                    </svg>

                    ورود / ثبت‌نام

                </a>

            </div>

        </aside>

    </div>

</header>
