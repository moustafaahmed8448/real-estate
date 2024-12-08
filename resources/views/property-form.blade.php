<x-layout>
    <div class="container mx-auto py-8">
        <h2 class="text-2xl font-bold mb-6">Add a New Property</h2>

        <form action="{{ route('properties.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            <input type="text" name="title" placeholder="Title" class="w-full px-4 py-3 border rounded-lg" required>
            <textarea name="description" placeholder="Description" class="w-full px-4 py-3 border rounded-lg" required></textarea>
            <input type="number" name="price" placeholder="Price" class="w-full px-4 py-3 border rounded-lg" required>
            <input type="text" name="location" placeholder="Location" class="w-full px-4 py-3 border rounded-lg" required>
            <input type="number" name="bedrooms" placeholder="Bedrooms" class="w-full px-4 py-3 border rounded-lg" required>
            <input type="number" name="bathrooms" placeholder="Bathrooms" class="w-full px-4 py-3 border rounded-lg" required>
            <input type="number" name="space" placeholder="Space (sqft)" class="w-full px-4 py-3 border rounded-lg" required>
            <select name="type" class="w-full px-4 py-3 border rounded-lg" required>
                <option value="villa">Villa</option>
                <option value="apartment">Apartment</option>
                <option value="house">House</option>
            </select>
            <input type="file" name="image" class="w-full px-4 py-3 border rounded-lg" required>
            <button type="submit" class="px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg">Save Property</button>
        </form>
    </div>
</x-layout>