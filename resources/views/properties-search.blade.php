<x-layout>
    <!-- Search and Filter Section -->
    <section class="py-8 bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-gray-800 mb-6">Find Your Perfect Property</h2>
            <div class="flex flex-col md:flex-row md:items-center md:space-x-4 space-y-4 md:space-y-0">
                <!-- Search Bar -->
                <input
                    type="text"
                    placeholder="Search properties..."
                    class="w-full md:w-2/3 px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" />

                <!-- Property Type Filter -->
                <select
                    class="w-full md:w-1/4 px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                    <option value="">All Types</option>
                    <option value="villa">Villa</option>
                    <option value="apartment">Apartment</option>
                    <option value="house">House</option>
                </select>

                <!-- Location Filter -->
                <input
                    type="text"
                    placeholder="Location (e.g., Cairo, New York)"
                    class="w-full md:w-1/4 px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" />

                <!-- Price Range Filter -->
                <div class="flex items-center space-x-2 w-full md:w-1/2">
                    <input
                        type="number"
                        placeholder="Min Price"
                        class="w-1/2 px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" />
                    <input
                        type="number"
                        placeholder="Max Price"
                        class="w-1/2 px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" />
                </div>

                <!-- Space Range Filter -->
                <div class="flex items-center space-x-2 w-full md:w-1/2">
                    <input
                        type="number"
                        placeholder="Min Space (sqft)"
                        class="w-1/2 px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" />
                    <input
                        type="number"
                        placeholder="Max Space (sqft)"
                        class="w-1/2 px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" />
                </div>

                <!-- Search Button -->
                <button
                    class="w-full md:w-auto px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition duration-300">
                    Search
                </button>
            </div>
        </div>
    </section>

    <!-- Properties List -->
    <section class="py-12">
        <div class="container mx-auto px-6">
            <h3 class="text-3xl font-bold text-gray-800 mb-6">Properties</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Property Card -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl hover:scale-105 transition duration-300 transform">
                    <img src="{{ asset('images/home 1.png') }}" alt="Property" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h4 class="text-xl font-bold">Luxury Villa</h4>
                        <p class="text-gray-600">$1,200,000</p>
                        <p class="text-sm text-gray-500 mt-2">4 Beds • 3 Baths • 2500 sqft</p>
                        <a href="#" class="mt-4 inline-block text-blue-600 hover:underline transition duration-300">View Details</a>
                    </div>
                </div>

                <!-- Additional Property Cards -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl hover:scale-105 transition duration-300 transform">
                    <img src="{{ asset('images/home 2.png') }}" alt="Property" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h4 class="text-xl font-bold">Modern Apartment</h4>
                        <p class="text-gray-600">$750,000</p>
                        <p class="text-sm text-gray-500 mt-2">3 Beds • 2 Baths • 1800 sqft</p>
                        <a href="#" class="mt-4 inline-block text-blue-600 hover:underline transition duration-300">View Details</a>
                    </div>
                </div>

                <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl hover:scale-105 transition duration-300 transform">
                    <img src="{{ asset('images/home 3.png') }}" alt="Property" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h4 class="text-xl font-bold">Cozy Cottage</h4>
                        <p class="text-gray-600">$500,000</p>
                        <p class="text-sm text-gray-500 mt-2">2 Beds • 1 Bath • 1500 sqft</p>
                        <a href="#" class="mt-4 inline-block text-blue-600 hover:underline transition duration-300">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-footer />
</x-layout>