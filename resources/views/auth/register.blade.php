<x-layout>
    <div class="max-w-lg mx-auto py-8 px-6 bg-white shadow-lg rounded-lg">
        <h2 class="text-2xl font-semibold text-center mb-6">{{ __('Register') }}</h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="mb-4">
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full border border-gray-300 rounded-lg p-2"
                    type="text"
                    name="name"
                    :value="old('name')"
                    required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2 text-red-500" />
            </div>

            <!-- Email Address -->
            <div class="mb-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full border border-gray-300 rounded-lg p-2"
                    type="email"
                    name="email"
                    :value="old('email')"
                    required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500" />
            </div>

            <!-- Password -->
            <div class="mb-4">
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input id="password" class="block mt-1 w-full border border-gray-300 rounded-lg p-2"
                    type="password"
                    name="password"
                    required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500" />
            </div>

            <!-- Confirm Password -->
            <div class="mb-6">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                <x-text-input id="password_confirmation" class="block mt-1 w-full border border-gray-300 rounded-lg p-2"
                    type="password"
                    name="password_confirmation"
                    required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-500" />
            </div>

            <!-- Register Button -->
            <div class="flex items-center justify-between mt-6">
                <a href="{{ route('login') }}" class="text-sm text-blue-600 hover:underline">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-layout>