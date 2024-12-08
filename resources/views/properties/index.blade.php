<x-layout>
    <div class="container mx-auto py-8">
        <!-- Centered Search and Filter Section -->
        <div class="mb-6 flex justify-center items-center">
            <form method="GET" action="{{ route('properties.index') }}"
                class="bg-white/80 backdrop-blur-md shadow-md p-6 rounded-lg w-full max-w-4xl flex flex-wrap space-y-4 md:space-y-0 md:space-x-4 justify-between">
                <!-- Name Search -->
                <div class="flex-1">
                    <label for="title" class="block text-gray-700 font-semibold">Property Name</label>
                    <input type="text" name="title" id="title" placeholder="Search by name"
                        class="mt-2 p-2 w-full border border-gray-300 rounded-lg" value="{{ request()->get('title') }}">
                </div>

                <!-- Price Filter -->
                <div class="flex-1">
                    <label for="price" class="block text-gray-700 font-semibold">Price Range</label>
                    <div class="flex space-x-2">
                        <input type="number" name="min_price" id="min_price" placeholder="Min Price"
                            class="mt-2 p-2 border border-gray-300 rounded-lg w-1/2" value="{{ request()->get('min_price') }}">
                        <input type="number" name="max_price" id="max_price" placeholder="Max Price"
                            class="mt-2 p-2 border border-gray-300 rounded-lg w-1/2" value="{{ request()->get('max_price') }}">
                    </div>
                </div>

                <!-- Features Filter -->
                <div class="flex-1">
                    <label for="features" class="block text-gray-700 font-semibold">Features</label>
                    <div class="space-y-2 mt-2">
                        @foreach ($features as $feature)
                        <div>
                            <input type="checkbox" name="features[]" value="{{ $feature->id }}" id="feature-{{ $feature->id }}"
                                @if(in_array($feature->id, request()->get('features', []))) checked @endif>
                            <label for="feature-{{ $feature->id }}" class="text-sm text-gray-600">{{ $feature->name }}</label>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="flex items-end">
                    <button type="submit" class="bg-blue-500 text-white p-2 rounded-lg w-full md:w-auto">
                        Search
                    </button>
                </div>
            </form>
        </div>

        <!-- Properties Listing -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($properties as $property)
            <a href="{{ route('properties.show', $property->id) }}"
                class="block bg-white p-4 rounded-lg shadow-lg transition-transform duration-300 ease-in-out transform hover:scale-105 hover:shadow-xl">
                @if ($property->images->isNotEmpty())
                <img src="{{ asset('storage/' . $property->images->first()->path) }}"
                    alt="{{ $property->title }}"
                    class="w-full h-48 object-cover rounded-md mb-4 transition-opacity duration-300 ease-in-out hover:opacity-90">
                @else
                <img src="{{ asset('storage/default-image.jpg') }}"
                    alt="No image available"
                    class="w-full h-48 object-cover rounded-md mb-4">
                @endif
                <h3 class="text-xl font-semibold mt-4 hover:text-blue-600 transition-colors duration-200">{{ $property->title }}</h3>
                <p class="text-gray-700 mt-2">${{ number_format($property->price) }}</p>
                <p class="text-gray-600 mt-2">{{ $property->location }}</p>
                <p class="text-gray-600 mt-2">Space: {{ $property->space }} sqft</p>
                <p class="text-gray-600 mt-2">{{ $property->description }}</p>

                <div class="mt-4">
                    <span class="text-sm text-gray-600 font-semibold">Features: </span>
                    <ul class="space-x-2">
                        @foreach ($property->features as $feature)
                        <li class="inline-block bg-blue-100 text-blue-600 px-2 py-1 text-xs rounded-md">{{ $feature->name }}</li>
                        @endforeach
                    </ul>
                </div>
            </a>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="mt-6">
            {{ $properties->links() }}
        </div>
    </div>
</x-layout>