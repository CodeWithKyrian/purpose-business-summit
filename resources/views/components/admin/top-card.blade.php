@props(['title', 'subtitle'])
<div class="relative bg-gray-200 p-4 sm:p-6 rounded-sm overflow-hidden mb-8">
    <div class="absolute right-0 top-0 -mt-4 mr-16 pointer-events-none hidden xl:block" aria-hidden="true">
        <svg width="319" height="198" xmlns:xlink="http://www.w3.org/1999/xlink">
            <defs>
                <path id="welcome-a" d="M64 0l64 128-64-20-64 20z"></path>
                <path id="welcome-e" d="M40 0l40 80-40-12.5L0 80z"></path>
                <path id="welcome-g" d="M40 0l40 80-40-12.5L0 80z"></path>
                <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="welcome-b">
                    <stop stop-color="#D4D4D8" offset="0%"></stop>
                    <stop stop-color="#71717A" offset="100%"></stop>
                </linearGradient>
                <linearGradient x1="50%" y1="24.537%" x2="50%" y2="100%" id="welcome-c">
                    <stop stop-color="#3F3F46" offset="0%"></stop>
                    <stop stop-color="#52525B" stop-opacity="0" offset="100%"></stop>
                </linearGradient>
            </defs>
            <g fill="none" fill-rule="evenodd">
                <g transform="rotate(64 36.592 105.604)">
                    <mask id="welcome-d" fill="#fff">
                        <use xlink:href="#welcome-a"></use>
                    </mask>
                    <use fill="url(#welcome-b)" xlink:href="#welcome-a"></use>
                    <path fill="url(#welcome-c)" mask="url(#welcome-d)" d="M64-24h80v152H64z"></path>
                </g>
                <g transform="rotate(-51 91.324 -105.372)">
                    <mask id="welcome-f" fill="#fff">
                        <use xlink:href="#welcome-e"></use>
                    </mask>
                    <use fill="url(#welcome-b)" xlink:href="#welcome-e"></use>
                    <path fill="url(#welcome-c)" mask="url(#welcome-f)" d="M40.333-15.147h50v95h-50z"></path>
                </g>
                <g transform="rotate(44 61.546 392.623)">
                    <mask id="welcome-h" fill="#fff">
                        <use xlink:href="#welcome-g"></use>
                    </mask>
                    <use fill="url(#welcome-b)" xlink:href="#welcome-g"></use>
                    <path fill="url(#welcome-c)" mask="url(#welcome-h)" d="M40.333-15.147h50v95h-50z"></path>
                </g>
            </g>
        </svg>
    </div>
    <div class="relative">
        <h1 class="text-2xl md:text-3xl text-gray-800 font-bold mb-1">{{$title}}</h1>
        <p>{{$subtitle}}</p>
    </div>
</div>