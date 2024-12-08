<x-layout>
    <section class="py-12 bg-gray-100">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-extrabold text-gray-800 mb-8 text-center">Submit a New Property</h2>
            <form action="{{ route('properties.store') }}" method="POST" enctype="multipart/form-data" class="bg-white p-10 rounded-xl shadow-md max-w-4xl mx-auto">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Title -->
                    <div>
                        <label for="title" class="block text-gray-700 text-sm font-medium mb-2">Title</label>
                        <input type="text" id="title" name="title" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" value="{{ old('title') }}" required>
                        @error('title')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Price -->
                    <div>
                        <label for="price" class="block text-gray-700 text-sm font-medium mb-2">Price ($)</label>
                        <input type="number" id="price" name="price" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" value="{{ old('price') }}" required>
                        @error('price')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Location -->
                    <div>
                        <label for="location" class="block text-gray-700 text-sm font-medium mb-2">Location</label>
                        <input type="text" id="location" name="location" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" value="{{ old('location') }}" required>
                        @error('location')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Space -->
                    <div>
                        <label for="space" class="block text-gray-700 text-sm font-medium mb-2">Space (sqft)</label>
                        <input type="number" id="space" name="space" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" value="{{ old('space') }}" required>
                        @error('space')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Property Type -->
                    <div>
                        <label for="type" class="block text-gray-700 text-sm font-medium mb-2">Property Type</label>
                        <select id="type" name="type" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option value="" disabled selected>Select Type</option>
                            <option value="apartment">Apartment</option>
                            <option value="house">House</option>
                            <option value="office">Office</option>
                        </select>
                        @error('type')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Status -->
                    <div>
                        <label for="status" class="block text-gray-700 text-sm font-medium mb-2">Status</label>
                        <select id="status" name="status" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option value="" disabled selected>Select Status</option>
                            <option value="for_sale">For Sale</option>
                            <option value="for_rent">For Rent</option>
                        </select>
                        @error('status')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Images Upload -->
                    <div class="md:col-span-2">
                        <label for="images" class="block text-gray-700 text-sm font-medium mb-2">Property Images</label>
                        <input type="file" id="images" name="images[]" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" accept="image/*" multiple>
                        <p class="text-gray-500 text-sm mt-1">You can upload up to 10 images. Selected images will be previewed below.</p>
                        <div id="image-preview" class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-4"></div>
                        @error('images')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Description -->
                <div class="mt-8">
                    <label for="description" class="block text-gray-700 text-sm font-medium mb-2">Description</label>
                    <textarea id="description" name="description" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" rows="5" required>{{ old('description') }}</textarea>
                    @error('description')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Features -->
                <div class="mt-8">
                    <label for="features" class="block text-gray-700 text-sm font-medium mb-2">Features</label>
                    <div class="space-y-3 mt-3">
                        @foreach ($features as $feature)
                        <div>
                            <input type="checkbox" name="features[]" value="{{ $feature->id }}" id="feature-{{ $feature->id }}" class="mr-2">
                            <label for="feature-{{ $feature->id }}" class="text-sm text-gray-600">{{ ucfirst($feature->name) }}</label>
                        </div>
                        @endforeach
                    </div>
                    @error('features')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Submit Button -->
                <button type="submit" class="w-full mt-8 px-6 py-3 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-600 transition duration-200">
                    Submit Property
                </button>
            </form>
        </div>
    </section>

    <script>
        const previewContainer = document.getElementById('image-preview');
        const maxImages = 10;

        document.getElementById('images').addEventListener('change', function(event) {
            const existingImages = previewContainer.children.length;
            const newFiles = Array.from(event.target.files);

            if (existingImages + newFiles.length > maxImages) {
                alert(`You can only upload up to ${maxImages} images.`);
                return;
            }

            newFiles.forEach(file => {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const div = document.createElement('div');
                    div.className = 'relative group';

                    // Image
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.alt = file.name;
                    img.className = 'w-full h-32 object-cover rounded-lg shadow-md';

                    // Delete Button
                    const button = document.createElement('button');
                    button.textContent = 'X';
                    button.className = 'absolute top-2 right-2 bg-red-600 text-white rounded-full px-2 py-1 text-xs hidden group-hover:block';
                    button.addEventListener('click', () => div.remove());

                    // Image Title
                    const title = document.createElement('p');
                    title.textContent = file.name;
                    title.className = 'text-center text-gray-600 text-sm mt-2';

                    // Append elements
                    div.appendChild(img);
                    div.appendChild(button);
                    div.appendChild(title);
                    previewContainer.appendChild(div);
                };
                reader.readAsDataURL(file);
            });
        });
    </script>
</x-layout>