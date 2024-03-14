<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin/Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @foreach ($users as $user)
                <div class="bg-white mt-2 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <a href="{{ route('admin.users.show', $user) }}">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            <p>{{ $user->name }}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
