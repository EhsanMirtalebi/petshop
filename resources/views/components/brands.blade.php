<section class="bg-white sm:py-6">
    <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">

        {{-- Header --}}
        <div class="mb-6 flex items-end justify-between sm:mb-8">

            {{-- Title --}}
            <div>
                <span class="mb-1 block text-xs font-semibold text-orange-500 sm:text-sm">
                    برندهای معتبر و محبوب
                </span>

                <h2 class="text-xl font-bold text-slate-800 sm:text-2xl lg:text-3xl">
                    برترین برندهای پت شاپ
                </h2>

                <p class="mt-2 hidden max-w-xl text-sm leading-7 text-slate-500 sm:block">
                    با افتخار محصولات برندهای معتبر و باکیفیت را برای سلامت و شادی
                    دوستان کوچک شما فراهم می‌کنیم.
                </p>
            </div>

            {{-- See all --}}
            <a
                href="#"
                class="flex shrink-0 items-center gap-1 text-xs font-semibold
                       text-orange-500 transition hover:text-orange-600
                       sm:gap-2 sm:text-sm"
            >
                <span>مشاهده همه</span>

                <svg
                    class="h-4 w-4 sm:h-5 sm:w-5"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M15 19l-7-7 7-7"
                    />
                </svg>
            </a>

        </div>


        {{-- Brands --}}
        <div
            class="flex items-center gap-4 overflow-x-auto pb-2
                   scrollbar-none
                   sm:gap-6
                   lg:justify-between lg:gap-0 lg:overflow-visible"
        >

            {{-- Royal Canin --}}
            <a
                href="#"
                class="group flex aspect-square
                       h-24 w-24 shrink-0
                       items-center justify-center
                       rounded-full bg-[#FFF0F2]
                       transition duration-300
                       hover:-translate-y-1 hover:shadow-lg
                       sm:h-[120px] sm:w-[120px]
                       lg:h-[140px] lg:w-[140px]"
            >
                <div
                    class="flex h-[58%] w-[58%]
                           items-center justify-center"
                >
                    <img
                        src="{{ asset('images/brands/brand-1.png') }}"
                        alt="Royal Canin"
                        class="h-full w-full object-contain
                               transition duration-300
                               group-hover:scale-105"
                    >
                </div>
            </a>


            {{-- Hill's --}}
            <a
                href="#"
                class="group flex aspect-square
                       h-24 w-24 shrink-0
                       items-center justify-center
                       rounded-full bg-[#FFF8E9]
                       transition duration-300
                       hover:-translate-y-1 hover:shadow-lg
                       sm:h-[120px] sm:w-[120px]
                       lg:h-[140px] lg:w-[140px]"
            >
                <div
                    class="flex h-[58%] w-[58%]
                           items-center justify-center"
                >
                    <img
                        src="{{ asset('images/brands/brand-2.png') }}"
                        alt="Hill's"
                        class="h-full w-full object-contain
                               transition duration-300
                               group-hover:scale-105"
                    >
                </div>
            </a>


            {{-- Purina --}}
            <a
                href="#"
                class="group flex aspect-square
                       h-24 w-24 shrink-0
                       items-center justify-center
                       rounded-full bg-[#EDF6FF]
                       transition duration-300
                       hover:-translate-y-1 hover:shadow-lg
                       sm:h-[120px] sm:w-[120px]
                       lg:h-[140px] lg:w-[140px]"
            >
                <div
                    class="flex h-[58%] w-[58%]
                           items-center justify-center"
                >
                    <img
                        src="{{ asset('images/brands/brand-3.png') }}"
                        alt="Purina"
                        class="h-full w-full object-contain
                               transition duration-300
                               group-hover:scale-105"
                    >
                </div>
            </a>


            {{-- Whiskas --}}
            <a
                href="#"
                class="group flex aspect-square
                       h-24 w-24 shrink-0
                       items-center justify-center
                       rounded-full bg-[#EEF9F2]
                       transition duration-300
                       hover:-translate-y-1 hover:shadow-lg
                       sm:h-[120px] sm:w-[120px]
                       lg:h-[140px] lg:w-[140px]"
            >
                <div
                    class="flex h-[58%] w-[58%]
                           items-center justify-center"
                >
                    <img
                        src="{{ asset('images/brands/brand-4.png') }}"
                        alt="Whiskas"
                        class="h-full w-full object-contain
                               transition duration-300
                               group-hover:scale-105"
                    >
                </div>
            </a>


            {{-- Pedigree --}}
            <a
                href="#"
                class="group flex aspect-square
                       h-24 w-24 shrink-0
                       items-center justify-center
                       rounded-full bg-[#F6EEFF]
                       transition duration-300
                       hover:-translate-y-1 hover:shadow-lg
                       sm:h-[120px] sm:w-[120px]
                       lg:h-[140px] lg:w-[140px]"
            >
                <div
                    class="flex h-[58%] w-[58%]
                           items-center justify-center"
                >
                    <img
                        src="{{ asset('images/brands/brand-5.png') }}"
                        alt="Pedigree"
                        class="h-full w-full object-contain
                               transition duration-300
                               group-hover:scale-105"
                    >
                </div>
            </a>


            {{-- Acana --}}
            <a
                href="#"
                class="group flex aspect-square
                       h-24 w-24 shrink-0
                       items-center justify-center
                       rounded-full bg-[#EEF7FF]
                       transition duration-300
                       hover:-translate-y-1 hover:shadow-lg
                       sm:h-[120px] sm:w-[120px]
                       lg:h-[140px] lg:w-[140px]"
            >
                <div
                    class="flex h-[58%] w-[58%]
                           items-center justify-center"
                >
                    <img
                        src="{{ asset('images/brands/brand-6.png') }}"
                        alt="Acana"
                        class="h-full w-full object-contain
                               transition duration-300
                               group-hover:scale-105"
                    >
                </div>
            </a>

        </div>

    </div>
</section>
