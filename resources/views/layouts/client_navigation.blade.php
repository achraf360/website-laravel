<nav x-data="{ open: false }" class="bg-white border-gray-100">
    <!-- Primary Navigation Menu -->
    <header class="flex flex-row bg-white text-white px-4 py-6 justify-between items-center">
        <a class="text-2xl text-red-500" href="/"><img src="{{ asset('images/Logo-delis.jpg') }}" alt="Logo" class="h-16 w-auto"></a>

        <nav class="flex justify-between items-center">
            <ul class="flex flex-row gap-8 text-gray-700 font-extrabold uppercase text-xl text-center">
                <li class="flex flex-col relative group items-center ">
                    <a href="{{ route('categories.index') }}" class="hover:text-cyan-600 transition-colors duration-300 flex flex-row pb-2">Nos produits<i class="fa-solid fa-chevron-down pl-2"></i></a>
                    <ul class="absolute hidden group-hover:block bg-white shadow-lg z-30 w-52 text-center mt-8">
                        @foreach($categories as $category)
                        <li><a href="{{ route('categories.show', $category->name) }}" class="block px-6 py-4 text-sm font-light text-gray-700 hover:bg-gray-100">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li><a href="{{ route('home') }}" class="hover:text-cyan-600 transition-colors duration-300">Qui sommes nous</a></li>
                <li><a href="{{ route('home') }}" class="hover:text-cyan-600 transition-colors duration-300">Contactez nous</a></li>
            </ul>
        </nav>
    </header>
</nav>