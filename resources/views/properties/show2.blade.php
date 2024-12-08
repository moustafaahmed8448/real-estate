<x-layout>
    <div class="container mx-auto py-8">

        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="flex justify-center mt-3">
                <h2 class="text-3xl font-semibold text-gray-800">{{ $property->title }}</h2>
            </div>

            <!-- Image Preview Section (Top) -->
            <div class="relative mt-4">
                <!-- Display the first image as the preview -->
                @if ($property->images->isNotEmpty())
                <img id="mainImage" src="{{ asset('storage/' . $property->images->first()->path) }}"
                    alt="Property Image" class="w-full h-96 object-contain mb-6 cursor-pointer transition-transform transform hover:scale-105"
                    onclick="openImagePreview(this)">
                @else
                <img src="{{ asset('storage/default-image.jpg') }}" alt="No image available"
                    class="w-full h-96 object-contain mb-6">
                @endif
            </div>

            <!-- Scrollable Image List -->
            <div class="mt-6">
                <div id="imageList" class="flex overflow-x-auto mt-4 space-x-4 pb-4 scroll-smooth justify-center">
                    @foreach ($property->images as $image)
                    <div class="flex-shrink-0">
                        <img src="{{ asset('storage/' . $image->path) }}"
                            alt="Property Image"
                            class="w-48 h-48 object-contain rounded-md cursor-pointer transition-all duration-300 transform hover:scale-110 hover:opacity-80 hover:shadow-lg image-thumb"
                            onclick="changeMainImage(this)">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Property details -->
        <div class="p-6 bg-white shadow-lg mt-6 rounded-lg">
            <p class="text-xl text-gray-600 font-medium">${{ number_format($property->price) }}</p>
            <p class="text-sm text-gray-500 mt-2">{{ $property->location }}</p>
            <p class="text-sm text-gray-500 mt-2">Space: {{ $property->space }} sqft</p>

            <!-- Description -->
            <div class="mt-6">
                <h3 class="font-semibold text-gray-800">Description:</h3>
                <p class="text-gray-600">{{ $property->description }}</p>
            </div>

            <!-- Features -->
            <div class="mt-6">
                <span class="text-sm text-gray-600 font-semibold">Features: </span>
                <ul class="space-x-2 mt-2">
                    @foreach ($property->features as $feature)
                    <li class="inline-block bg-blue-100 text-blue-600 px-3 py-1 text-xs rounded-md">{{ $feature->name }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <script>
        // Function to change the main image when a thumbnail is clicked
        function changeMainImage(element) {
            const mainImage = document.getElementById("mainImage");
            mainImage.src = element.src;

            // Reset the opacity for all thumbnails
            const thumbnails = document.querySelectorAll('.image-thumb');
            thumbnails.forEach(thumb => {
                thumb.classList.remove('opacity-50');
            });

            // Set opacity for the selected thumbnail
            element.classList.add('opacity-50');
        }

        // Function to open the image preview in a modal
        function openImagePreview(element) {
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
            largeImage.src = element.src;
            largeImage.classList.add('w-full', 'h-auto', 'object-contain');
            modalContent.appendChild(largeImage);

            // Append the modal content to the modal
            modal.appendChild(modalContent);
            document.body.appendChild(modal);
        }
    </script>
</x-layout>