<x-auth-layout title="Login">
    <div class="flex flex-col md:flex-row">
        <div class="hidden md:block md:h-auto md:w-1/2 relative">
            <div class="absolute z-[2] inset-0 bg-blue-800/70">
            </div>
            <img class="object-cover w-full h-full" src="{{ asset('img/conference2.jpg') }}" alt="img">
        </div>
        <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
            <form method="POST" action="{{ route('login') }}" class="w-full">
                <div class="flex justify-center mb-4">
                    <a href="{{ route('home') }}" class="flex-shrink-0 flex items-center">
                        <x-logo class="h-12 w-auto text-gray-800"></x-logo>
                    </a>
                </div>
                <h1 class="mb-4 text-xl font-bold text-center text-gray-700 uppercase">
                    Adminstrator Login
                </h1>

                @if (session('auth-error'))
                    <div class="mb-4 w-full text-sm px-4 py-2 bg-red-100 rounded-lg text-red-500">
                        session('auth-error')
                    </div>
                @endif

                @csrf

                <x-input-group id="email" placeholder="Email" class="@error('email') text-red @enderror" type="email"
                    name="email" :value="old('email')" required autofocus>
                    <x-slot name="icon">
                        <svg class="w-6 h-6 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg>
                    </x-slot>
                </x-input-group>

                <x-input-password name="password" placeholder="Password"></x-input-password>

                <button
                    class="block w-full px-4 py-3 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-lg active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue"
                    type="submit">
                    LOGIN
                </button>

                <div class="mt-4 text-center">
                    @if (Route::has('password.request'))
                        <p class="text-sm">
                            <a href="{{ route('password.request') }}" class="text-blue-600 hover:underline">
                                {{ __('Forgot your password?') }}</a>
                        </p>
                    @endif
                </div>
            </form>
        </div>
    </div>
</x-auth-layout>
