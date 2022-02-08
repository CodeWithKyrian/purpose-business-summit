<x-admin-layout title="My Referrals">
    <div class="mt-8">
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
                        </tr>
                    </thead>

                    <tbody class="bg-white">
                        @forelse ($referrals as $user)
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
                        </tr>
                        @empty
                        <tr>
                            <td class="text-sm text-center py-4" colspan="4">You have not registered anybody for the PBS event. Please do so soon!!</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>


            </div>

        </div>
    </div>
</x-admin-layout>