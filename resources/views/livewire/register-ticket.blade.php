<section class="mt-4">
    <form wire:submit.prevent="submit" method="POST" x-data="{pre_code : @entangle('pre_code')}">
        <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
                <div class="mb-5">
                    <h1 class="text-lg font-semibold mb-3 uppercase">Personal Information</h1>
                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                            <label for="first-name" class="block text-sm font-medium text-gray-700">First
                                name</label>
                            <input type="text" name="first-name" wire:model.defer="firstname" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                            <label for="lastname" class="block text-sm font-medium text-gray-700">Last name</label>
                            <input type="text" name="lastname" wire:model.defer="lastname" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                            <label for="email" class="block text-sm font-medium text-gray-700">Email
                                address</label>
                            <input type="text" name="email" wire:model.defer="email" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            @error('email')
                            <span class="text-red-500 text-sm">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                            <label for="gender" class="block text-sm font-medium text-gray-700">Gender</label>
                            <select name="gender" wire:model.defer="gender" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                            <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                            <div class="mt-1 flex border border-gray-300 relative rounded-md shadow-sm">
                                <div class="flex items-center bg-gray-100">
                                    <span class="whitespace-nowrap text-gray-500 sm:text-sm pointer-events-none px-2">
                                        +234
                                    </span>
                                </div>
                                <input type="text" name="phone" wire:model.defer="phone" class="focus:outline-none focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-0 rounded-r-md px-2">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-5">
                    <h1 class="text-lg font-semibold mb-3 uppercase">Ticket Information</h1>
                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                            <label for="type" class="block text-sm font-medium text-gray-700">Ticket Type</label>
                            <select name="type" autocomplete="type" wire:model="ticket_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                @foreach ($tickets as $ticket)
                                <option value="{{ $ticket->id }}">{{ $ticket->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                            <label for="suf_code" class="block text-sm font-medium text-gray-700">Ticket
                                Code</label>
                            <div class="mt-1 flex border border-gray-300 relative rounded-md shadow-sm">
                                <div class="flex items-center bg-gray-100">
                                    <span class="whitespace-nowrap text-gray-500 sm:text-sm pointer-events-none px-2" x-text="pre_code">
                                    </span>
                                </div>
                                <input type="text" name="suf_code" wire:model.defer="suf_code" class="focus:outline-none focus:ring-blue-500 focus:border-blue-500 block w-full uppercase sm:text-sm border-0 rounded-r-md px-2" placeholder="XXXXXXXXXX">
                            </div>
                            @error('suf_code')
                            <span class="text-red-500 text-sm">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" wire:loading.class="bg-blue-400" wire:target="submit">
                    <span wire:loading wire:target="submit">
                        <svg version="1.1" class="w-6 h-6 animate-spin" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="m11 16c1.1046 0 2 0.89543 2 2s-0.89543 2-2 2-2-0.89543-2-2 0.89543-2 2-2zm-6.2588-3c1.3807 0 2.5 1.1193 2.5 2.5s-1.1193 2.5-2.5 2.5c-1.3807 0-2.5-1.1193-2.5-2.5s1.1193-2.5 2.5-2.5zm11.578 0.5c1.1046 0 2 0.89543 2 2s-0.89543 2-2 2-2-0.89543-2-2 0.89543-2 2-2zm2.1807-4.1815c0.82843 0 1.5 0.67157 1.5 1.5 0 0.82843-0.67157 1.5-1.5 1.5s-1.5-0.67157-1.5-1.5c0-0.82843 0.67157-1.5 1.5-1.5zm-16-3.3185c1.3807 0 2.5 1.1193 2.5 2.5s-1.1193 2.5-2.5 2.5-2.5-1.1193-2.5-2.5 1.1193-2.5 2.5-2.5zm15.286-0.79275c0.55228 0 1 0.44772 1 1s-0.44772 1-1 1c-0.55228 0-1-0.44772-1-1s0.44772-1 1-1zm-9.7858-5.2072c1.6569 0 3 1.3431 3 3s-1.3431 3-3 3-3-1.3431-3-3 1.3431-3 3-3zm7.5 3c0.27614 0 0.5 0.22386 0.5 0.5s-0.22386 0.5-0.5 0.5-0.5-0.22386-0.5-0.5 0.22386-0.5 0.5-0.5z" fill="currentColor" fill-rule="evenodd" />
                        </svg>
                    </span>
                    <span wire:loading.remove wire:target="submit">
                        Save
                    </span>
                </button>
            </div>
        </div>
    </form>
</section>

@push('livewire-scripts')
@livewireScripts
@endpush

@push('extra-styles')
@livewireStyles
@endpush