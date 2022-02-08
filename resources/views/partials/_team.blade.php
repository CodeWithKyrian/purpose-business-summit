@php
$volunteers = [
    ['name' => 'Okeke Makuochukwu', 'url' => asset('img/team/okeke-makuo.jpg'), 'title' => 'Convener/Graphics Team Lead'],
    ['name' => 'Bosah Precious', 'url' => asset('img/team/bosah-precious.jpg'), 'title' => 'Publicity Team Lead'],
    ['name' => 'Kyrian Obikwelu', 'url' => asset('img/team/obikwelu-kyrian.jpg'), 'title' => 'Web Development Team Lead'],
    ['name' => 'Nnanna Chidiebere', 'url' => asset('img/team/nnanna-chidiebere.jpg'), 'title' => 'Welfare Team Lead'],
    ['name' => 'Excel Nwachukwu', 'url' => asset('img/team/excel-nwachukwu.jpg'), 'title' => 'Welfare Team Lead'],
    ['name' => 'Nnajiofo Stephen', 'url' => asset('img/team/nnajofor-stephen.jpg'), 'title' => 'Sponsorship Team Lead'],
    ['name' => 'Miracle Obiajunwa', 'url' => asset('img/team/miracle-obiajunwa.jpg'), 'title' => 'Content Team Lead'],
    ['name' => 'Maduforo Victor', 'url' => asset('img/team/maduforo-victor.jpg'), 'title' => 'Copywriting Team Lead'],
    ['name' => 'Nkwocha Joy', 'url' => asset('img/team/nkwocha-joy.jpg'), 'title' => 'Curation Team Lead'],
    ['name' => 'Ochuba Cyril', 'url' => asset('img/team/ochuba-cyril-ed.jpg'), 'title' => 'Logistics Team Lead'],
    ['name' => 'Chimmuanya Joshua', 'url' => asset('img/team/chimmuanya-joshua.jpg'), 'title' => 'Marketing Team Lead'],
    ];
    
