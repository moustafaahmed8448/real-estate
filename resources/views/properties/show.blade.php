<x-layout>
    <!-- Property Details Section -->
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-12">
                <!-- Property Image -->
                <div>
                    @if ($property->images->isNotEmpty())
                    <img id="mainImage" src="{{ asset('storage/' . $property->images->first()->path) }}"
                        alt="Property Image" class="w-full h-96 object-contain mb-6 cursor-pointer transition-transform transform hover:scale-105"
                        onclick="openImagePreview(this)">
                    @else
                    <img src="{{ asset('storage/default-image.jpg') }}" alt="No image available"
                        class="w-full h-96 object-contain mb-6">
                    @endif
                </div>

                <!-- Property Info -->
                <div>
                    <h3 class="text-3xl font-bold text-gray-800 mb-4">{{ $property->title }}</h3>
                    <p class="text-gray-600 text-xl mb-6">${{ number_format($property->price) }}</p>
                    <p class="text-gray-600 text-lg mb-6">{{ $property->description }}</p>

                    <h4 class="text-2xl font-semibold text-gray-800 mb-4">Property Features:</h4>
                    <ul class="list-disc list-inside text-gray-600">
                        <li>{{ $property->space }} sqft</li>
                        <li>{{ $property->bedrooms }} Bedrooms</li>
                        <li>{{ $property->bathrooms }} Bathrooms</li>
                        <!-- Add more features if necessary -->
                    </ul>

                    <h4 class="text-2xl font-semibold text-gray-800 mt-8 mb-4">Nearby Amenities:</h4>
                    <ul class="list-disc list-inside text-gray-600">
                        <li>Public Transport: 5 mins walk</li>
                        <li>Restaurants and Cafes: 10 mins drive</li>
                        <li>Schools and Hospitals: 15 mins drive</li>
                        <!-- Add more amenities if necessary -->
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
                @foreach ($property->images as $image)
                <div class="overflow-hidden rounded-lg shadow-md">
                    <img src="{{ asset('storage/' . $image->path) }}" alt="Property" class="w-full h-full object-cover cursor-pointer"
                        onclick="openImageInModal('{{ asset('storage/' . $image->path) }}')">
                </div>
                @endforeach
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

    <script>
        // Function to open the image preview in a modal
        function openImageInModal(imageSrc) {
            const modal = document.createElement('div');
            modal.classList.add('fixed', 'inset-0', 'bg-gray-900', 'bg-opacity-75', 'z-50', 'flex', 'justify-center', 'items-center');

            const modalContent = document.createElement('div');
            modalContent.classList.add('relative', 'w-3/4', 'md:w-1/2', 'p-6', 'bg-white', 'rounded-lg');

            // Create and append the "X" button to close the modal
            const closeButton = document.createElement('span');
            closeButton.classList.add('absolute', 'top-2', 'right-2', 'text-white', 'cursor-pointer', 'text-3xl', 'bg-red-600', 'px-3', 'py-1', 'rounded-full', 'hover:bg-red-700');
            closeButton.textContent = 'X';
            closeButton.onclick = () => modal.remove();
            modalContent.appendChild(closeButton);

            // Create and append the image inside the modal
            const largeImage = document.createElement('img');
            largeImage.src = imageSrc;
            largeImage.classList.add('w-full', 'h-auto', 'object-contain');
            modalContent.appendChild(largeImage);

            // Append the modal content to the modal
            modal.appendChild(modalContent);
            document.body.appendChild(modal);
        }
    </script>
</x-layout>