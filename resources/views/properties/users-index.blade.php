<x-layout>
    <div class="container mx-auto py-8 flex">
        <!-- Left Section: User's Properties -->
        <div class="w-3/4 pr-6">
            <h2 class="text-2xl font-bold mb-6">Your Properties</h2>

            @if($properties->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach($properties as $property)
                <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl hover:scale-105 transition duration-300 transform">
                    <img src="{{ asset('storage/' . $property->images->first()->path) }}" alt="Property" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h4 class="text-xl font-bold">{{ $property->title }}</h4>
                        <p class="text-gray-600">${{ number_format($property->price) }}</p>
                        <p class="text-sm text-gray-500 mt-2">{{ $property->space }} sqft • {{ ucfirst($property->type) }} • {{ ucfirst($property->status) }}</p>
                        <a href="{{ route('properties.show', $property) }}" class="mt-4 inline-block text-blue-600 hover:underline transition duration-300">View Details</a>
                    </div>
                </div>
                @endforeach
            </div>
            @else
            <p class="text-gray-600">You have no properties listed yet. <a href="{{ route('properties.create') }}" class="text-blue-600">Create one now!</a></p>
            @endif
        </div>

        <!-- Right Section: Account Settings and Support -->
        <div class="w-1/4 bg-gray-100 p-6 rounded-lg">
            <h3 class="text-xl font-semibold mb-4">Account Settings</h3>
            <ul class="space-y-4">
                <!-- Change Email -->
                <li>
                    <a href="{{ route('profile.edit') }}" class="text-blue-600 hover:underline">Change Email</a>
                </li>
                <!-- Change Password -->
                <li>
                    <a href="{{ route('password.request') }}" class="text-blue-600 hover:underline">Change Password</a>
                </li>
                <!-- Support Section -->
                <li>
                    <a href="{{ route('support') }}" class="text-blue-600 hover:underline">Support</a>
                </li>
            </ul>
        </div>
    </div>
</x-layout>