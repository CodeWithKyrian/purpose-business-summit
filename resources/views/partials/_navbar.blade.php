<nav class="fixed inset-x-0 z-50" x-data="{ open: false, atTop: true }"
    :class="{ 'bg-white/80 hover:bg-white shadow-md' : !atTop|open}"
    @scroll.window="atTop = (window.pageYOffset > 200) ? false : true"
    @load.window="atTop = (window.pageYOffset > 200) ? false : true">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">
            <div class="flex-1 flex items-center justify-between">
                <a href="{{ route('home') }}" class="flex-shrink-0 flex items-center">
                    <x-logo class="h-12 w-auto text-white" alpine-class="{ 'text-black' : !atTop|open}"></x-logo>
                </a>
                <div class="hidden sm:block sm:ml-6">
                    <div class="flex space-x-4">
                        <x-nav-link route="home">Home</x-nav-link>
                        <a href="#about" @click="window.location.hash=' '" :class="{'!text-white' : atTop&&!open}"
                            class="inline-flex items-center px-1 pt-1  text-sm font-medium leading-5 text-gray-500 hover:text-gray-800 focus:outline-none focus:text-gray-700 transition duration-150 ease-in-out uppercase">
                            About
                        </a>
                        <a href="#ticket" :class="{'!text-white' : atTop&&!open}"
                            class="inline-flex items-center px-1 pt-1  text-sm font-medium leading-5 text-gray-500 hover:text-gray-800 focus:outline-none focus:text-gray-700 transition duration-150 ease-in-out uppercase">
                            Get Ticket
                        </a>
                        <a href="#contact" @click="window.location.hash=' '" :class="{'!text-white' : atTop&&!open}"
                            class="inline-flex items-center px-1 pt-1  text-sm font-medium leading-5 text-gray-500 hover:text-gray-800 focus:outline-none focus:text-gray-700 transition duration-150 ease-in-out uppercase">
                            Contact Us
                        </a>
                    </div>
                </div>
                <div class="flex items-center sm:hidden">
                    <button type="button" @click="open = !open"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-100 hover:text-blue-600"
                        :class="{ '!text-gray-700' : !atTop|open}" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <!-- Heroicon name: outline/menu -->
                        <svg class="w-6 h-6" fill="none" :class="{'hidden': open, 'block': !open }"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                        <!-- Heroicon name: outline/x -->
                        <svg x-cloak class="h-6 w-6" :class="{'block': open, 'hidden': !open }"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden" x-show="open" x-cloak x-transition:enter="transition ease-out duration-500"
        x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-400" x-transition:leave-start="transform opacity-100 scale-100"
        x-transition:leave-end="transform opacity-0 scale-95" id="mobile-menu" @click.away="open = false">
        <div class="px-2 pt-2 pb-3 flex justify-around">
            <x-nav-link route="home" class="block text-white">Home</x-nav-link>
            <a href="#about" :class="{'!text-white' : atTop&&!open}"
                class="block items-center px-1 pt-1  text-sm font-medium leading-5 text-gray-500 hover:text-gray-800 focus:outline-none focus:text-gray-700 transition duration-150 ease-in-out uppercase">
                About
            </a>
            <a href="#ticket" onclick="history.replaceState({}, document.title, ".");" :class="{'!text-white' : atTop&&!open}"
                class="block items-center px-1 pt-1  text-sm font-medium leading-5 text-gray-500 hover:text-gray-800 focus:outline-none focus:text-gray-700 transition duration-150 ease-in-out uppercase">
                Get Ticket
            </a>
            <a href="#contact" :class="{'!text-white' : atTop&&!open}"
                class="block items-center px-1 pt-1  text-sm font-medium leading-5 text-gray-500 hover:text-gray-800 focus:outline-none focus:text-gray-700 transition duration-150 ease-in-out uppercase">
                Contact Us
            </a>
        </div>
    </div>
</nav>
