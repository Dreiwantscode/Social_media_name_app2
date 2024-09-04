<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Welcome to Pesbok') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Main Dashboard Container -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>

            <!-- Create Post Form -->
            <div class="mt-6 bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">
                    {{ __('Create a New Post') }}
                </h3>
                <form action="#" method="POST">
                    @csrf
                    <textarea name="post_content" rows="4" class="w-full border-gray-300 rounded-lg p-3" placeholder="What's on your mind?"></textarea>
                    <button type="submit" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded-lg">
                        {{ __('Post') }}
                    </button>
                </form>
            </div>

            <!-- Post Feed -->
            <div class="mt-6 bg-gray-100 p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">
                    {{ __('Feed') }}
                </h3>
                <!-- Example Post -->
                <div class="bg-white p-4 rounded-lg shadow-md mb-4">
                    <div class="flex items-center mb-2">
                        <img src="https://via.placeholder.com/40" alt="User Avatar" class="w-10 h-10 rounded-full mr-3">
                        <div>
                            <h4 class="font-semibold text-gray-800">Example User</h4>
                            <p class="text-gray-600 text-sm">2 hours ago</p>
                        </div>
                    </div>
                    <p class="text-gray-800 mb-4">This is an example post content. It could be anything that the user wants to share with their friends.</p>
                    <div class="flex justify-between text-gray-600 text-sm">
                        <button class="hover:text-blue-500">{{ __('Like') }}</button>
                        <button class="hover:text-blue-500">{{ __('Comment') }}</button>
                        <button class="hover:text-blue-500">{{ __('Share') }}</button>
                    </div>
                </div>
                <!-- Add more posts here as needed -->
            </div>
        </div>
    </div>
</x-app-layout>
