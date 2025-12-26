<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Outdoor Advertising</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Add custom styles if needed */
    </style>
</head>

<body class="bg-gray-100 text-gray-800">

    <!-- Navigation Bar -->
    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="max-w-screen-xl mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#" class="text-2xl font-semibold text-blue-600">Logo</a>
            <nav>
                <ul class="flex space-x-6 text-gray-600">
                    <li><a href="#" class="hover:text-blue-600">Home</a></li>
                    <li><a href="#about" class="hover:text-blue-600">About</a></li>
                    <li><a href="#media" class="hover:text-blue-600">Media</a></li>
                    <li><a href="#contact" class="hover:text-blue-600">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative bg-cover bg-center h-screen" style="background-image: url('your-image-url-here.jpg');">
        <div class="absolute inset-0 bg-black bg-opacity-50 flex justify-center items-center">
            <div class="text-center text-white">
                <h1 class="text-4xl font-bold mb-4">Digital Outdoor Advertising Platform</h1>
                <p class="text-xl mb-6">Introducing the best way to advertise outdoors with our digital screens</p>
                <a href="#contact" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700">Get Started</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-white">
        <div class="max-w-screen-xl mx-auto px-6 text-center">
            <h2 class="text-3xl font-semibold mb-4">About Us</h2>
            <p class="text-lg text-gray-600 mb-6">We offer cutting-edge digital advertising solutions that help brands reach their audience effectively in urban spaces.</p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white shadow-lg p-6 rounded-lg">
                    <img src="your-image-url-here.jpg" alt="image" class="w-full h-48 object-cover rounded-t-lg mb-4">
                    <h3 class="text-xl font-semibold mb-2">Media 1</h3>
                    <p class="text-gray-600">Description of the media type or advertising solution.</p>
                </div>
                <div class="bg-white shadow-lg p-6 rounded-lg">
                    <img src="your-image-url-here.jpg" alt="image" class="w-full h-48 object-cover rounded-t-lg mb-4">
                    <h3 class="text-xl font-semibold mb-2">Media 2</h3>
                    <p class="text-gray-600">Description of the media type or advertising solution.</p>
                </div>
                <div class="bg-white shadow-lg p-6 rounded-lg">
                    <img src="your-image-url-here.jpg" alt="image" class="w-full h-48 object-cover rounded-t-lg mb-4">
                    <h3 class="text-xl font-semibold mb-2">Media 3</h3>
                    <p class="text-gray-600">Description of the media type or advertising solution.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Image Slider Section (Carousel) -->
    <section id="media" class="py-20 bg-gray-100">
        <div class="max-w-screen-xl mx-auto px-6 text-center">
            <h2 class="text-3xl font-semibold mb-4">Our Media</h2>
            <div class="flex justify-center space-x-6">
                <div class="w-1/2 md:w-1/3 bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="your-image-url-here.jpg" alt="image" class="w-full h-48 object-cover">
                </div>
                <div class="w-1/2 md:w-1/3 bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="your-image-url-here.jpg" alt="image" class="w-full h-48 object-cover">
                </div>
                <div class="w-1/2 md:w-1/3 bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="your-image-url-here.jpg" alt="image" class="w-full h-48 object-cover">
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="py-20 bg-white" id="map">
        <div class="max-w-screen-xl mx-auto px-6">
            <h2 class="text-3xl font-semibold text-center mb-6">Find Our Locations</h2>
            <div class="relative h-96 bg-gray-200">
                <!-- Embed map iframe here -->
                <iframe class="w-full h-full" src="https://www.google.com/maps/embed?pb=your-map-embed-url" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gray-100">
        <div class="max-w-screen-xl mx-auto px-6 text-center">
            <h2 class="text-3xl font-semibold mb-6">Contact Us</h2>
            <form action="#" method="POST" class="bg-white p-8 rounded-lg shadow-lg mx-auto max-w-md">
                <div class="space-y-4">
                    <input type="text" name="name" placeholder="Your Name" class="w-full p-4 border border-gray-300 rounded-lg">
                    <input type="email" name="email" placeholder="Your Email" class="w-full p-4 border border-gray-300 rounded-lg">
                    <textarea name="message" placeholder="Your Message" rows="4" class="w-full p-4 border border-gray-300 rounded-lg"></textarea>
                    <button type="submit" class="w-full bg-blue-600 text-white p-4 rounded-lg hover:bg-blue-700">Submit</button>
                </div>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-6">
        <div class="max-w-screen-xl mx-auto px-6 text-center">
            <p>&copy; 2025 Digital Outdoor Advertising. All rights reserved.</p>
        </div>
    </footer>

</body>

</html>
