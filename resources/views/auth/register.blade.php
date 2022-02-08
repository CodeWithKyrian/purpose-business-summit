<x-auth-layout title="Volunteer Registration">
    <div class="flex">
        <div class="flex items-center justify-center p-6 sm:p-12 w-full">
            <form method="POST" action="{{ route('register') }}" class="w-full">
                <div class="flex justify-center mb-4">
                    <a href="{{ route('home') }}" class="flex-shrink-0 flex items-center">
                        <x-logo class="h-12 w-auto text-gray-800"></x-logo>
                    </a>
                </div>
                <h1 class="mb-4 text-xl font-bold text-center text-gray-700 uppercase">
                    Register a Volunteer Account
                </h1>

                @csrf

                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6">
                    <x-input-group id="firstname" placeholder="First Name"
                        class="@error('firstname') text-red @enderror" type="text" name="firstname"
                        :value="old('firstname')" required autofocus>
                        <x-slot name="icon">
                            <svg class="w-6 h-6 opacity-50" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                                </path>
                            </svg>
                        </x-slot>
                    </x-input-group>
                    <x-input-group id="lastname" placeholder="Last name"
                        class="@error('lastname') text-red @enderror" type="text" name="lastname"
                        :value="old('lastname')" required autofocus>
                        <x-slot name="icon">
                            <svg class="w-6 h-6 opacity-50" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                                </path>
                            </svg>
                        </x-slot>
                    </x-input-group>
                    <x-input-group id="email" placeholder="Email" class="@error('email') text-red @enderror"
                        type="email" name="email" :value="old('email')" required autofocus>
                        <x-slot name="icon">
                            <svg class="w-6 h-6 opacity-50" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                        </x-slot>
                    </x-input-group>
                    <x-input-group id="phone" placeholder="Phone" class="@error('phone') text-red @enderror"
                        type="text" name="phone" :value="old('phone')" required autofocus>
                        <x-slot name="icon">
                            <svg class="w-6 h-6 opacity-50" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                </path>
                            </svg>
                        </x-slot>
                    </x-input-group>

                    <x-input-password name="password" placeholder="Password"></x-input-password>
                    <x-input-password name="password_confirmation" placeholder="Confirm Password">
                    </x-input-password>
                </div>

                <div class="flex justify-center">
                    <button
                        class="inline-block px-6 py-3 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-lg active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue"
                        type="submit">
                        REGISTER
                    </button>
                </div>


                <div class="mt-4 text-center">
                    <p class="text-sm">Already a Volunteer?
                        <a href="{{ route('login') }}" class="text-blue-600 hover:underline">
                            {{ __('Login') }}</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</x-auth-layout>