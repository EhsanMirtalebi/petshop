<x-layouts.app>

<div
        x-data="{
        selectedImage: 0,
        quantity: 1,

        images: [
            '{{ asset('images/products/product-1.jpg') }}',
            '{{ asset('images/products/product-2.jpg') }}',
            '{{ asset('images/products/product-3.jpg') }}',
            '{{ asset('images/products/product-4.jpg') }}',
        ],

        increase() {
            this.quantity++
        },

        decrease() {
            if (this.quantity > 1) {
                this.quantity--
            }
        }
    }"
    >

        {{-- Breadcrumb --}}
        <div class="mx-auto max-w-7xl px-4 py-5 sm:px-6 lg:px-8">

            <nav class="flex items-center gap-2 text-sm text-gray-500">

                <a
                    href="{{ url('/') }}"
                    class="transition hover:text-primary"
                >
                    خانه
                </a>

                <svg
                    class="h-4 w-4 rotate-180"
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

                <a
                    href="#"
                    class="transition hover:text-primary"
                >
                    محصولات
                </a>

                <svg
                    class="h-4 w-4 rotate-180"
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

                <span class="truncate text-gray-900">
                غذای خشک سگ
            </span>

            </nav>

        </div>


        {{-- Product --}}
        <section class="mx-auto max-w-7xl px-4 pb-12 sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-12">


                {{-- ========================= --}}
                {{-- Product Gallery --}}
                {{-- ========================= --}}

                <div class="space-y-4">

                    {{-- Main Image --}}
                    <div class="relative aspect-square overflow-hidden rounded-3xl border border-gray-100 bg-white">

                        {{-- Discount --}}
                        <span
                            class="absolute right-4 top-4 z-10 rounded-xl bg-red-500 px-3 py-1.5 text-xs font-bold text-white"
                        >
                        ۱۵٪ تخفیف
                    </span>


                        {{-- Wishlist --}}
                        <button
                            type="button"
                            class="absolute left-4 top-4 z-10 flex h-11 w-11 items-center justify-center rounded-full bg-white text-gray-500 shadow-sm transition hover:bg-primary hover:text-white"
                            aria-label="افزودن به علاقه‌مندی‌ها"
                        >

                            <svg
                                class="h-5 w-5"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="1.8"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78L12 21.23l8.84-8.84a5.5 5.5 0 0 0 0-7.78Z"
                                />
                            </svg>

                        </button>


                        {{-- Image --}}
                        <div class="relative z-10 flex h-full items-center justify-center p-8 sm:p-12">

                            <template x-for="(image, index) in images" :key="index">

                                <img
                                    x-show="selectedImage === index"
                                    x-transition.opacity
                                    :src="image"
                                    alt="تصویر محصول"
                                    class="absolute h-[80%] w-[80%] object-contain"
                                >

                            </template>

                        </div>

                    </div>


                    {{-- Thumbnails --}}
                    <div class="grid grid-cols-4 gap-3">

                        <template x-for="(image, index) in images" :key="index">

                            <button
                                type="button"
                                @click="selectedImage = index"
                                class="relative aspect-square overflow-hidden rounded-2xl border-2 bg-white p-2 transition"
                                :class="selectedImage === index
                                ? 'border-primary'
                                : 'border-gray-100 hover:border-gray-300'"
                            >

                                <img
                                    :src="image"
                                    alt="تصویر محصول"
                                    class="h-full w-full object-contain"
                                >

                            </button>

                        </template>

                    </div>

                </div>


                {{-- ========================= --}}
                {{-- Product Information --}}
                {{-- ========================= --}}

                <div class="flex flex-col">

                    {{-- Category --}}
                    <a
                        href="#"
                        class="mb-3 w-fit text-sm font-medium text-primary"
                    >
                        غذای حیوانات
                    </a>


                    {{-- Product Name --}}
                    <h1 class="text-2xl font-bold leading-10 text-gray-900 sm:text-3xl lg:text-4xl">
                        غذای خشک سگ Royal Canin
                    </h1>


                    {{-- Rating --}}
                    <div class="mt-4 flex items-center gap-3">

                        <div class="flex items-center gap-1 text-amber-400">

                            @for($i = 1; $i <= 5; $i++)

                                <svg
                                    class="h-5 w-5 fill-current"
                                    viewBox="0 0 20 20"
                                >
                                    <path d="M10 1.5l2.63 5.32 5.87.85-4.25 4.14 1 5.85L10 14.9l-5.25 2.76 1-5.85L1.5 7.67l5.87-.85L10 1.5Z"/>
                                </svg>

                            @endfor

                        </div>

                        <span class="text-sm text-gray-500">
                        ۴.۸ از ۵
                    </span>

                        <span class="text-sm text-gray-400">
                        (۲۴ نظر)
                    </span>

                    </div>


                    {{-- Divider --}}
                    <div class="my-6 h-px bg-gray-100"></div>


                    {{-- Short Description --}}
                    <p class="text-sm leading-7 text-gray-600 sm:text-base">
                        غذای خشک باکیفیت و متعادل برای سگ‌ها، تهیه‌شده با ترکیبات مناسب برای تأمین انرژی و مواد مغذی مورد نیاز حیوان خانگی شما.
                    </p>


                    {{-- Price --}}
                    <div class="mt-7">

                        <div class="flex items-center gap-3">

                        <span class="text-2xl font-bold text-gray-900 sm:text-3xl">
                            ۸۹۰,۰۰۰
                        </span>

                            <span class="text-sm text-gray-500">
                            تومان
                        </span>

                        </div>

                        <div class="mt-1 text-sm text-gray-400 line-through">
                            ۱,۰۵۰,۰۰۰ تومان
                        </div>

                    </div>


                    {{-- Stock --}}
                    <div class="mt-5 flex items-center gap-2">

                        <span class="h-2.5 w-2.5 rounded-full bg-green-500"></span>

                        <span class="text-sm font-medium text-green-600">
                        موجود در انبار
                    </span>

                    </div>


                    {{-- Quantity + Cart --}}
                    <div class="mt-7 flex gap-3 flex-row">

                        {{-- Quantity --}}
                        <div class="flex h-12 items-center justify-between rounded-xl border border-gray-200 bg-white px-2 sm:w-36">

                            <button
                                type="button"
                                @click="decrease"
                                class="flex h-9 w-9 items-center justify-center rounded-lg text-gray-500 transition hover:bg-gray-100"
                            >
                                −
                            </button>

                            <span
                                x-text="quantity"
                                class="text-sm font-semibold text-gray-900"
                            ></span>

                            <button
                                type="button"
                                @click="increase"
                                class="flex h-9 w-9 items-center justify-center rounded-lg text-gray-500 transition hover:bg-gray-100"
                            >
                                +
                            </button>

                        </div>


                        {{-- Add To Cart --}}
                        <button
                            type="button"
                            class="flex h-12 flex-1 items-center justify-center gap-2 rounded-xl bg-primary px-6 text-sm font-bold text-white transition hover:opacity-90 active:scale-[0.98]"
                        >

                            <svg
                                class="h-5 w-5"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="1.8"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13 5.4 5M7 13l-2 2.5A1 1 0 0 0 6 17h11M9 21a1 1 0 1 1-2 0m10 0a1 1 0 1 1-2 0"
                                />
                            </svg>

                            افزودن به سبد خرید

                        </button>

                    </div>


                    {{-- Features --}}
                    <div class="mt-8 grid grid-cols-2 gap-3">

                        <div class="rounded-xl border border-gray-100 bg-white p-4">
                            <div class="mb-2 text-primary">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 12h13m0 0-4-4m4 4-4 4M16 5h2a3 3 0 0 1 3 3v8a3 3 0 0 1-3 3h-2"/>
                                </svg>
                            </div>

                            <p class="text-xs font-semibold text-gray-900">
                                ارسال سریع
                            </p>

                            <p class="mt-1 text-xs text-gray-500">
                                ارسال به سراسر کشور
                            </p>
                        </div>


                        <div class="rounded-xl border border-gray-100 bg-white p-4">
                            <div class="mb-2 text-primary">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M12 3l7 4v5c0 4.5-3 7.5-7 9-4-1.5-7-4.5-7-9V7l7-4Z"/>
                                </svg>
                            </div>

                            <p class="text-xs font-semibold text-gray-900">
                                تضمین کیفیت
                            </p>

                            <p class="mt-1 text-xs text-gray-500">
                                محصولات باکیفیت
                            </p>
                        </div>

                    </div>

                </div>

            </div>

        </section>


        {{-- ========================= --}}
        {{-- Product Details --}}
        {{-- ========================= --}}

        <section class="border-t border-gray-100 bg-white">

            <div class="mx-auto max-w-7xl px-4 py-12 sm:px-6 lg:px-8">

                <div class="grid grid-cols-1 gap-10 lg:grid-cols-3">

                    {{-- Description --}}
                    <div class="lg:col-span-2">

                        <h2 class="text-xl font-bold text-gray-900">
                            توضیحات محصول
                        </h2>

                        <p class="mt-5 text-sm leading-8 text-gray-600 sm:text-base">
                            این محصول با هدف تأمین نیازهای تغذیه‌ای حیوان خانگی شما طراحی شده است.
                            ترکیبات باکیفیت آن می‌تواند به تأمین انرژی روزانه و حفظ سلامت عمومی حیوان کمک کند.
                            برای انتخاب غذای مناسب، همیشه سن، وزن، نژاد و شرایط حیوان خود را در نظر بگیرید.
                        </p>

                    </div>


                    {{-- Specifications --}}
                    <div>

                        <h2 class="text-xl font-bold text-gray-900">
                            مشخصات
                        </h2>

                        <div class="mt-5 divide-y divide-gray-100 rounded-2xl border border-gray-100">

                            <div class="flex items-center justify-between px-4 py-3 text-sm">
                                <span class="text-gray-500">برند</span>
                                <span class="font-medium text-gray-900">Royal Canin</span>
                            </div>

                            <div class="flex items-center justify-between px-4 py-3 text-sm">
                                <span class="text-gray-500">نوع حیوان</span>
                                <span class="font-medium text-gray-900">سگ</span>
                            </div>

                            <div class="flex items-center justify-between px-4 py-3 text-sm">
                                <span class="text-gray-500">وزن</span>
                                <span class="font-medium text-gray-900">۲ کیلوگرم</span>
                            </div>

                            <div class="flex items-center justify-between px-4 py-3 text-sm">
                                <span class="text-gray-500">کشور سازنده</span>
                                <span class="font-medium text-gray-900">فرانسه</span>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

    </div>

</x-layouts.app>
