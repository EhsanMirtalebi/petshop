<section
    x-data="{
        active: 0,
        startX: 0,
        endX: 0,
        timer: null,

        slides: [
            {
                badge: 'محصولات جدید',
                title: 'بهترین‌ها برای دوست کوچولوی شما',
                description: 'غذا، لوازم و محصولات باکیفیت برای حیوان خانگی شما.',
                button: 'مشاهده محصولات',
                image: '{{ asset('images/carousel/pet-1.png') }}'
            },
            {
                badge: 'تخفیف ویژه',
                title: 'برای حیوان خانگی‌ات بیشتر خرج نکن!',
                description: 'محصولات منتخب را با قیمت ویژه تهیه کن.',
                button: 'مشاهده تخفیف‌ها',
                image: '{{ asset('images/carousel/pet-2.png') }}'
            },
            {
                badge: 'سلامت و مراقبت',
                title: 'سلامت حیوانت از همین‌جا شروع میشه',
                description: 'محصولات مناسب برای مراقبت بهتر از حیوان خانگی.',
                button: 'مشاهده محصولات',
                image: '{{ asset('images/carousel/pet-3.png') }}'
            }
        ],

        startAutoPlay() {
            clearInterval(this.timer)

            this.timer = setInterval(() => {
                this.active = (this.active + 1) % this.slides.length
            }, 6000)
        },

        goTo(index) {
            this.active = index
            this.startAutoPlay()
        },

        prev() {
            this.active = (this.active + 1) % this.slides.length
            this.startAutoPlay()
        },

        next() {
            this.active = (this.active - 1 + this.slides.length) % this.slides.length
            this.startAutoPlay()
        },

        touchStart(event) {
            this.startX = event.touches[0].clientX
        },

        touchEnd(event) {
            this.endX = event.changedTouches[0].clientX

            const distance = this.startX - this.endX

            if (Math.abs(distance) < 50) {
                return
            }

            if (distance > 0) {
                this.next()
            } else {
                this.prev()
            }
        }
    }"
    x-init="startAutoPlay()"
    class="w-full"
