<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Estate Website</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <!-- Header Section -->
    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-gray-800">Real Estate</h1>
            <nav>
                <ul class="flex space-x-6">
                    <li><a href="/" class="text-gray-600 hover:text-blue-600 transition duration-300">Home</a></li>
                    <li><a href="/properties" class="text-gray-600 hover:text-blue-600 transition duration-300">Properties</a></li>
                    <!-- Show 'Create Property' link only if the user is logged in -->
                    @auth
                    <li><a href="{{ route('properties.create') }}" class="text-gray-600 hover:text-blue-600 transition duration-300">Create Property</a></li>
                    @endauth
                    <li><a href="/about" class="text-gray-600 hover:text-blue-600 transition duration-300">About</a></li>
                    <li><a href="/contact" class="text-gray-600 hover:text-blue-600 transition duration-300">Contact</a></li>

                    <!-- Authentication Links -->
                    @auth
                    <li><a href="{{ route('dashboard') }}" class="text-gray-600 hover:text-blue-600 transition duration-300">Dashboard</a></li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf
                            <button type="submit" class="text-gray-600 hover:text-blue-600 transition duration-300">Logout</button>
                        </form>
                    </li>
                    @else
                    <li><a href="{{ route('login') }}" class="text-gray-600 hover:text-blue-600 transition duration-300">Login</a></li>
                    <li><a href="{{ route('register') }}" class="text-gray-600 hover:text-blue-600 transition duration-300">Sign Up</a></li>
                    @endauth
                </ul>
            </nav>
        </div>
    </header>

    <!-- Main Content Section (Passed from child views) -->
    {{ $slot }}

</body>

</html>