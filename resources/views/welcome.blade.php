<x-layout>
    <!-- Hero Section -->
    <section id="hero-section" class="bg-cover bg-center h-[60vh] transition-all duration-500 rounded-xl w-4/5 mx-auto mt-10 shadow-lg relative" style="background-image: url('{{ asset('images/home.jpg') }}')">
        <div id="hero-content" class="absolute inset-0 flex items-center justify-center text-center bg-black bg-opacity-40 rounded-xl">
            <div class="text-white max-w-lg px-6 py-8">
                <h2 class="text-5xl font-extrabold mb-6 leading-tight">Find Your Dream home</h2>
                <p class="text-lg mb-6">Explore the best properties tailored to your needs and lifestyle.</p>
                <a href="/properties" class="inline-block px-8 py-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg transition duration-300">Browse Properties</a>
            </div>
        </div>
    </section>

    <!-- Featured Properties Section -->
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-6">
            <h3 class="text-3xl font-bold text-gray-800 mb-6">Featured Properties</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Property Card 1 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl hover:scale-105 transition duration-300 transform">
                    <img src="{{ asset('images/home 1.png') }}" alt="Property" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h4 class="text-xl font-bold">Luxury Villa</h4>
                        <p class="text-gray-600">$1,200,000</p>
                        <p class="text-sm text-gray-500 mt-2">4 Beds • 3 Baths • 2500 sqft</p>
                        <a href="/estate-card" class="mt-4 inline-block text-blue-600 hover:underline transition duration-300">View Details</a>
                    </div>
                </div>

                <!-- Property Card 2 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl hover:scale-105 transition duration-300 transform">
                    <img src="{{ asset('images/home 2.png') }}" alt="Property" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h4 class="text-xl font-bold">Modern Apartment</h4>
                        <p class="text-gray-600">$750,000</p>
                        <p class="text-sm text-gray-500 mt-2">3 Beds • 2 Baths • 1800 sqft</p>
                        <a href="/estate-card" class="mt-4 inline-block text-blue-600 hover:underline transition duration-300">View Details</a>
                    </div>
                </div>

                <!-- Property Card 3 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl hover:scale-105 transition duration-300 transform">
                    <img src="{{ asset('images/home 3.png') }}" alt="Property" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h4 class="text-xl font-bold">Family House</h4>
                        <p class="text-gray-600">$500,000</p>
                        <p class="text-sm text-gray-500 mt-2">3 Beds • 2 Baths • 1500 sqft</p>
                        <a href="/estate-card" class="mt-4 inline-block text-blue-600 hover:underline transition duration-300">View Details</a>
                    </div>
                </div>

                <!-- Property Card 4 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl hover:scale-105 transition duration-300 transform">
                    <img src="{{ asset('images/home 4.png') }}" alt="Property" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h4 class="text-xl font-bold">Cozy Cottage</h4>
                        <p class="text-gray-600">$350,000</p>
                        <p class="text-sm text-gray-500 mt-2">2 Beds • 1 Bath • 1200 sqft</p>
                        <a href="/estate-card" class="mt-4 inline-block text-blue-600 hover:underline transition duration-300">View Details</a>
                    </div>
                </div>

                <!-- Property Card 5 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl hover:scale-105 transition duration-300 transform">
                    <img src="{{ asset('images/home 4.png') }}" alt="Property" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h4 class="text-xl font-bold">Beachside Villa</h4>
                        <p class="text-gray-600">$2,000,000</p>
                        <p class="text-sm text-gray-500 mt-2">5 Beds • 4 Baths • 3500 sqft</p>
                        <a href="/estate-card" class="mt-4 inline-block text-blue-600 hover:underline transition duration-300">View Details</a>
                    </div>
                </div>

                <!-- Property Card 6 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl hover:scale-105 transition duration-300 transform">
                    <img src="{{ asset('images/home 4.png') }}" alt="Property" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h4 class="text-xl font-bold">Urban Loft</h4>
                        <p class="text-gray-600">$600,000</p>
                        <p class="text-sm text-gray-500 mt-2">2 Beds • 2 Baths • 1400 sqft</p>
                        <a href="/estate-card" class="mt-4 inline-block text-blue-600 hover:underline transition duration-300">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <x-footer />
    <script>
        const heroSection = document.getElementById('hero-section');
        const heroContent = document.getElementById('hero-content');
        const threshold = 50; // The scroll distance before fading starts

        window.addEventListener('scroll', () => {
            const scrollY = window.scrollY;
            const opacity = Math.min(scrollY / 500, 1); // Fade to white after scrolling 500px

            // Apply opacity to the entire section (background and content)
            heroSection.style.opacity = 1 - opacity; // The section fades out as the scroll goes down
            heroContent.style.opacity = 1 - opacity; // The content fades out as the scroll goes down
        });
    </script>
    </body>
</x-layout>