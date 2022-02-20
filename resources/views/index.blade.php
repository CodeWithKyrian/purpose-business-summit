<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    {{ seo()->render() }}

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">


</head>

<body class="antialiased font-sans">
    @include('partials._navbar')
    <main x-data="homepage">
        <section class="section relative bg-blue-800/80">
            <div class="absolute z-[-1] w-full bg-center text-gray-600 bg-cover h-full flex items-center"
                style="background-image: url('/img/conference2.jpg');">
            </div>
            <div class="w-full text-white min-h-screen flex items-center">
                <div class="w-full max-w-4xl mx-auto px-4 md:px-12 py-12">
                    <div class="mx-auto mb-16 md:mb-0 text-center">
                        <h1 class="sm:text-5xl text-3xl mb-4 font-bold  text-white">The Biggest Student Business Summit
                            in Owerri
                        </h1>
                        <p class="text-lg mb-8 leading-relaxed">Join over 10 industry experts as they review the
                            rudiments of running a profitable business alongside academics!</p>
                        <div class="flex items-center justify-center px-5 py-5">
                            <div class="text-blue-100">
                                <div
                                    class="text-3xl sm:text-4xl md:text-6xl text-center flex w-full items-center justify-center">
                                    <div class="w-16 sm:w-20 md:w-24 mx-1 p-2 bg-white text-blue-600 rounded-lg">
                                        <div class="font-mono leading-none" x-text="days">00</div>
                                        <div class="font-mono uppercase text-xs md:text-md leading-none">Days</div>
                                    </div>
                                    <div class="w-16 sm:w-20 md:w-24 mx-1 p-2 bg-white text-blue-600 rounded-lg">
                                        <div class="font-mono leading-none" x-text="hours">00</div>
                                        <div class="font-mono uppercase text-xs md:text-md leading-none">Hours</div>
                                    </div>
                                    <div class="w-16 sm:w-20 md:w-24 mx-1 p-2 bg-white text-blue-600 rounded-lg">
                                        <div class="font-mono leading-none" x-text="minutes">00</div>
                                        <div class="font-mono uppercase text-xs md:text-md leading-none">Minutes</div>
                                    </div>
                                    <div class="w-16 sm:w-20 md:w-24 mx-1 p-2 bg-white text-blue-600 rounded-lg">
                                        <div class="font-mono leading-none" x-text="seconds">00</div>
                                        <div class="font-mono uppercase text-xs md:text-md leading-none">Seconds</div>
                                    </div>
                                </div>
                                <!-- <p class="text-sm text-center mt-3">*<a href="#" class="underline hover:text-blue-200" target="_blank">As per goverment
                                        plan</a>. Subject to change.</p> -->
                            </div>
                        </div>
                        <div class="flex justify-center">
                            <a href="#ticket"
                                class="inline-flex items-center bg-blue-600 border-0 py-3 px-8 focus:outline-none hover:bg-white hover:text-black rounded-tl-full rounded-tr-full rounded-br-full text-md">
                                <span>Get Ticket</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="about" class="section text-gray-600 body-font">
            <div class="mx-auto flex px-4 md:px-12 py-8 md:flex-row flex-col items-center">
                <div
                    class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                    <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Who are we?
                    </h1>
                    <p class="mb-2 leading-relaxed">In today's fast-changing world, building and growing a business as a
                        student demands a critical focus on strategic planning, execution, and a commitment
                        effectiveness, so as to avoid a situation where you thrive in business at the expense/detriment
                        of your academic success.</p>
                    <p class="mb-2 leading-relaxed"><strong>PBS</strong> is an annual event targeted at student
                        enterpreneurs to solve this problem and rescue some students' businesses already in thier route
                        to extinction. Our mission is to help student entrepreneurs remain relevant in today's fast
                        ever-changing markets, develop the competencies to the highest level, giving the underpining
                        confidence to achieve all thier business goals and objectives however challenging</p>
                    <p class="mb-2 leading-relaxed">The annual event will host numerous industry experts, those playing
                        it big in the different niches to speak on various areas of business, focusing on <strong>The
                            PBS 5PPT (5 Pillar Point Topics)</strong>.</p>
                </div>
                <div class="lg:max-w-lg lg:w-full md:w-1/2 w-full">
                    <img class="object-cover object-center rounded" alt="hero"
                        src="{{ asset('img/man-nd-woman.png') }}">
                </div>
            </div>
        </section>
        <section class="text-gray-600 bg-gray-50 body-font">
            <div class="container px-5 py-8 mx-auto">
                <div class="flex flex-wrap w-full mb-8 flex-col items-center text-center">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">The PBS 5PPT (5 Pillar
                        Point Topics)</h1>
                    <!-- <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table.</p> -->
                </div>
                <div class="flex justify-center flex-wrap -m-4">
                    <div class="xl:w-1/3 md:w-1/2 p-4">
                        <div class="bg-indigo-100 relative point-1  p-6 rounded-xl h-full shadow">
                            <div class="absolute inset-x-0 opacity-10 w-full bg-center text-gray-600 bg-cover h-full flex items-center"
                                style="background-image: url('/img/pricing.png');"></div>
                            <div
                                class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-200 text-indigo-500 mb-4">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z"
                                        clip-rule="evenodd"></path>
                                    <path
                                        d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z">
                                    </path>
                                </svg>
                            </div>
                            <h2 class="text-lg text-gray-800 font-medium title-font mb-2">Business</h2>
                            <p class="leading-relaxed text-sm">Why should I start a business? How do I start? Who is my
                                customer? How do I get them? How do I strategize my business for massive profits? Join
                                our experts as they reveal the rudiments of running a business as a student </p>
                        </div>
                    </div>
                    <div class="xl:w-1/3 md:w-1/2 p-4">
                        <div class="bg-red-100 point-2 p-6 rounded-xl h-full shadow">
                            <div
                                class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-red-200 text-red-500 mb-4">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M18 13V5a2 2 0 00-2-2H4a2 2 0 00-2 2v8a2 2 0 002 2h3l3 3 3-3h3a2 2 0 002-2zM5 7a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1zm1 3a1 1 0 100 2h3a1 1 0 100-2H6z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <h2 class="text-lg text-gray-800 font-medium title-font mb-2">Social Media</h2>
                            <p class="leading-relaxed text-sm">A platform for promoting your brand and.....a unique
                                place where you can listen, engage and create relationships. Join our seasoned speakers
                                as they walk you through the gold mine in social media. </p>
                        </div>
                    </div>
                    <div class="xl:w-1/3 md:w-1/2 p-4">
                        <div class="bg-green-100  p-6 rounded-xl h-full shadow">
                            <div
                                class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-green-200 text-green-500 mb-4">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z">
                                    </path>
                                </svg>
                            </div>
                            <h2 class="text-lg text-gray-800 font-medium title-font mb-2">Sales and Marketing</h2>
                            <p class="leading-relaxed text-sm">Low sales? Poor conversion? No buyer? Our speakers are
                                ready to dissect these issues and profer solutions. The question is, will you be there?
                            </p>
                        </div>
                    </div>
                    <div class="xl:w-1/3 md:w-1/2 p-4">
                        <div class="bg-yellow-100  p-6 rounded-xl h-full shadow">
                            <div
                                class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-yellow-200 text-yellow-500 mb-4">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z">
                                    </path>
                                    <path fill-rule="evenodd"
                                        d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Closing & Copywriting</h2>
                            <p class="leading-relaxed text-sm">"I will get back to you", an anthem for student
                                enterpreneurs like you. Join us as the big game players reveal the secrets to avoid the
                                student pricing syndrome</p>
                        </div>
                    </div>
                    <div class="xl:w-1/3 md:w-1/2 p-4">
                        <div class="bg-blue-100  p-6 rounded-xl h-full shadow">
                            <div
                                class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-blue-200 text-blue-500 mb-4">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Branding</h2>
                            <p class="leading-relaxed text-sm">Join our experts as they take you through the process of
                                creating a string positive perception of your company, your products or services in the
                                minds of your customers.</p>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center">
                    <a href="#ticket"
                        class="inline-flex mt-16 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Get
                        Ticket</a>
                </div>
            </div>
        </section>

        <!-- SPEAKERS -->
        @include('partials._speakers')
        <!-- /SPEAKERS -->

        <!-- TICKETS -->
        @include('partials._tickets')
        <!-- /TICKETS -->


        <section class="text-gray-600 pbs-pattern bg-blue-50 body-font">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-col text-center w-full mb-12">
                    <h1 class="sm:text-3xl text-2xl font-bold title-font mb-4 text-blue-900">Interested in being a
                        sponsor for this event?</h1>
                    <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Fill the form below and we will not hestitate
                        to
                        contact your for further discussions on how to make it work.</p>
                </div>
                <div
                    class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto px-8 sm:px-0 items-center sm:space-x-4 sm:space-y-0 space-y-4">
                    <div class="relative sm:mb-0 flex-grow w-full">
                        <input type="text" id="full-name" name="full-name"
                            class="w-full bg-transparent rounded-md border border-blue-900 focus:border-blue-500 focus:ring-2 focus:ring-blue-900 text-base outline-none text-gray-100 py-2 px-3 leading-8 transition-colors duration-200 ease-in-out"
                            placeholder="Your Fullname">
                    </div>
                    <div class="relative sm:mb-0 flex-grow w-full">
                        <input type="email" id="email" name="email"
                            class="w-full bg-transparent rounded-md border border-blue-900 focus:border-blue-500 focus:ring-2 focus:ring-blue-900 text-base outline-none text-gray-100 py-2 px-3 leading-8 transition-colors duration-200 ease-in-out"
                            placeholder="Email Address">
                    </div>
                    <button type="submit"
                        class="inline-flex items-center border bg-blue-900 border-blue-900 text-white font-semibold py-3 px-8 focus:outline-none hover:text-blue-900 hover:bg-transparent rounded-md text-md">
                        Submit
                    </button>
                </div>
            </div>
        </section>

        <!-- TEAM -->
        @include('partials._team')
        <!-- /TEAM -->

        <section id="contact" class="text-gray-600 body-font px-6 py-12 md:px-12">
            <div
                class="container rounded-xl shadow-lg bg-blue-100 pbs-pattern px-5 py-24 mx-auto flex items-center md:flex-row flex-col">
                <div class="flex flex-col md:pr-10 md:mb-0 mb-6 pr-0 w-full md:w-auto md:text-left text-center">
                    <h2 class="text-xs text-blue-800 tracking-widest font-medium title-font mb-1">CONTACT US
                    </h2>
                    <h1 class="md:text-3xl text-2xl font-medium title-font text-gray-900">Connect with us and ask us any
                        questions.
                    </h1>
                </div>
                <div class="flex md:ml-auto md:mr-0 mx-auto items-center flex-shrink-0 space-x-4">
                    <a href="mailto:thepurposebusinesssummit@gmail.com"
                        class="bg-gray-100 inline-flex py-3 px-5 rounded-lg items-center hover:bg-gray-200 focus:outline-none text-blue-800 shadow">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                        </svg>
                        <span class="ml-4 flex items-start flex-col leading-none">
                            <span class="title-font font-medium">Email</span>
                        </span>
                    </a>
                    <a href="tel:_2349071739577"
                        class="bg-gray-100 inline-flex py-3 px-5 rounded-lg items-center hover:bg-gray-200 focus:outline-none text-blue-800 shadow">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path></svg>
                        <span class="ml-4 flex items-start flex-col leading-none">
                            <span class="title-font font-medium">Call Us</span>
                        </span>
                    </a>
                </div>
            </div>
        </section>

        @include('partials._footer')

        <div @cscroll="document.body.style.overflowY = openModal ? 'hidden' : ''"></div>

        <!-- MODAL -->
        <section x-show="openModal" x-cloak class="fixed z-50 inset-0 overflow-y-hidden" aria-labelledby="modal-title"
            role="dialog" aria-modal="true">
            <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

                <div x-show="openModal" class="fixed inset-0 bg-gray-800/75 transition-opacity" aria-hidden="true"
                    x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100" x-transition:leave="ease-out duration-300"
                    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"></div>

                <!-- This element is to trick the browser into centering the modal contents. -->
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

                <div x-show="openModal"
                    class="inline-block bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all w-full sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
                    x-transition:enter="ease-out duration-300"
                    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave="ease-in duration-200"
                    x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
                    <!-- Modal content -->
                    <div class="relative">
                        <div class="flex justify-between items-center p-4 border-b">
                            <h3 class="text-lg md:text-xl font-medium text-gray-900  pr-4" x-text="headerText"></h3>
                            <button @click="openModal = false; $dispatch('cscroll', {})" type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                                data-modal-toggle="authentication-modal">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>
                        <form class="px-6 py-4 lg:px-8 sm:pb-6 xl:pb-8" action="{{ route('ticket.pay') }}"
                            method="POST">
                            @csrf
                            <input class="hidden" id="ticket_id" name="ticket_id" x-model="ticket_id"></input>
                            <div class="py-2">
                                <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 ">First
                                    Name</label>
                                <input type="text" name="firstname" placeholder="+234 * * *  * * * *  * * *"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    required>
                            </div>
                            <div class="py-2">
                                <label for="phone" class="block mb-2 text-sm font-medium text-gray-900">Last
                                    Name</label>
                                <input type="text" name="lastname" placeholder="+234 * * *  * * * *  * * *"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    required>
                            </div>
                            <div class="py-2">
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your
                                    email</label>
                                <input type="email" name="email" id="email"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="name@company.com" required>
                            </div>

                            <button disabled type="submit"
                                class="w-full mt-6 text-white bg-opacity-75 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Proceed
                                to Payment</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <!-- Scripts -->
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('homepage', () => ({
                seconds: '00',
                minutes: '00',
                hours: '00',
                days: '00',
                distance: 0,
                countdown: null,

                openModal: false,
                headerText: '',
                ticket_id: '',

                eventTime: new Date('March 19, 2022 00:00:00').getTime(),
                now: new Date().getTime(),
                init: function() {
                    this.countdown = setInterval(() => {
                        // Calculate time
                        this.now = new Date().getTime();
                        this.distance = this.eventTime - this.now;
                        // Set Times
                        this.days = this.padNum(Math.floor(this.distance / (1000 * 60 * 60 *
                            24)));
                        this.hours = this.padNum(Math.floor((this.distance % (1000 * 60 *
                            60 * 24)) / (1000 * 60 * 60)));
                        this.minutes = this.padNum(Math.floor((this.distance % (1000 * 60 *
                            60)) / (1000 * 60)));
                        this.seconds = this.padNum(Math.floor((this.distance % (1000 *
                            60)) / 1000));
                        // Stop
                        if (this.distance < 0) {
                            clearInterval(this.countdown);
                            this.days = '00';
                            this.hours = '00';
                            this.minutes = '00';
                            this.seconds = '00';
                        }
                    }, 100);
                },
                padNum: function(num) {
                    var zero = '';
                    for (var i = 0; i < 2; i++) {
                        zero += '0';
                    }
                    return (zero + num).slice(-2);
                },
                buyTicket: function(ticket_id, $dispatch) {
                    this.ticket_id = ticket_id
                    this.headerText = ticket_id == 1 ?
                        'Purchase Basic Plan Ticket' :
                        ticket_id == 2 ?
                        'Purchase Silver Plan Ticket' :
                        'Purchase Gold Plan Ticket'
                    // document.querySelector('input#ticket_id').value = ticket_id
                    this.openModal = true
                    $dispatch('cscroll', {})
                },
            }))

        })
    </script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
    <script>
        const swiperOne = new Swiper('#swiper-one', {
            speed: 400,
            autoplay: true,
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            slidesPerView: 1,
            spaceBetween: 10,
            // Responsive breakpoints
            breakpoints: {
                // when window width is >= 320px
                480: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
                // when window width is >= 640px
                640: {
                    slidesPerView: 3,
                    spaceBetween: 20
                },
                // when window width is >= 640px
                960: {
                    slidesPerView: 4,
                    spaceBetween: 30
                }
            }
        });
        const swiperTwo = new Swiper("#swiper-two", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            autoplay: true,
            slidesPerView: 1.2,
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: true,
            },
            breakpoints: {
                480: {
                    slidesPerView: 2
                },
                800: {
                    slidesPerView: 3
                }
            },
            pagination: {
                el: ".swiper-pagination",
            },
        });
    </script>
</body>

</html>
