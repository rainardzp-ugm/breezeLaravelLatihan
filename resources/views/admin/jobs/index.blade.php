<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin - Manage Jobs') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-semibold mb-4">Job Management</h3>
                    <p>This page is only accessible by admins.</p>
                    
                    <!-- Add your job management content here -->
                    <div class="mt-4">
                        <p class="text-sm text-gray-600">Welcome, Admin! You can manage jobs here.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
