<div class="mt-8">
    <div class="py-2">
        {{ $users->links() }}
    </div>
    <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
        <div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
            <table class="min-w-full">
                <thead>
                    <tr>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Name</th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Code</th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Plan</th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Phone</th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Referrer</th>
                    </tr>
                </thead>

                <tbody class="bg-white">
                    @foreach ($users as $user)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10">
                                    <img class="h-10 w-10 rounded-full" src="{{ asset('img/avatar.svg') }}" alt="">
                                </div>

                                <div class="ml-4">
                                    <div class="text-sm leading-5 font-medium text-gray-900">
                                        {{ $user->fullname }}
                                    </div>
                                    <div class="text-sm leading-5 text-gray-500">
                                        {{ $user->email }}
                                    </div>
                                </div>
                            </div>
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200 text-sm leading-5 text-gray-500 capitalize">
                            {{ $user->ticket_code }}
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200">
                            @php
                            $colors = match ($user->ticket_id) { 1 => 'text-blue-800 bg-blue-100', 2 => 'text-green-800 bg-green-100', 3 => 'text-red-700 bg-red-50', default => 'bg-gray-100 text-gray-800' };
                            @endphp
                            <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full {{ $colors }}">{{ $user->ticket?->name }}</span>
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200 text-sm leading-5 text-gray-500 capitalize">
                            {{ $user->phone }}
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200 text-sm leading-5 text-gray-500 capitalize">
                            {{ $user->referrer?->fullname ?? '--' }}
                        </td>

                        {{-- <td
                                class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                                <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                            </td> --}}
                    </tr>
                    @endforeach
                </tbody>
            </table>


        </div>

    </div>
    <div class="py-2">
        {{ $users->links() }}
    </div>
</div>

@push('livewire-scripts')
@livewireScripts
@endpush

@push('extra-styles')
@livewireStyles
@endpush