<x-layout>
    <!-- Contact Info Section -->
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-6">
            <h3 class="text-3xl font-bold text-gray-800 mb-6">Contact Us</h3>

            <!-- Contact Info -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-12">
                <div>
                    <h4 class="text-2xl font-semibold text-gray-800 mb-4">Our Office</h4>
                    <p class="text-lg text-gray-600 mb-4">We are located at:</p>
                    <address class="text-gray-700">
                        123 Real Estate Street, Suite 100 <br>
                        City, State, 12345 <br>
                        Phone: (123) 456-7890
                    </address>

                    <h4 class="text-2xl font-semibold text-gray-800 mt-6 mb-4">Follow Us</h4>
                    <div class="flex space-x-6">
                        <a href="#" class="text-blue-600 hover:text-blue-700 transition duration-300">
                            <i class="fab fa-facebook-f"></i> Facebook
                        </a>
                        <a href="#" class="text-blue-600 hover:text-blue-700 transition duration-300">
                            <i class="fab fa-twitter"></i> Twitter
                        </a>
                        <a href="#" class="text-blue-600 hover:text-blue-700 transition duration-300">
                            <i class="fab fa-instagram"></i> Instagram
                        </a>
                    </div>
                </div>

                <!-- Google Map Embed -->
                <div>
                    <h4 class="text-2xl font-semibold text-gray-800 mb-4">Our Location</h4>
                    <iframe class="w-full h-64 rounded-lg shadow-lg" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d12517.210706132364!2d-74.005974!3d40.712776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a162d4d5f97%3A0x88b7cf1fe34a574f!2sNew%20York%20City%20Hall!5e0!3m2!1sen!2sus!4v1630962922785!5m2!1sen!2sus" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-6">
            <h3 class="text-3xl font-bold text-gray-800 mb-6">Get in Touch</h3>
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