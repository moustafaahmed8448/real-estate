<x-layout>

    <!-- Property Details Section -->
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-12">
                <!-- Property Image -->
                <div>
                    <img src="{{ asset('images/home 1.png') }}" alt="Luxury Villa" class="w-full h-auto object-cover rounded-lg shadow-lg">
                </div>

                <!-- Property Info -->
                <div>
                    <h3 class="text-3xl font-bold text-gray-800 mb-4">Luxury Villa</h3>
                    <p class="text-gray-600 text-xl mb-6">$1,200,000</p>
                    <p class="text-gray-600 text-lg mb-6">This stunning luxury villa features modern architecture with spacious interiors and state-of-the-art amenities. Ideal for those seeking a lavish lifestyle.</p>

                    <h4 class="text-2xl font-semibold text-gray-800 mb-4">Property Features:</h4>
                    <ul class="list-disc list-inside text-gray-600">
                        <li>4 Bedrooms</li>
                        <li>3 Bathrooms</li>
                        <li>2500 sqft</li>
                        <li>Private Pool</li>
                        <li>Garage for 2 Cars</li>
                        <li>Garden Area</li>
                        <li>Close to Shopping Malls</li>
                        <li>24/7 Security</li>
                    </ul>

                    <h4 class="text-2xl font-semibold text-gray-800 mt-8 mb-4">Nearby Amenities:</h4>
                    <ul class="list-disc list-inside text-gray-600">
                        <li>Public Transport: 5 mins walk</li>
                        <li>Restaurants and Cafes: 10 mins drive</li>
                        <li>Schools and Hospitals: 15 mins drive</li>
                        <li>Shopping Malls: 20 mins drive</li>
                    </ul>

                    <a href="#" class="inline-block mt-6 px-8 py-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg transition duration-300">Contact for More Info</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Photo Gallery Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-6">
            <h3 class="text-3xl font-bold text-gray-800 mb-6">Photo Gallery</h3>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6">
                <!-- Image Thumbnails -->
                <div class="overflow-hidden rounded-lg shadow-md">
                    <img src="{{ asset('images/home 1.png') }}" alt="Property" class="w-full h-full object-cover">
                </div>
                <div class="overflow-hidden rounded-lg shadow-md">
                    <img src="{{ asset('images/home 2.png') }}" alt="Property" class="w-full h-full object-cover">
                </div>
                <div class="overflow-hidden rounded-lg shadow-md">
                    <img src="{{ asset('images/home 3.png') }}" alt="Property" class="w-full h-full object-cover">
                </div>
                <div class="overflow-hidden rounded-lg shadow-md">
                    <img src="{{ asset('images/home 4.png') }}" alt="Property" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-6">
            <h3 class="text-3xl font-bold text-gray-800 mb-6">Contact Us</h3>
            <form action="#" method="POST" class="bg-white p-8 rounded-lg shadow-lg">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div class="mb-6">
                        <label for="name" class="block text-gray-700">Name</label>
                        <input type="text" id="name" name="name" class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg" required>
                    </div>
                    <div class="mb-6">
                        <label for="email" class="block text-gray-700">Email</label>
                        <input type="email" id="email" name="email" class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg" required>
                    </div>
                </div>
                <div class="mb-6">
                    <label for="message" class="block text-gray-700">Message</label>
                    <textarea id="message" name="message" rows="4" class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg" required></textarea>
                </div>
                <button type="submit" class="w-full px-8 py-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg transition duration-300">Submit</button>
            </form>
        </div>
    </section>

    <x-footer />

</x-layout>