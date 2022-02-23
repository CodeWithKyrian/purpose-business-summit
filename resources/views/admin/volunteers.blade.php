<x-admin-layout title="All Volunteers">
    <div class="mt-8">
        <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
            <div
                class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                <table class="min-w-full">
                    <thead>
                        <tr>
                            <th
                                class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Name</th>
                            <th
                                class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Phone</th>
                            <th
                                class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Referrals</th>
                            <th
                                class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Status</th>
                            <th
                                class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            </th>

                        </tr>
                    </thead>

                    <tbody class="bg-white">
                        @forelse ($volunteers as $user)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <img class="h-10 w-10 rounded-full" src="{{ asset('img/avatar.svg') }}"
                                                alt="">
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

                                <td
                                    class="px-6 py-4 whitespace-nowrap border-b border-gray-200 text-sm leading-5 text-gray-500 capitalize">
                                    {{ $user->phone }}
                                </td>

                                <td
                                    class="px-6 py-4 whitespace-nowrap border-b border-gray-200 text-sm leading-5 text-gray-500 capitalize">
                                    {{ $user->referrals_count }}
                                </td>

                                <td
                                    class="px-6 py-4 whitespace-nowrap border-b border-gray-200 text-sm leading-5 text-gray-500 capitalize">
                                    @if ($user->can('access-dashboard'))
                                        <svg class="w-6 h-6 text-green-500" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    @else
                                        <svg class="w-6 h-6 text-red-500" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    @endif
                                </td>

                                <td
                                    class="px-6 py-4 whitespace-nowrap border-b border-gray-200 text-sm leading-5 text-gray-500 capitalize">
                                    <div class="flex">
                                        @if ($user->can('access-dashboard'))
                                            <a href="{{ route('admin.volunteer.disprove', $user) }}"
                                                class="text-yellow-600 hover:text-yellow-800 p-2 rounded">
                                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11 6a3 3 0 11-6 0 3 3 0 016 0zM14 17a6 6 0 00-12 0h12zM13 8a1 1 0 100 2h4a1 1 0 100-2h-4z">
                                                    </path>
                                                </svg>
                                            </a>
                                        @else
                                            <a href="{{ route('admin.volunteer.approve', $user) }}"
                                                class="text-blue-600 hover:text-blue-800 p-2 rounded">
                                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z">
                                                    </path>
                                                </svg>
                                            </a>
                                        @endif
                                        <a href="{{ route('admin.volunteer.delete', $user) }}"
                                            class="text-red-600 hover:text-red-800 p-2 rounded">
                                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td class="text-sm text-center py-4" colspan="5">No volunteers have signed up</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>


            </div>

        </div>
    </div>
</x-admin-layout>
