<x-admin-layout title="Register Ticket">
    <section class="mt-4">
        <form method="POST" action="{{route('admin.ticket.register')}}">
            @csrf
            <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                    <div class="mb-5">
                        <h1 class="text-lg font-semibold mb-3 uppercase">Personal Information</h1>
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 lg:col-span-3">
                                <label for="firstname" class="block text-sm font-medium text-gray-700">First
                                    name</label>
                                <input type="text" name="firstname" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>

                            <div class="col-span-6 lg:col-span-3">
                                <label for="lastname" class="block text-sm font-medium text-gray-700">Last name</label>
                                <input type="text" name="lastname" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>

                            <div class="col-span-6 lg:col-span-3">
                                <label for="email" class="block text-sm font-medium text-gray-700">Email
                                    address</label>
                                <input type="text" name="email" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                @error('email')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="col-span-6 lg:col-span-3">
                                <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                                <div class="mt-1 flex border border-gray-300 relative rounded-md shadow-sm">
                                    <div class="flex items-center bg-gray-100">
                                        <span class="whitespace-nowrap text-gray-500 sm:text-sm pointer-events-none px-2">
                                            +234
                                        </span>
                                    </div>
                                    <input type="text" name="phone" class="focus:outline-none focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-0 rounded-r-md px-2">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-5">
                        <h1 class="text-lg font-semibold mb-3 uppercase">Ticket Information</h1>
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 lg:col-span-3">
                                <label for="type" class="block text-sm font-medium text-gray-700">Ticket Type</label>
                                <select name="ticket_id" autocomplete="ticket_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                    @foreach ($tickets as $ticket)
                                    <option value="{{ $ticket->id }}">{{ $ticket->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-span-6 lg:col-span-3">
                                <label for="suf_code" class="block text-sm font-medium text-gray-700">Ticket
                                    Code</label>
                                <input type="text" name="ticket_code" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md uppercase" maxlength="6" minlength="6">
                                @error('ticket_code')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Save</button>
                </div>
            </div>
        </form>
    </section>
</x-admin-layout>