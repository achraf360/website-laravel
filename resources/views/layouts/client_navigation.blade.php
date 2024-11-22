<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <header class="flex flex-row bg-white text-white px-4 py-8 justify-between items-center">
        <h1 class="text-2xl text-red-500">Delis</h1>
        <nav class="flex justify-center items-center">
            <ul class="flex flex-row space-x-12 text-gray-700 font-bold uppercase text-xl ">
                <li><a href="{{ route('home') }}" class="hover:text-cyan-600 transition-colors duration-300">Nos produits</a></li>
                <li><a href="{{ route('home') }}" class="hover:text-cyan-600 transition-colors duration-300">Qui sommes nous</a></li>
            </ul>
        </nav>
    </header>
</nav>