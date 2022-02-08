<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forgot Password</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="font-sans">
    <div class="flex items-center min-h-screen bg-gray-100">
        <div class="flex-1 h-full max-w-lg mx-auto md:bg-white rounded-lg md:shadow-xl">
            <div class="flex">
                <div class="flex items-center justify-center p-6 sm:p-12 w-full">
                    <form method="POST" action="{{ route('password.email') }}" class="w-full">
                        <div class="flex justify-center mb-4">
                            <a href="{{ route('home') }}" class="flex-shrink-0 flex items-center">
                                <x-logo class="h-12 w-auto text-gray-800"></x-logo>
                            </a>
                        </div>
                        <h1 class="mb-4 text-xl font-bold text-center text-gray-700">
                            Forgot Password
                        </h1>

                        @csrf

                        <x-input-group id="email" placeholder="Email" class="@error('email') text-red @enderror"
                            type="email" name="email" :value="old('email')" required autofocus>
                            <x-slot name="icon">
                                <svg class="w-6 h-6 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </x-slot>
                        </x-input-group>

                        <div class="flex justify-center">
                            <button
                                class="inline-block px-6 py-3 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-lg active:bg-blue-600 hover:bg-blue-700 uppercase focus:outline-none focus:shadow-outline-blue"
                                type="submit">
                                {{ __('Email Password Reset Link') }}
                            </button>
                        </div>


                        <div class="mt-4 text-center">
                            <p class="text-sm">
                                <a href="{{ route('login') }}" class="text-blue-600 hover:underline">
                                    {{ __('Back to Login') }}</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
