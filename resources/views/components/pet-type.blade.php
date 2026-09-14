<section class="bg-white py-4 sm:py-6 lg:py-8">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        {{-- Header --}}
        <div class="mb-4 flex items-center justify-between sm:mb-6">

            <div class="text-right">
                <h2 class="text-xl sm:text-2xl font-bold text-slate-800">
                    دوست کوچولوی شما
                </h2>
            </div>

            <a
                href="#"
                class="flex items-center gap-2 text-sm font-semibold text-orange-500 transition hover:text-orange-600"
            >
                <span>مشاهده همه</span>

                <svg
                    class="h-5 w-5"
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


        {{-- Categories --}}
        <div class="grid grid-cols-6 gap-3 sm:gap-4 lg:grid-cols-5">


            {{-- Cat --}}
            <a
                href="#"
                class="group relative col-span-2 h-[80px]
                       overflow-hidden rounded-xl bg-[#E8F3E9]
                       transition duration-300
                       hover:-translate-y-1 hover:shadow-md
                       sm:h-[105px]
                       lg:col-span-1 lg:h-[115px]"
            >

                <div class="absolute right-3 top-1/2 z-10 -translate-y-1/2
                            sm:right-4">

                    <h3 class="text-xs font-bold text-slate-800
                               sm:text-sm lg:text-base">
                        گربه‌ها
                    </h3>

                    <span class="mt-1 block text-sm text-slate-600 sm:mt-2 sm:text-lg">
                        ←
                    </span>

                </div>

                <div
                    class="absolute left-0.5 top-1/2
                       h-[50px] w-[50px]
                       -translate-y-1/2
                       sm:h-[78px] sm:w-[78px]
                       lg:h-[90px] lg:w-[90px]"
                >
                    <img
                        src="{{ asset('images/categories/pet-1.png') }}"
                        alt="گربه‌ها"
                        class="h-full w-full object-contain
                           transition duration-300
                           group-hover:scale-105"
                    >
                </div>

            </a>


            {{-- Hamster --}}
            <a
                href="#"
                class="group relative col-span-2 h-[80px]
                       overflow-hidden rounded-xl bg-[#FCE8E8]
                       transition duration-300
                       hover:-translate-y-1 hover:shadow-md
                       sm:h-[105px]
                       lg:col-span-1 lg:h-[115px]"
            >

                <div class="absolute right-3 top-1/2 z-10 -translate-y-1/2
                            sm:right-4">

                    <h3 class="text-xs font-bold text-slate-800
                               sm:text-sm lg:text-base">
                        جونده‌ها
                    </h3>

                    <span class="mt-1 block text-sm text-slate-600 sm:mt-2 sm:text-lg">
                        ←
                    </span>

                </div>

                <div
                    class="absolute left-0.5 top-1/2
                       h-[50px] w-[50px]
                       -translate-y-1/2
                       sm:h-[78px] sm:w-[78px]
                       lg:h-[90px] lg:w-[90px]"
                >
                    <img
                        src="{{ asset('images/categories/pet-2.png') }}"
                        alt="گربه‌ها"
                        class="h-full w-full object-contain
                           transition duration-300
                           group-hover:scale-105"
                    >
                </div>

            </a>


            {{-- Bird --}}
            <a
                href="#"
                class="group relative col-span-2 h-[80px]
                       overflow-hidden rounded-xl bg-[#EEE9F8]
                       transition duration-300
                       hover:-translate-y-1 hover:shadow-md
                       sm:h-[105px]
                       lg:col-span-1 lg:h-[115px]"
            >

                <div class="absolute right-3 top-1/2 z-10 -translate-y-1/2
                            sm:right-4">

                    <h3 class="text-xs font-bold text-slate-800
                               sm:text-sm lg:text-base">
                        پرندگان
                    </h3>

                    <span class="mt-1 block text-sm text-slate-600 sm:mt-2 sm:text-lg">
                        ←
                    </span>

                </div>

                <div
                    class="absolute left-0.5 top-1/2
                       h-[50px] w-[50px]
                       -translate-y-1/2
                       sm:h-[78px] sm:w-[78px]
                       lg:h-[90px] lg:w-[90px]"
                >
                    <img
                        src="{{ asset('images/categories/pet-3.png') }}"
                        alt="گربه‌ها"
                        class="h-full w-full object-contain
                           transition duration-300
                           group-hover:scale-105"
                    >
                </div>

            </a>


            {{-- Dog --}}
            <a
                href="#"
                class="group relative col-span-3 h-[80px]
                       overflow-hidden rounded-xl bg-[#E4F0FC]
                       transition duration-300
                       hover:-translate-y-1 hover:shadow-md
                       sm:h-[105px]
                       lg:col-span-1 lg:h-[115px]"
            >

                <div class="absolute right-4 top-1/2 z-10 -translate-y-1/2
                            sm:right-5">

                    <h3 class="text-xs font-bold text-slate-800
                               sm:text-sm lg:text-base">
                        سگ‌ها
                    </h3>

                    <span class="mt-1 block text-sm text-slate-600 sm:mt-2 sm:text-lg">
                        ←
                    </span>

                </div>

                <div
                    class="absolute left-0.5 top-1/2
                       h-[50px] w-[50px]
                       -translate-y-1/2
                       sm:h-[78px] sm:w-[78px]
                       lg:h-[90px] lg:w-[90px]"
                >
                    <img
                        src="{{ asset('images/categories/pet-2.png') }}"
                        alt="گربه‌ها"
                        class="h-full w-full object-contain
                           transition duration-300
                           group-hover:scale-105"
                    >
                </div>

            </a>


            {{-- Fish --}}
            <a
                href="#"
                class="group relative col-span-3 h-[80px]
                       overflow-hidden rounded-xl bg-[#FFF7D9]
                       transition duration-300
                       hover:-translate-y-1 hover:shadow-md
                       sm:h-[105px]
                       lg:col-span-1 lg:h-[115px]"
            >

                <div class="absolute right-3 top-1/2 z-10 -translate-y-1/2
                            sm:right-4">

                    <h3 class="text-xs font-bold text-slate-800
                               sm:text-sm lg:text-base">
                        ماهی‌ها
                    </h3>

                    <span class="mt-1 block text-sm text-slate-600 sm:mt-2 sm:text-lg">
                        ←
                    </span>

                </div>

                <div
                    class="absolute left-0.5 top-1/2
                       h-[50px] w-[50px]
                       -translate-y-1/2
                       sm:h-[78px] sm:w-[78px]
                       lg:h-[90px] lg:w-[90px]"
                >
                    <img
                        src="{{ asset('images/categories/pet-1.png') }}"
                        alt="گربه‌ها"
                        class="h-full w-full object-contain
                           transition duration-300
                           group-hover:scale-105"
                    >
                </div>

            </a>

        </div>

    </div>
</section>
