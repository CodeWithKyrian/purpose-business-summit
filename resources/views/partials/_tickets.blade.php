<section id="ticket" class="section text-gray-500">
            <div class="px-4 md:px-12 py-12 mx-auto text-center">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Get Your Ticket</h1>
                <div class="flex flex-wrap w-full h-full items-center justify-center">
                    <div class="w-full md:w-1/3 px-4">
                        <div class="rounded-b-full shadow">
                            <div class="px-4 rounded-t-lg h-48 bg-gradient-to-b from-blue-800 to-blue-900 w-full relative mt-12">
                                <div class="absolute inset-x-0 opacity-10 w-full bg-center text-gray-600 bg-cover h-full flex items-center" style="background-image: url('/img/pricing.png');"></div>
                                <div class="w-16 h-16 -mt-8 rounded-full bg-blue-700 text-white absolute left-1/2 -translate-x-1/2 flex items-center justify-center">
                                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 3a2 2 0 100 4h12a2 2 0 100-4H4z"></path>
                                        <path fill-rule="evenodd" d="M3 8h14v7a2 2 0 01-2 2H5a2 2 0 01-2-2V8zm5 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <div class="h-full flex items-center justify-center">
                                    <h2 class="text-4xl font-bold text-center text-white">&#8358;2,000</h2>
                                </div>
                                <div class="w-2/3 h-12 -mt-6 rounded-full bg-gradient-to-b shadow-inner from-blue-700 to-blue-800  absolute left-1/2 -translate-x-1/2 flex items-center justify-center text-white uppercase font-bold text-2xl">
                                    Basic
                                </div>
                            </div>
                            <div class="px-4 py-12">
                                <ul class="my-8">
                                    <li class="py-2 border-t border-b">Access to network with industry experts</li>
                                    <li class="py-2 border-b">Branded Souvenirs</li>
                                    <li class="py-2 border-b">Refreshments</li>
                                </ul>
                                <div class="flex justify-center">
                                    <button @click="buyTicket(1, $dispatch)" class="inline-flex items-center py-3 px-8 border bg-transparent border-blue-800 text-blue-800 focus:outline-none hover:bg-blue-800 hover:text-white rounded-tl-full rounded-tr-full rounded-br-full text-md">
                                        Get Ticket
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-1/3 px-4">
                        <div class="rounded-b-full shadow">
                            <div class="px-4 rounded-t-lg h-48 bg-gradient-to-b from-green-600 to-green-700 w-full relative mt-12">
                                <div class="absolute inset-x-0 opacity-10 w-full bg-center text-gray-600 bg-cover h-full flex items-center" style="background-image: url('/img/pricing.png');"></div>
                                <div class="w-16 h-16 -mt-8 rounded-full bg-green-500 text-white absolute left-1/2 -translate-x-1/2 flex items-center justify-center">
                                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <div class="h-full flex items-center justify-center">
                                    <h2 class="text-4xl font-bold text-center text-white">&#8358;5,000</h2>
                                </div>
                                <div class="w-2/3 h-12 -mt-6 rounded-full bg-gradient-to-b shadow-inner from-green-500 to-green-600  absolute left-1/2 -translate-x-1/2 flex items-center justify-center text-white uppercase font-bold text-2xl">
                                    Standard
                                </div>
                            </div>
                            <div class="px-4 py-12">
                                <ul class="my-8">
                                    <li class="py-2 border-t border-b">All Benefits of Basic Package</li>
                                    <li class="py-2 border-b">Good view position</li>
                                    <li class="py-2 border-b">Sophisticated refreshments</li>
                                </ul>
                                <div class="flex justify-center">
                                    <button @click="buyTicket(2, $dispatch)" class="inline-flex items-center border bg-green-600 border-green-600 text-white py-3 px-8 focus:outline-none hover:bg-transparent hover:text-green-600 rounded-tl-full rounded-tr-full rounded-br-full text-md">
                                        Get Ticket
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-1/3 px-4">
                        <div class="rounded-b-full shadow">
                            <div class="px-4 rounded-t-lg h-48 bg-gradient-to-b from-red-700 to-red-800 w-full relative mt-12">
                                <div class="absolute inset-x-0 opacity-10 w-full bg-center text-gray-600 bg-cover h-full flex items-center" style="background-image: url('/img/pricing.png');"></div>
                                <div class="w-16 h-16 -mt-8 rounded-full bg-red-600 text-white absolute left-1/2 -translate-x-1/2 flex items-center justify-center">
                                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="h-full flex items-center justify-center">
                                    <h2 class="text-4xl font-bold text-center text-white">&#8358;10,000</h2>
                                </div>
                                <div class="w-2/3 h-12 -mt-6 rounded-full bg-gradient-to-b shadow-inner from-red-600 to-red-700  absolute left-1/2 -translate-x-1/2 flex items-center justify-center text-white uppercase font-bold text-2xl">
                                    Gold
                                </div>
                            </div>
                            <div class="px-4 py-12">
                                <ul class="my-8">
                                    <li class="py-2 border-t border-b">All features of Standard Package</li>
                                    <li class="py-2 border-b">Front row seating placement</li>
                                    <li class="py-2 border-b">Access to program material(video of each session)</li>
                                    <li class="py-2 border-b">Branded PBS Polo</li>
                                </ul>
                                <div class="flex justify-center">
                                    <button @click="buyTicket(3, $dispatch)" class="inline-flex items-center py-3 px-8 border bg-transparent border-red-700 text-red-700 focus:outline-none hover:bg-red-700 hover:text-white rounded-tl-full rounded-tr-full rounded-br-full text-md">
                                        Get Ticket
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>