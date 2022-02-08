<!DOCTYPE html>
<html lang="en">

<head>
    {{ seo()->render() }}

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="font-sans">
    <div class="flex items-center min-h-screen bg-gray-100">
        <div class="flex-1 h-full max-w-4xl px-6 mx-auto ">
            <div class="mb-4">
                <form action="{{ route('search') }}" method="GET">
                    <div
                        class="flex w-full items-center bg-white border rounded-md shadow-md focus:border-blue-100 overflow-hidden py-2 px-4 @error('tcode') border-red-400 @enderror">
                        <input name="tcode"
                            class="bg-transparent w-full text-lg focus:ring-0 outline-none focus:outline-none focus:border-0 border-0"
                            placeholder="Enter Ticket Code" />
                        @error('tcode')
                            <svg class="h-6 w-6 m-2 fill-current text-red-500" viewBox="0 0 295.43 295.43"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="m147.71 0c-81.45 0-147.71 66.264-147.71 147.71s66.264 147.71 147.71 147.71 147.71-66.264 147.71-147.71-66.264-147.71-147.71-147.71zm0 265.43c-64.907 0-117.71-52.807-117.71-117.71s52.807-117.71 117.71-117.71 117.71 52.807 117.71 117.71-52.807 117.71-117.71 117.71z" />
                                <path
                                    d="m147.71 61.68c-8.284 0-15 6.716-15 15v79c0 8.284 6.716 15 15 15s15-6.716 15-15v-79c0-8.284-6.716-15-15-15z" />
                                <circle cx="147.71" cy="217.68" r="15" />
                            </svg>
                        @enderror
                        <button type="submit" class="bg-transparent border-0  px-4 py-3">
                            <span class="block w-5">
                                <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M495 466.2L377.2 348.4c29.2-35.6 46.8-81.2 46.8-130.9C424 103.5 331.5 11 217.5 11 103.4 11 11 103.5 11 217.5S103.4 424 217.5 424c49.7 0 95.2-17.5 130.8-46.7L466.1 495c8 8 20.9 8 28.9 0 8-7.9 8-20.9 0-28.8zm-277.5-83.3C126.2 382.9 52 308.7 52 217.5S126.2 52 217.5 52C308.7 52 383 126.3 383 217.5s-74.3 165.4-165.5 165.4z" />
                                </svg>
                            </span>
                        </button>
                    </div>
                    @error('tcode')
                        <div class="flex items-center text-xl font-bold text-red-500 md:text-2xl mt-4">
                            <svg class="w-8 h-9 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            {{ $message }}
                        </div>
                    @enderror
                </form>
            </div>
            @if (request()->has('tcode'))
                <div class="flex items-center text-xl font-bold text-gray-700 md:text-2xl">
                    <svg class="w-8 h-8 mr-2 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z">
                        </path>
                    </svg>
                    Ticket code is valid
                </div>
                @php
                    $backgroundColors = match ($user->ticket_id) { 1 => 'bg-gradient-to-b from-blue-800 to-blue-900',  2 => 'bg-gradient-to-b from-green-600 to-green-700',  3 => 'bg-gradient-to-b from-red-700 to-red-800',  default => 'bg-gray-600' };
                @endphp
                <!-- component -->
                <div class="max-w-sm bg-white shadow-lg rounded-lg overflow-hidden my-4">
                    <div class="flex justify-center px-6 py-3 {{ $backgroundColors }}">
                        <h1 class="text-white font-semibold text-lg uppercase">{{ $user->ticket->name }} Plan</h1>
                    </div>
                    <div class="py-4 px-6">
                        <h1 class="text-2xl font-semibold text-gray-800 capitalize">{{ $user->fullname }}</h1>
                        <div class="flex items-center mt-4 text-gray-700">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M17.924 2.617a.997.997 0 00-.215-.322l-.004-.004A.997.997 0 0017 2h-4a1 1 0 100 2h1.586l-3.293 3.293a1 1 0 001.414 1.414L16 5.414V7a1 1 0 102 0V3a.997.997 0 00-.076-.383z">
                                </path>
                                <path
                                    d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z">
                                </path>
                            </svg>
                            <h1 class="px-2 text-sm">+234 907 4565 3454</h1>
                        </div>
                        <div class="flex items-center mt-4 text-gray-700">
                            <svg class="h-6 w-6 fill-current" viewBox="0 0 512 512">
                                <path
                                    d="M437.332 80H74.668C51.199 80 32 99.198 32 122.667v266.666C32 412.802 51.199 432 74.668 432h362.664C460.801 432 480 412.802 480 389.333V122.667C480 99.198 460.801 80 437.332 80zM432 170.667L256 288 80 170.667V128l176 117.333L432 128v42.667z" />
                            </svg>
                            <h1 class="px-2 text-sm">{{ $user->email }}</h1>
                        </div>
                    </div>
                </div>
            @endif
        </div>

    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
