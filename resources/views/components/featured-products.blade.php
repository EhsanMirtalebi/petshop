<section class="py-4 sm:py-6">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        {{-- Header --}}
        <div class="mb-6 flex items-end justify-between sm:mb-8">
            <div>
                <span class="mb-1 block text-xs font-medium text-primary sm:text-sm">
                    انتخابی برای دوست کوچولوی شما
                </span>

                <h2 class="text-xl font-bold text-slate-900 sm:text-2xl">
                    محصولات پیشنهادی
                </h2>
            </div>

            <a
                href="#"
                class="flex items-center gap-1 text-xs font-medium text-primary transition hover:opacity-80 sm:text-sm"
            >
                مشاهده همه

                <svg
                    class="h-4 w-4"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M15 19l-7-7 7-7"
                    />
                </svg>
            </a>
        </div>


        {{-- Products --}}
        <div
            x-data="{
        scroll(direction) {
            const container = this.$refs.products;

            container.scrollBy({
                left: direction * 400,
                behavior: 'smooth'
            });
        }
    }"
            class="relative"
        >
            {{-- Products Container --}}
            <div
                x-ref="products"
                class="flex gap-3 overflow-x-auto scroll-smooth pb-3 scrollbar-none
               sm:gap-4 lg:gap-5 lg:pb-4"
            >

                {{-- Product 1 --}}
                <div
                    class="group w-[150px] shrink-0 overflow-hidden rounded-2xl border border-slate-100 bg-white
                   shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-md
                   sm:w-[175px] lg:w-[180px]"
                >
                    <div class="relative aspect-square overflow-hidden bg-slate-50">
                        <img
                            src="{{ asset('images/products/product-1.png') }}"
                            alt="غذای خشک گربه"
                            class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
                        >

                        <button
                            type="button"
                            class="absolute right-2 top-2 flex h-8 w-8 items-center justify-center rounded-full bg-white/90 text-slate-500 shadow-sm transition hover:text-red-500"
                        >
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1.8"
                                    d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78L12 21.23l8.84-8.84a5.5 5.5 0 000-7.78z"
                                />
                            </svg>
                        </button>
                    </div>

                    <div class="p-3">
                        <p class="mb-1 text-[10px] text-slate-400 sm:text-xs">
                            غذای گربه
                        </p>

                        <h3 class="line-clamp-2 min-h-[36px] text-xs font-semibold leading-5 text-slate-800 sm:text-sm">
                            غذای خشک گربه رویال کنین
                        </h3>

                        <div class="mt-3 flex items-center justify-between gap-2">
                            <div>
                        <span class="block text-sm font-bold text-slate-900">
                            ۸۵۰,۰۰۰
                        </span>

                                <span class="text-[9px] text-slate-400">
                            تومان
                        </span>
                            </div>

                            <button
                                type="button"
                                class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-primary text-white transition hover:opacity-90"
                            >
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M12 5v14M5 12h14"
                                    />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>


                {{-- Product 2 --}}
                <div
                    class="group w-[150px] shrink-0 overflow-hidden rounded-2xl border border-slate-100 bg-white
                   shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-md
                   sm:w-[175px] lg:w-[180px]"
                >
                    <div class="relative aspect-square overflow-hidden bg-slate-50">
                        <img
                            src="{{ asset('images/products/product-2.jpg') }}"
                            alt="غذای خشک سگ"
                            class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
                        >

                        <button
                            type="button"
                            class="absolute right-2 top-2 flex h-8 w-8 items-center justify-center rounded-full bg-white/90 text-slate-500 shadow-sm transition hover:text-red-500"
                        >
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1.8"
                                    d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78L12 21.23l8.84-8.84a5.5 5.5 0 000-7.78z"
                                />
                            </svg>
                        </button>
                    </div>

                    <div class="p-3">
                        <p class="mb-1 text-[10px] text-slate-400 sm:text-xs">
                            غذای سگ
                        </p>

                        <h3 class="line-clamp-2 min-h-[36px] text-xs font-semibold leading-5 text-slate-800 sm:text-sm">
                            غذای خشک سگ بالغ جوسرا
                        </h3>

                        <div class="mt-3 flex items-center justify-between gap-2">
                            <div>
                        <span class="block text-sm font-bold text-slate-900">
                            ۷۹۰,۰۰۰
                        </span>

                                <span class="text-[9px] text-slate-400">
                            تومان
                        </span>
                            </div>

                            <button
                                type="button"
                                class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-primary text-white transition hover:opacity-90"
                            >
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M12 5v14M5 12h14"
                                    />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>


                {{-- Product 3 --}}
                <div
                    class="group w-[150px] shrink-0 overflow-hidden rounded-2xl border border-slate-100 bg-white
                   shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-md
                   sm:w-[175px] lg:w-[180px]"
                >
                    <div class="relative aspect-square overflow-hidden bg-slate-50">
                        <img
                            src="{{ asset('images/products/product-3.jpg') }}"
                            alt="تشویقی سگ"
                            class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
                        >

                        <button
                            type="button"
                            class="absolute right-2 top-2 flex h-8 w-8 items-center justify-center rounded-full bg-white/90 text-slate-500 shadow-sm transition hover:text-red-500"
                        >
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1.8"
                                    d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78L12 21.23l8.84-8.84a5.5 5.5 0 000-7.78z"
                                />
                            </svg>
                        </button>
                    </div>

                    <div class="p-3">
                        <p class="mb-1 text-[10px] text-slate-400 sm:text-xs">
                            تشویقی
                        </p>

                        <h3 class="line-clamp-2 min-h-[36px] text-xs font-semibold leading-5 text-slate-800 sm:text-sm">
                            تشویقی نرم سگ با طعم مرغ
                        </h3>

                        <div class="mt-3 flex items-center justify-between gap-2">
                            <div>
                        <span class="block text-sm font-bold text-slate-900">
                            ۲۹۰,۰۰۰
                        </span>

                                <span class="text-[9px] text-slate-400">
                            تومان
                        </span>
                            </div>

                            <button
                                type="button"
                                class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-primary text-white transition hover:opacity-90"
                            >
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M12 5v14M5 12h14"
                                    />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>


                {{-- Product 4 --}}
                <div
                    class="group w-[150px] shrink-0 overflow-hidden rounded-2xl border border-slate-100 bg-white
                   shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-md
                   sm:w-[175px] lg:w-[180px]"
                >
                    <div class="relative aspect-square overflow-hidden bg-slate-50">
                        <img
                            src="{{ asset('images/products/product-4.jpg') }}"
                            alt="خاک گربه"
                            class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
                        >

                        <button
                            type="button"
                            class="absolute right-2 top-2 flex h-8 w-8 items-center justify-center rounded-full bg-white/90 text-slate-500 shadow-sm transition hover:text-red-500"
                        >
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1.8"
                                    d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78L12 21.23l8.84-8.84a5.5 5.5 0 000-7.78z"
                                />
                            </svg>
                        </button>
                    </div>

                    <div class="p-3">
                        <p class="mb-1 text-[10px] text-slate-400 sm:text-xs">
                            بهداشت
                        </p>

                        <h3 class="line-clamp-2 min-h-[36px] text-xs font-semibold leading-5 text-slate-800 sm:text-sm">
                            خاک گربه کلامپینگ با کیفیت بالا
                        </h3>

                        <div class="mt-3 flex items-center justify-between gap-2">
                            <div>
                        <span class="block text-sm font-bold text-slate-900">
                            ۳۹۰,۰۰۰
                        </span>

                                <span class="text-[9px] text-slate-400">
                            تومان
                        </span>
                            </div>

                            <button
                                type="button"
                                class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-primary text-white transition hover:opacity-90"
                            >
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M12 5v14M5 12h14"
                                    />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>


                {{-- Product 5 --}}
                <div
                    class="group w-[150px] shrink-0 overflow-hidden rounded-2xl border border-slate-100 bg-white
                   shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-md
                   sm:w-[175px] lg:w-[180px]"
                >
                    <div class="relative aspect-square overflow-hidden bg-slate-50">
                        <img
                            src="{{ asset('images/products/product-1.png') }}"
                            alt="اسباب بازی گربه"
                            class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
                        >

                        <button
                            type="button"
                            class="absolute right-2 top-2 flex h-8 w-8 items-center justify-center rounded-full bg-white/90 text-slate-500 shadow-sm transition hover:text-red-500"
                        >
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1.8"
                                    d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78L12 21.23l8.84-8.84a5.5 5.5 0 000-7.78z"
                                />
                            </svg>
                        </button>
                    </div>

                    <div class="p-3">
                        <p class="mb-1 text-[10px] text-slate-400 sm:text-xs">
                            اسباب بازی
                        </p>

                        <h3 class="line-clamp-2 min-h-[36px] text-xs font-semibold leading-5 text-slate-800 sm:text-sm">
                            توپ بازی و سرگرمی مخصوص گربه
                        </h3>

                        <div class="mt-3 flex items-center justify-between gap-2">
                            <div>
                        <span class="block text-sm font-bold text-slate-900">
                            ۱۸۰,۰۰۰
                        </span>

                                <span class="text-[9px] text-slate-400">
                            تومان
                        </span>
                            </div>

                            <button
                                type="button"
                                class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-primary text-white transition hover:opacity-90"
                            >
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M12 5v14M5 12h14"
                                    />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>


                {{-- Product 6 --}}
                <div
                    class="group w-[150px] shrink-0 overflow-hidden rounded-2xl border border-slate-100 bg-white
                   shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-md
                   sm:w-[175px] lg:w-[180px]"
                >
                    <div class="relative aspect-square overflow-hidden bg-slate-50">
                        <img
                            src="{{ asset('images/products/product-2.jpg') }}"
                            alt="ظرف غذای حیوانات"
                            class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
                        >

                        <button
                            type="button"
                            class="absolute right-2 top-2 flex h-8 w-8 items-center justify-center rounded-full bg-white/90 text-slate-500 shadow-sm transition hover:text-red-500"
                        >
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1.8"
                                    d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78L12 21.23l8.84-8.84a5.5 5.5 0 000-7.78z"
                                />
                            </svg>
                        </button>
                    </div>

                    <div class="p-3">
                        <p class="mb-1 text-[10px] text-slate-400 sm:text-xs">
                            لوازم
                        </p>

                        <h3 class="line-clamp-2 min-h-[36px] text-xs font-semibold leading-5 text-slate-800 sm:text-sm">
                            ظرف غذای استیل ضد زنگ
                        </h3>

                        <div class="mt-3 flex items-center justify-between gap-2">
                            <div>
                        <span class="block text-sm font-bold text-slate-900">
                            ۳۲۰,۰۰۰
                        </span>

                                <span class="text-[9px] text-slate-400">
                            تومان
                        </span>
                            </div>

                            <button
                                type="button"
                                class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-primary text-white transition hover:opacity-90"
                            >
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M12 5v14M5 12h14"
                                    />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>


                {{-- Product 7 --}}
                <div
                    class="group w-[150px] shrink-0 overflow-hidden rounded-2xl border border-slate-100 bg-white
                   shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-md
                   sm:w-[175px] lg:w-[180px]"
                >
                    <div class="relative aspect-square overflow-hidden bg-slate-50">
                        <img
                            src="{{ asset('images/products/product-3.jpg') }}"
                            alt="شانه حیوانات"
                            class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
                        >

                        <button
                            type="button"
                            class="absolute right-2 top-2 flex h-8 w-8 items-center justify-center rounded-full bg-white/90 text-slate-500 shadow-sm transition hover:text-red-500"
                        >
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1.8"
                                    d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78L12 21.23l8.84-8.84a5.5 5.5 0 000-7.78z"
                                />
                            </svg>
                        </button>
                    </div>

                    <div class="p-3">
                        <p class="mb-1 text-[10px] text-slate-400 sm:text-xs">
                            مراقبت
                        </p>

                        <h3 class="line-clamp-2 min-h-[36px] text-xs font-semibold leading-5 text-slate-800 sm:text-sm">
                            شانه و برس مخصوص حیوانات خانگی
                        </h3>

                        <div class="mt-3 flex items-center justify-between gap-2">
                            <div>
                        <span class="block text-sm font-bold text-slate-900">
                            ۲۴۰,۰۰۰
                        </span>

                                <span class="text-[9px] text-slate-400">
                            تومان
                        </span>
                            </div>

                            <button
                                type="button"
                                class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-primary text-white transition hover:opacity-90"
                            >
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M12 5v14M5 12h14"
                                    />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>


                {{-- Product 8 --}}
                <div
                    class="group w-[150px] shrink-0 overflow-hidden rounded-2xl border border-slate-100 bg-white
                   shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-md
                   sm:w-[175px] lg:w-[180px]"
                >
                    <div class="relative aspect-square overflow-hidden bg-slate-50">
                        <img
                            src="{{ asset('images/products/product-4.jpg') }}"
                            alt="ویتامین حیوانات"
                            class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
                        >

                        <button
                            type="button"
                            class="absolute right-2 top-2 flex h-8 w-8 items-center justify-center rounded-full bg-white/90 text-slate-500 shadow-sm transition hover:text-red-500"
                        >
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1.8"
                                    d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78L12 21.23l8.84-8.84a5.5 5.5 0 000-7.78z"
                                />
                            </svg>
                        </button>
                    </div>

                    <div class="p-3">
                        <p class="mb-1 text-[10px] text-slate-400 sm:text-xs">
                            مکمل
                        </p>

                        <h3 class="line-clamp-2 min-h-[36px] text-xs font-semibold leading-5 text-slate-800 sm:text-sm">
                            مکمل ویتامین و مواد معدنی حیوانات
                        </h3>

                        <div class="mt-3 flex items-center justify-between gap-2">
                            <div>
                        <span class="block text-sm font-bold text-slate-900">
                            ۴۵۰,۰۰۰
                        </span>

                                <span class="text-[9px] text-slate-400">
                            تومان
                        </span>
                            </div>

                            <button
                                type="button"
                                class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-primary text-white transition hover:opacity-90"
                            >
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M12 5v14M5 12h14"
                                    />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

            </div>


            {{-- Desktop Scroll Buttons --}}
            <button
                type="button"
                @click="scroll(-1)"
                class="absolute -left-4 top-1/2 hidden h-10 w-10 -translate-y-1/2 items-center justify-center
               rounded-full border border-slate-100 bg-white text-slate-600 shadow-md
               transition hover:bg-primary hover:text-white
               lg:flex"
                aria-label="محصولات قبلی"
            >
                <svg
                    class="h-5 w-5"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M15 19l-7-7 7-7"
                    />
                </svg>
            </button>


            <button
                type="button"
                @click="scroll(1)"
                class="absolute -right-4 top-1/2 hidden h-10 w-10 -translate-y-1/2 items-center justify-center
               rounded-full border border-slate-100 bg-white text-slate-600 shadow-md
               transition hover:bg-primary hover:text-white
               lg:flex"
                aria-label="محصولات بعدی"
            >
                <svg
                    class="h-5 w-5"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M9 5l7 7-7 7"
                    />
                </svg>
            </button>
        </div>
    </div>
</section>
