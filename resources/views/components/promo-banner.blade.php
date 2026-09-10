<section class="py-6 sm:py-6">
    <div class="mx-auto max-w-7xl px-2">

        <div
            class="relative overflow-hidden rounded-2xl bg-primary sm:rounded-3xl"
        >

            {{-- Decorative Circles --}}
            <div
                class="absolute -right-16 -top-16 h-40 w-40 rounded-full bg-white/10 sm:h-56 sm:w-56"
            ></div>

            <div
                class="absolute -bottom-20 left-10 h-44 w-44 rounded-full bg-white/5 sm:h-64 sm:w-64"
            ></div>


            <div
                class="relative flex min-h-[190px] items-center justify-between gap-4 px-5 py-7 sm:min-h-[230px] sm:px-10 sm:py-10 lg:px-14"
            >

                {{-- Content --}}
                <div class="relative z-10 max-w-[65%]">

                    <span
                        class="mb-2 inline-block rounded-full bg-white/15 px-3 py-1 text-[11px] font-medium text-white sm:text-xs"
                    >
                        پیشنهاد ویژه
                    </span>

                    <h2
                        class="text-xl font-bold leading-8 text-white sm:text-3xl sm:leading-10"
                    >
                        برای دوست کوچولوی شما،
                        <br class="hidden sm:block">
                        بهترین‌ها را انتخاب کنید
                    </h2>

                    <p
                        class="mt-2 hidden max-w-lg text-sm leading-6 text-white/80 sm:block"
                    >
                        مجموعه‌ای از محصولات باکیفیت برای تغذیه،
                        سرگرمی و مراقبت از حیوان خانگی شما.
                    </p>

                    <a
                        href="#"
                        class="mt-4 inline-flex items-center gap-2 rounded-xl bg-white px-4 py-2.5 text-xs font-semibold text-primary transition duration-300 hover:-translate-y-0.5 hover:shadow-lg sm:mt-6 sm:px-5 sm:py-3 sm:text-sm"
                    >
                        مشاهده محصولات

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


                {{-- Image --}}
                <div
                    class="absolute left-1 top-1/2 flex aspect-square w-[34%] -translate-y-1/2 items-center justify-center sm:left-4 sm:w-[30%] lg:left-10 lg:w-[25%]"
                >

                    <div
                        class="absolute inset-0 rounded-full bg-white/10"
                    ></div>

                    <div
                        class="absolute inset-[12%] rounded-full bg-white/10"
                    ></div>

                    <img
                        src="{{ asset('images/promo/promo.png') }}"
                        alt="محصولات حیوانات خانگی"
                        class="relative z-10 h-[85%] w-[85%] object-contain"
                    >

                </div>

            </div>
        </div>

    </div>
</section>
