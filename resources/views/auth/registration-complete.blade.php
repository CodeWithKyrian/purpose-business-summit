<x-auth-layout title="Registration Complete">
    <div class="flex">
        <div class=" p-6 sm:p-12 w-full">
            <p>Your have successfully registered to be a volunteer on PBS. Please wait while your account is being
                approved by the admin before attempting to login.</p>
            <div class="flex justify-center">
                <a href="{{ route('login') }}"
                    class="inline-block px-6 py-3 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-lg active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue">
                    LOGIN
                </a>
            </div>

        </div>
    </div>
</x-auth-layout>