>

    <div class="mx-auto max-w-7xl">

        {{-- =====================================================
            CAROUSEL
        ====================================================== --}}
        <div
            class="relative aspect-[8/3] w-full overflow-hidden rounded-2xl bg-primary sm:rounded-3xl"
            @touchstart="touchStart($event)"
            @touchend="touchEnd($event)"
            style="touch-action: pan-y;"
        >

            {{-- =====================================================
                SLIDES
            ====================================================== --}}
            <template
                x-for="(slide, index) in slides"
                :key="index"
            >

                <article
                    x-show="active === index"
                    x-transition:enter="transition ease-out duration-500"
                    x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100"
                    x-transition:leave="transition ease-in duration-300"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                    class="absolute inset-0"
                >

                    <div class="flex h-full flex-row-reverse">

                        {{-- =================================================
                            IMAGE
                        ================================================== --}}
                        <div class="relative h-full w-[42%] shrink-0">

                            {{-- Outer circle --}}
                            <div
                                class="absolute right-1/2 top-1/2 aspect-square w-[75%] translate-x-1/2 -translate-y-1/2 rounded-full bg-white/10"
                            ></div>

                            {{-- Inner circle --}}
                            <div
                                class="absolute right-1/2 top-1/2 aspect-square w-[55%] translate-x-1/2 -translate-y-1/2 rounded-full bg-white/10"
                            ></div>

                            {{-- Pet --}}
                            <img
                                :src="slide.image"
                                :alt="slide.title"
                                class="absolute inset-0 z-10 h-full w-full object-contain p-[3%]"
                            />

                        </div>


                        {{-- =================================================
                            CONTENT
                        ================================================== --}}
                        <div
                            class="relative z-20 flex min-w-0 flex-1 flex-col justify-center px-[5%] pb-[7%] text-white"
                        >

                            {{-- Badge --}}
                            <div class="mb-[2%]">

                                <span
                                    class="inline-flex items-center gap-1.5 rounded-full bg-white/15 px-2 py-1 text-[7px] font-medium backdrop-blur-sm sm:gap-2 sm:px-3 sm:py-1.5 sm:text-[10px] lg:px-4 lg:py-2 lg:text-xs"
                                >

                                    <span
                                        class="h-1.5 w-1.5 rounded-full bg-white sm:h-2 sm:w-2"
                                    ></span>

                                    <span x-text="slide.badge"></span>

                                </span>

                            </div>


                            {{-- Title --}}
                            <h2
                                x-text="slide.title"
                                class="max-w-[95%] text-lg font-bold leading-[1.45] tracking-tight sm:text-lg md:text-2xl lg:max-w-xl lg:text-4xl xl:text-5xl"
                            ></h2>


                            {{-- Description --}}
                            <p
                                x-text="slide.description"
                                class="mt-[1.5%] line-clamp-2 max-w-[90%] text-[10px] leading-[1.7] text-white/80 sm:text-xs md:text-sm lg:max-w-lg lg:text-base"
                            ></p>


                            {{-- Button --}}
                            <div class="mt-[6%] hidden sm:flex">

                                <a
                                    href="#"
                                    class="inline-flex items-center gap-1 rounded-md bg-white px-2 py-1.5 text-[7px] font-bold text-neutral-900 shadow-lg transition hover:-translate-y-0.5 hover:shadow-xl sm:gap-1.5 sm:rounded-lg sm:px-3 sm:py-2 sm:text-[10px] lg:gap-2 lg:rounded-xl lg:px-5 lg:py-3 lg:text-sm"
                                >

                                    <span x-text="slide.button"></span>

                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-2.5 w-2.5 sm:h-3 sm:w-3 lg:h-4 lg:w-4"
                                        fill="none"
                                        viewBox="0 0 24 24"
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

                        </div>

                    </div>

                </article>

            </template>


            {{-- =====================================================
                CONTROLS
            ====================================================== --}}
            <div
                class="absolute bottom-[5%] left-[4%] right-[4%] z-30 flex items-center justify-between"
            >

                {{-- Dots --}}
                <div class="flex items-center gap-1 sm:gap-1.5 lg:gap-2">

                    <template
                        x-for="(slide, index) in slides"
                        :key="'dot-' + index"
                    >

                        <button
                            type="button"
                            @click="goTo(index)"
                            class="h-1 rounded-full transition-all duration-300 sm:h-1.5 lg:h-2"
                            :class="
                                active === index
                                    ? 'w-5 bg-white sm:w-6 lg:w-7'
                                    : 'w-1 bg-white/40 hover:bg-white/70 sm:w-1.5 lg:w-2'
                            "
                            :aria-label="'اسلاید ' + (index + 1)"
                        ></button>

                    </template>

                </div>


                {{-- Arrows --}}
                <div class="hidden sm:flex items-center gap-1 sm:gap-1.5 lg:gap-2">

                    <button
                        type="button"
                        @click="next()"
                        class="flex h-6 w-6 items-center justify-center rounded-md bg-white/10 text-white backdrop-blur-sm transition hover:bg-white/20 sm:h-8 sm:w-8 lg:h-10 lg:w-10 lg:rounded-xl"
                        aria-label="اسلاید بعدی"
                    >

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-3 w-3 sm:h-4 sm:w-4 lg:h-5 lg:w-5"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="m9 18 6-6-6-6"
                            />
                        </svg>

                    </button>

                    <button
                        type="button"
                        @click="prev()"
                        class="flex h-6 w-6 items-center justify-center rounded-md bg-white/10 text-white backdrop-blur-sm transition hover:bg-white/20 sm:h-8 sm:w-8 lg:h-10 lg:w-10 lg:rounded-xl"
                        aria-label="اسلاید قبلی"
                    >

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-3 w-3 sm:h-4 sm:w-4 lg:h-5 lg:w-5"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M15 19l-7-7 7-7"
                            />
                        </svg>

                    </button>

                </div>

            </div>

        </div>

    </div>

</section>
