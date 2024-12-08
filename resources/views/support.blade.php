<x-layout>
    <div class="container mx-auto py-8">
        <h2 class="text-2xl font-bold mb-6">Support</h2>
        <p class="text-gray-600 mb-4">If you have any issues or questions, feel free to contact our support team. We are here to assist you!</p>

        <!-- Support Form -->
        <form method="POST" action="{{ route('support.send') }}" class="bg-white p-6 rounded-lg shadow-lg">
            @csrf

            <!-- Name -->
            <div class="mb-4">
                <x-input-label for="name" :value="__('Your Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email -->
            <div class="mb-4">
                <x-input-label for="email" :value="__('Your Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Subject -->
            <div class="mb-4">
                <x-input-label for="subject" :value="__('Subject')" />
                <x-text-input id="subject" class="block mt-1 w-full" type="text" name="subject" :value="old('subject')" required />
                <x-input-error :messages="$errors->get('subject')" class="mt-2" />
            </div>

            <!-- Message -->
            <div class="mb-4">
                <x-input-label for="message" :value="__('Your Message')" />
                <textarea id="message" class="block mt-1 w-full h-32" name="message" required>{{ old('message') }}</textarea>
                <x-input-error :messages="$errors->get('message')" class="mt-2" />
            </div>

            <!-- Submit Button -->
            <div class="flex items-center justify-end">
                <x-primary-button>
                    {{ __('Send Message') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-layout>