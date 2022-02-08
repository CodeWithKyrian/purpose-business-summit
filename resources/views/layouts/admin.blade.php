<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} | PBS</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @stack('extra-styles')
</head>

<body>
    <div>
        <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200">
            <div :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false"
                class="fixed z-20 inset-0 bg-black opacity-50 transition-opacity lg:hidden"></div>

            <div :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'"
                class="fixed z-30 inset-y-0 left-0 w-64 transition duration-300 transform bg-gray-900 overflow-y-auto lg:translate-x-0 lg:static lg:inset-0">
                <div class="flex items-center justify-center mt-8">
                    <div class="flex items-center">
                        <a href="{{ route('home') }}" class="flex-shrink-0 flex items-center">
                            <x-logo class="h-12 w-auto text-white">
                            </x-logo>
                        </a>
                    </div>
                </div>

                <nav class="mt-10">

                    <a class="flex items-center mt-4 py-2 text-sm px-6
                    {{ request()->routeIs('admin.dashboard')? 'bg-gray-700 bg-opacity-25 text-gray-100': 'text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100' }}"
                        href="{{ route('admin.dashboard') }}">
                        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" id="view-grid"
                            class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                            </path>
                        </svg>
                        <span class="mx-3">Dashboard</span>
                    </a>

                    <h3 class="text-xs uppercase text-gray-500 font-semibold pl-3 my-4">Activities</h3>

                    @can('register-tickets')
                        <a class="flex items-center mt-2 py-2 text-sm px-6  {{ request()->routeIs('admin.ticket.register')? 'bg-gray-700 bg-opacity-25 text-gray-100': 'text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100' }}"
                            href="{{ route('admin.ticket.register') }}">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>

                            <span class="mx-3">Register Tickets</span>
                        </a>
                    @endcan

                    @can('view-all-users')
                        <a class="flex items-center mt-2 py-2 text-sm px-6 {{ request()->routeIs('admin.users.list')? 'bg-gray-700 bg-opacity-25 text-gray-100': 'text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100' }}"
                            href="{{ route('admin.users.list') }}">
                            <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                </path>
                            </svg>

                            <span class="mx-3">All Users</span>
                        </a>
                    @endcan

                    @can('view-all-users')
                        <a class="flex items-center mt-2 py-2 text-sm px-6 {{ request()->routeIs('admin.volunteers.list')? 'bg-gray-700 bg-opacity-25 text-gray-100': 'text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100' }}"
                            href="{{ route('admin.volunteers.list') }}">
                            <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                </path>
                            </svg>

                            <span class="mx-3">All Volunteers</span>
                        </a>
                    @endcan

                    <a class="flex items-center mt-2 py-2 text-sm px-6
                    {{ request()->routeIs('admin.users.referrals')? 'bg-gray-700 bg-opacity-25 text-gray-100': 'text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100' }}"
                        href="{{ route('admin.users.referrals') }}">
                        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>

                        <span class="mx-3"> My Referrals</span>
                    </a>

                    {{-- <a class="flex items-center mt-2 py-2 text-sm px-6 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
                        href="javascript:void(0)">
                        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                            </path>
                        </svg>

                        <span class="mx-3">Speakers</span>
                    </a> --}}
                    @can('change-settings')

                        <h3 class="text-xs uppercase text-gray-500 font-semibold pl-3 my-4">Settings</h3>

                        <a class="flex items-center mt-2 py-2 text-sm px-6 {{ request()->routeIs('admin.')? 'bg-gray-700 bg-opacity-25 text-gray-100': 'text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100' }}"
                            href="javascript:void(0)">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>

                            <span class="mx-3">General Settings</span>
                        </a>
                        <a class="flex items-center mt-2 py-2 text-sm px-6 {{ request()->routeIs('admin.')? 'bg-gray-700 bg-opacity-25 text-gray-100': 'text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100' }}"
                            href="javascript:void(0)">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z">
                                </path>
                            </svg>

                            <span class="mx-3">Ticket Settings</span>
                        </a>
                    @endcan

                    <h3 class="text-xs uppercase text-gray-500 font-semibold pl-3 my-4">Extras</h3>

                    <a href="javascript:void(0)" onclick="document.getElementById('logout-form').submit();"
                        class="flex items-center mt-2 py-2 text-sm px-6 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                            </path>
                        </svg>

                        <span class="mx-3">Logout</span>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </nav>
            </div>
            <div class="flex-1 flex flex-col overflow-hidden">
                <header class="flex justify-between items-center py-4 px-6 bg-white border-b-4 border-blue-600">
                    <div class="flex items-center">
                        <button @click="sidebarOpen = true" class="text-gray-500 focus:outline-none lg:hidden">
                            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </button>

                        <form method="get" action="{{ route('admin.search') }}" class="relative mx-4 lg:mx-0">
                            <button type="submit" class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                <svg class="h-5 w-5 text-gray-500" viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                    </path>
                                </svg>
                            </button>

                            <input name="s"
                                class="form-input border-gray-200 w-48 sm:w-72 rounded-md pr-10 pl-4 focus:border-blue-600"
                                type="text" placeholder="Search Code">
                        </form>
                    </div>

                    <div class="flex items-center">
                        <div>
                            <a href="{{ route('admin.ticket.register') }}"
                                class="flex mx-4 text-gray-600 focus:outline-none">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z">
                                    </path>
                                </svg>
                            </a>
                        </div>

                        <div x-data="{ dropdownOpen: false }" class="relative">
                            <button @click="dropdownOpen = ! dropdownOpen"
                                class="relative block h-8 w-8 rounded-full overflow-hidden shadow focus:outline-none">
                                <img class="w-full h-full object-cover" src="{{ asset('img/avatar.svg') }}"
                                    alt="Your avatar">
                            </button>

                            <div x-show="dropdownOpen" @click="dropdownOpen = false"
                                class="fixed inset-0 h-full w-full z-10" style="display: none;"></div>

                            <div x-show="dropdownOpen"
                                class="absolute right-0 mt-2 w-48 bg-white rounded-md overflow-hidden shadow-xl z-10"
                                style="display: none;">
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-600 hover:text-white">Settings</a>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-600 hover:text-white">Profile</a>
                                <a href="/login"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-600 hover:text-white">Logout</a>
                            </div>
                        </div>
                    </div>
                </header>
                <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
                    <div class="container mx-auto px-6 py-8 min-h-screen">
                        <h3 class="text-gray-700 text-3xl font-medium">{{ $title }}</h3>

                        {{ $slot }}
                    </div>
                    <footer class="text-gray-700 bg-white body-font mt-8">
                        <div class="container px-5 py-4 mx-auto flex items-center sm:flex-row flex-col">
                            <p class="text-sm text-gray-700 sm:ml-4 sm:pl-4 sm:py-2 sm:mt-0 mt-4">© 2022
                                The Purpose Business Summit —
                                <a href="https://twitter.com/CodeWithKyrian" class="text-gray-800 ml-1" target="_blank"
                                    rel="noopener noreferrer">@CodeWithKyrian</a>
                            </p>
                            <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
                                <a class="ml-3" target="_blank" href="https://instagram.com/_pbsofficial">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
                                        viewBox="0 0 24 24">
                                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                                        <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                                    </svg>
                                </a>
                                <a class="ml-3" target="_blank"
                                    href="https://linkedin.com/company/the-purpose-business-summit">
                                    <svg fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="0" class="w-5 h-5"
                                        viewBox="0 0 24 24">
                                        <path stroke="none"
                                            d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                                        </path>
                                        <circle cx="4" cy="4" r="2" stroke="none"></circle>
                                    </svg>
                                </a>
                            </span>
                        </div>
                    </footer>
                </main>



                @if (session('message'))
                    <x-admin.alert :message="session('message')"></x-admin.alert>
                @endif
            </div>
        </div>
    </div>

    <!-- Scripts -->
    @stack('alpine')
    @stack('livewire-scripts')
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