@endphp
<section class="">
    <div class=" px-5 py-8 mx-auto text-center">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Meet the Team</h1>
        <div class="flex w-full h-full items-center justify-center">
            <div class="swiper-container relative overflow-hidden pt-4 pb-12 w-full" id="swiper-one">
                <div class="swiper-wrapper">
                    @foreach ($volunteers as $volunteer)
                        <div class="swiper-slide border rounded-lg">
                            <div class="rounded overflow-hidden shadow">
                                <img class="w-full relative z-[-1]" src="{{ $volunteer['url'] }}" alt="Rver">
                                <div class="px-4 py-8 rounded-t-2xl -mt-4 bg-white relative">
                                    <div class="absolute top-2 inset-x-0 flex justify-center">
                                        <div class="h-0.5 w-1/4 bg-gray-400 rounded-full"></div>
                                    </div>
                                    <div class="font-semibold text-gray-800 text-xl pt-4 pb-1">{{ $volunteer['name'] }}
                                    </div>
                                    <p class="text-gray-600 text-sm uppercase pb-6">{{ $volunteer['title'] }}</p>
                                    {{-- <div class="flex justify-around">
                                        <a href="https://instagram.com" target="_blank"
                                            class="text-gray-700 hover:text-blue-700 hover:scale-105">
                                            <svg viewBox="0 0 169.06 169.06" class="w-4 h-4" fill="currentColor">
                                                <path
                                                    d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752   c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407   c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752   c17.455,0,31.656,14.201,31.656,31.655V122.407z" />
                                                <path
                                                    d="m84.531 40.97c-24.021 0-43.563 19.542-43.563 43.563 0 24.02 19.542 43.561 43.563 43.561s43.563-19.541 43.563-43.561c0-24.021-19.542-43.563-43.563-43.563zm0 72.123c-15.749 0-28.563-12.812-28.563-28.561 0-15.75 12.813-28.563 28.563-28.563s28.563 12.813 28.563 28.563c0 15.749-12.814 28.561-28.563 28.561z" />
                                                <path
                                                    d="m129.92 28.251c-2.89 0-5.729 1.17-7.77 3.22-2.051 2.04-3.23 4.88-3.23 7.78 0 2.891 1.18 5.73 3.23 7.78 2.04 2.04 4.88 3.22 7.77 3.22 2.9 0 5.73-1.18 7.78-3.22 2.05-2.05 3.22-4.89 3.22-7.78 0-2.9-1.17-5.74-3.22-7.78-2.04-2.05-4.88-3.22-7.78-3.22z" />
                                            </svg>
                                        </a>
                                        <a href="https://linkedin.com" target="_blank">
                                            <svg viewBox="0 0 310 310" class="w-4 h-4" fill="currentColor">
                                                <path id="XMLID_802_"
                                                    d="m72.16 99.73h-62.233c-2.762 0-5 2.239-5 5v199.93c0 2.762 2.238 5 5 5h62.233c2.762 0 5-2.238 5-5v-199.93c0-2.761-2.238-5-5-5z" />
                                                <path id="XMLID_803_"
                                                    d="M41.066,0.341C18.422,0.341,0,18.743,0,41.362C0,63.991,18.422,82.4,41.066,82.4   c22.626,0,41.033-18.41,41.033-41.038C82.1,18.743,63.692,0.341,41.066,0.341z" />
                                                <path id="XMLID_804_"
                                                    d="m230.45 94.761c-24.995 0-43.472 10.745-54.679 22.954v-12.985c0-2.761-2.238-5-5-5h-59.599c-2.762 0-5 2.239-5 5v199.93c0 2.762 2.238 5 5 5h62.097c2.762 0 5-2.238 5-5v-98.918c0-33.333 9.054-46.319 32.29-46.319 25.306 0 27.317 20.818 27.317 48.034v97.204c0 2.762 2.238 5 5 5h62.12c2.762 0 5-2.238 5-5v-109.66c0-49.565-9.451-100.23-79.546-100.23z" />
                                            </svg>
                                        </a>
                                        <a href="https://facebook.com" target="_blank">
                                            <svg viewBox="0 0 310 310" class="w-4 h-4" fill="currentColor">
                                                <path
                                                    d="m81.703 165.11h33.981v139.89c0 2.762 2.238 5 5 5h57.616c2.762 0 5-2.238 5-5v-139.24h39.064c2.54 0 4.677-1.906 4.967-4.429l5.933-51.502c0.163-1.417-0.286-2.836-1.234-3.899-0.949-1.064-2.307-1.673-3.732-1.673h-44.996v-32.284c0-9.732 5.24-14.667 15.576-14.667h29.42c2.762 0 5-2.239 5-5v-47.274c0-2.762-2.238-5-5-5h-40.545c-0.286-0.014-0.921-0.037-1.857-0.037-7.035 0-31.488 1.381-50.804 19.151-21.402 19.692-18.427 43.27-17.716 47.358v37.752h-35.673c-2.762 0-5 2.238-5 5v50.844c0 2.762 2.238 5.001 5 5.001z" />
                                            </svg>
                                        </a>
                                        <a href="tel:+2340000000000">
                                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M17.924 2.617a.997.997 0 00-.215-.322l-.004-.004A.997.997 0 0017 2h-4a1 1 0 100 2h1.586l-3.293 3.293a1 1 0 001.414 1.414L16 5.414V7a1 1 0 102 0V3a.997.997 0 00-.076-.383z">
                                                </path>
                                                <path
                                                    d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z">
                                                </path>
                                            </svg>
                                        </a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev "></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </div>
</section>

<style>
    .swiper-button-next,
    .swiper-button-prev {
        top: auto;
        bottom: 4px;
        border-width: 1px;
        color: rgba(107, 114, 128);
        width: 2.5rem;
        height: 2.2rem;
        border-radius: 5px;
        --tw-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: white;
    }

    .swiper-button-next::after,
    .swiper-button-prev::after {
        font-size: 1.2rem;
    }

</style>
