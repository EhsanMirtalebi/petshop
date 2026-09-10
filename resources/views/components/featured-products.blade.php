<section class="py-6">
    <div class="mx-auto max-w-7xl px-2">

        {{-- Section Header --}}
        <div class="mb-7 flex items-end justify-between sm:mb-9">
            <div>
                <span class="block text-sm font-medium text-primary">
                    انتخاب‌های محبوب
                </span>

                <h2 class="text-2xl font-bold text-gray-900 sm:text-3xl">
                    محصولات پیشنهادی
                </h2>
            </div>

            <a
                href="#"
                class="hidden items-center gap-1.5 text-sm font-medium text-primary transition hover:gap-2.5 sm:flex"
            >
                مشاهده همه

                <svg
                    class="h-4 w-4"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                >
                    <path d="M5 12h14"/>
                    <path d="m13 6 6 6-6 6"/>
                </svg>
            </a>
        </div>


        {{-- Products Grid --}}
        <div class="grid grid-cols-2 gap-3 sm:grid-cols-2 sm:gap-5 lg:grid-cols-4">

            {{-- Product Card --}}
            <article
                class="group overflow-hidden rounded-2xl border border-gray-100 bg-white transition duration-300 hover:-translate-y-1 hover:shadow-lg"
            >

                {{-- Image --}}
                <a
                    href="#"
                    class="relative block aspect-square overflow-hidden bg-gray-100"
                >

                    {{-- Discount --}}
                    <span
                        class="absolute right-3 top-3 z-10 rounded-full bg-primary px-2.5 py-1 text-[11px] font-medium text-white"
                    >
                        ۱۵٪ تخفیف
                    </span>

                    <img
                        src="{{ asset('images/products/product-1.png') }}"
                        alt="غذای خشک سگ"
                        class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
                    />

                    {{-- Wishlist --}}
                    <button
                        type="button"
                        class="absolute left-3 top-3 flex h-9 w-9 items-center justify-center rounded-full bg-white/90 text-gray-500 shadow-sm backdrop-blur transition hover:text-primary"
                    >
                        <svg
                            class="h-4.5 w-4.5"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8"
                        >
                            <path
                                d="M20.8 8.6c0 5.5-8.8 10.4-8.8 10.4S3.2 14.1 3.2 8.6A4.6 4.6 0 0 1 12 6.1a4.6 4.6 0 0 1 8.8 2.5Z"
                            />
                        </svg>
                    </button>
                </a>


                {{-- Product Info --}}
                <div class="p-3 sm:p-4">

                    {{-- Category --}}
                    <span class="text-[11px] text-gray-400 sm:text-xs">
                        غذای سگ
                    </span>

                    {{-- Product Name --}}
                    <a
                        href="#"
                        class="mt-1 block truncate text-sm font-semibold text-gray-800 transition hover:text-primary sm:text-base"
                    >
                        غذای خشک سگ رویال کنین
                    </a>


                    {{-- Rating --}}
                    <div class="mt-2 flex items-center gap-1">
                        <div class="flex text-amber-400">
                            <svg class="h-3.5 w-3.5 fill-current" viewBox="0 0 20 20">
                                <path d="M10 1.5l2.6 5.3 5.9.9-4.3 4.2 1 5.9-5.2-2.8-5.2 2.8 1-5.9-4.3-4.2 5.9-.9L10 1.5Z"/>
                            </svg>
                            <svg class="h-3.5 w-3.5 fill-current" viewBox="0 0 20 20">
                                <path d="M10 1.5l2.6 5.3 5.9.9-4.3 4.2 1 5.9-5.2-2.8-5.2 2.8 1-5.9-4.3-4.2 5.9-.9L10 1.5Z"/>
                            </svg>
                            <svg class="h-3.5 w-3.5 fill-current" viewBox="0 0 20 20">
                                <path d="M10 1.5l2.6 5.3 5.9.9-4.3 4.2 1 5.9-5.2-2.8-5.2 2.8 1-5.9-5.2-2.8 1-5.9-4.3-4.2 5.9-.9L10 1.5Z"/>
                            </svg>
                            <svg class="h-3.5 w-3.5 fill-current" viewBox="0 0 20 20">
                                <path d="M10 1.5l2.6 5.3 5.9.9-4.3 4.2 1 5.9-5.2-2.8-5.2 2.8 1-5.9-4.3-4.2 5.9-.9L10 1.5Z"/>
                            </svg>
                            <svg class="h-3.5 w-3.5 fill-current" viewBox="0 0 20 20">
                                <path d="M10 1.5l2.6 5.3 5.9.9-4.3 4.2 1 5.9-5.2-2.8-5.2 2.8 1-5.9-4.3-4.2 5.9-.9L10 1.5Z"/>
                            </svg>
                        </div>

                        <span class="text-[11px] text-gray-400">
                            (۲۴)
                        </span>
                    </div>


                    {{-- Price --}}
                    <div class="mt-3 flex items-end justify-between gap-2">

                        <div>
                            <span class="text-[11px] text-gray-400 line-through">
                                ۸۵۰,۰۰۰
                            </span>

                            <div class="mt-0.5">
                                <span class="text-sm font-bold text-gray-900 sm:text-base">
                                    ۷۲۲,۵۰۰
                                </span>

                                <span class="mr-0.5 text-[10px] text-gray-400">
                                    تومان
                                </span>
                            </div>
                        </div>


                        {{-- Add To Cart --}}
                        <button
                            type="button"
                            class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-primary text-white transition hover:bg-primary/90 active:scale-95"
                            aria-label="افزودن به سبد خرید"
                        >
                            <svg
                                class="h-4.5 w-4.5"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                            >
                                <path d="M3 4h2l2.4 11.2a2 2 0 0 0 2 1.6h7.8a2 2 0 0 0 1.9-1.4L21 8H6"/>
                                <circle cx="10" cy="20" r="1"/>
                                <circle cx="18" cy="20" r="1"/>
                            </svg>
                        </button>

                    </div>

                </div>
            </article>


            {{-- Product 2 --}}
            <article
                class="group overflow-hidden rounded-2xl border border-gray-100 bg-white transition duration-300 hover:-translate-y-1 hover:shadow-lg"
            >
                <a
                    href="#"
                    class="relative block aspect-square overflow-hidden bg-gray-100"
                >
                    <img
                        src="{{ asset('images/products/product-2.jpg') }}"
                        alt="غذای گربه"
                        class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
                    />

                    <button
                        type="button"
                        class="absolute left-3 top-3 flex h-9 w-9 items-center justify-center rounded-full bg-white/90 text-gray-500 shadow-sm backdrop-blur transition hover:text-primary"
                    >
                        <svg
                            class="h-4.5 w-4.5"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8"
                        >
                            <path d="M20.8 8.6c0 5.5-8.8 10.4-8.8 10.4S3.2 14.1 3.2 8.6A4.6 4.6 0 0 1 12 6.1a4.6 4.6 0 0 1 8.8 2.5Z"/>
                        </svg>
                    </button>
                </a>

                <div class="p-3 sm:p-4">
                    <span class="text-[11px] text-gray-400 sm:text-xs">
                        غذای گربه
                    </span>

                    <a
                        href="#"
                        class="mt-1 block truncate text-sm font-semibold text-gray-800 hover:text-primary sm:text-base"
                    >
                        غذای خشک گربه جوسرا
                    </a>

                    <div class="mt-2 flex items-center gap-1">
                        <div class="flex text-amber-400">
                            ★★★★★
                        </div>
                        <span class="text-[11px] text-gray-400">(۱۸)</span>
                    </div>

                    <div class="mt-3 flex items-end justify-between gap-2">
                        <div>
                            <div>
                                <span class="text-sm font-bold text-gray-900 sm:text-base">
                                    ۶۴۰,۰۰۰
                                </span>
                                <span class="mr-0.5 text-[10px] text-gray-400">
                                    تومان
                                </span>
                            </div>
                        </div>

                        <button
                            type="button"
                            class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-primary text-white transition hover:bg-primary/90 active:scale-95"
                        >
                            <svg
                                class="h-4.5 w-4.5"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                            >
                                <path d="M3 4h2l2.4 11.2a2 2 0 0 0 2 1.6h7.8a2 2 0 0 0 1.9-1.4L21 8H6"/>
                                <circle cx="10" cy="20" r="1"/>
                                <circle cx="18" cy="20" r="1"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </article>


            {{-- Product 3 --}}
            <article
                class="group overflow-hidden rounded-2xl border border-gray-100 bg-white transition duration-300 hover:-translate-y-1 hover:shadow-lg"
            >
                <a
                    href="#"
                    class="relative block aspect-square overflow-hidden bg-gray-100"
                >
                    <span
                        class="absolute right-3 top-3 z-10 rounded-full bg-primary px-2.5 py-1 text-[11px] font-medium text-white"
                    >
                        جدید
                    </span>

                    <img
                        src="{{ asset('images/products/product-3.jpg') }}"
                        alt="اسباب بازی حیوانات"
                        class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
                    />

                    <button
                        type="button"
                        class="absolute left-3 top-3 flex h-9 w-9 items-center justify-center rounded-full bg-white/90 text-gray-500 shadow-sm backdrop-blur transition hover:text-primary"
                    >
                        <svg
                            class="h-4.5 w-4.5"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8"
                        >
                            <path d="M20.8 8.6c0 5.5-8.8 10.4-8.8 10.4S3.2 14.1 3.2 8.6A4.6 4.6 0 0 1 12 6.1a4.6 4.6 0 0 1 8.8 2.5Z"/>
                        </svg>
                    </button>
                </a>

                <div class="p-3 sm:p-4">
                    <span class="text-[11px] text-gray-400 sm:text-xs">
                        اسباب بازی
                    </span>

                    <a
                        href="#"
                        class="mt-1 block truncate text-sm font-semibold text-gray-800 hover:text-primary sm:text-base"
                    >
                        توپ بازی مخصوص سگ
                    </a>

                    <div class="mt-2 flex items-center gap-1">
                        <div class="flex text-amber-400">
                            ★★★★★
                        </div>
                        <span class="text-[11px] text-gray-400">(۳۱)</span>
                    </div>

                    <div class="mt-3 flex items-end justify-between gap-2">
                        <div>
                            <span class="text-sm font-bold text-gray-900 sm:text-base">
                                ۳۹۰,۰۰۰
                            </span>
                            <span class="mr-0.5 text-[10px] text-gray-400">
                                تومان
                            </span>
                        </div>

                        <button
                            type="button"
                            class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-primary text-white transition hover:bg-primary/90 active:scale-95"
                        >
                            <svg
                                class="h-4.5 w-4.5"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                            >
                                <path d="M3 4h2l2.4 11.2a2 2 0 0 0 2 1.6h7.8a2 2 0 0 0 1.9-1.4L21 8H6"/>
                                <circle cx="10" cy="20" r="1"/>
                                <circle cx="18" cy="20" r="1"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </article>


            {{-- Product 4 --}}
            <article
                class="group overflow-hidden rounded-2xl border border-gray-100 bg-white transition duration-300 hover:-translate-y-1 hover:shadow-lg"
            >
                <a
                    href="#"
                    class="relative block aspect-square overflow-hidden bg-gray-100"
                >
                    <img
                        src="{{ asset('images/products/product-4.jpg') }}"
                        alt="شامپو حیوانات"
                        class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
                    />

                    <button
                        type="button"
                        class="absolute left-3 top-3 flex h-9 w-9 items-center justify-center rounded-full bg-white/90 text-gray-500 shadow-sm backdrop-blur transition hover:text-primary"
                    >
                        <svg
                            class="h-4.5 w-4.5"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8"
                        >
                            <path d="M20.8 8.6c0 5.5-8.8 10.4-8.8 10.4S3.2 14.1 3.2 8.6A4.6 4.6 0 0 1 12 6.1a4.6 4.6 0 0 1 8.8 2.5Z"/>
                        </svg>
                    </button>
                </a>

                <div class="p-3 sm:p-4">
                    <span class="text-[11px] text-gray-400 sm:text-xs">
                        بهداشت و مراقبت
                    </span>

                    <a
                        href="#"
                        class="mt-1 block truncate text-sm font-semibold text-gray-800 hover:text-primary sm:text-base"
                    >
                        شامپو مخصوص حیوانات
                    </a>

                    <div class="mt-2 flex items-center gap-1">
                        <div class="flex text-amber-400">
                            ★★★★★
                        </div>
                        <span class="text-[11px] text-gray-400">(۱۲)</span>
                    </div>

                    <div class="mt-3 flex items-end justify-between gap-2">
                        <div>
                            <span class="text-sm font-bold text-gray-900 sm:text-base">
                                ۲۸۰,۰۰۰
                            </span>
                            <span class="mr-0.5 text-[10px] text-gray-400">
                                تومان
                            </span>
                        </div>

                        <button
                            type="button"
                            class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-primary text-white transition hover:bg-primary/90 active:scale-95"
                        >
                            <svg
                                class="h-4.5 w-4.5"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                            >
                                <path d="M3 4h2l2.4 11.2a2 2 0 0 0 2 1.6h7.8a2 2 0 0 0 1.9-1.4L21 8H6"/>
                                <circle cx="10" cy="20" r="1"/>
                                <circle cx="18" cy="20" r="1"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </article>

        </div>


        {{-- Mobile: View All --}}
        <div class="mt-7 text-center sm:hidden">
            <a
                href="#"
                class="inline-flex items-center gap-1.5 text-sm font-medium text-primary"
            >
                مشاهده همه محصولات

                <svg
                    class="h-4 w-4"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                >
                    <path d="M5 12h14"/>
                    <path d="m13 6 6 6-6 6"/>
                </svg>
            </a>
        </div>

    </div>
</section>
