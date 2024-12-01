<!-- <nav x-data="{ open: false }" class="bg-white border-gray-100">
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
</nav> -->

<!-- component -->
<!-- This is an example component -->

<div class="py-6 px-5 bg-white rounded shadow-xl">
    <ul class="flex w-full flex-wrap items-center justify-between">
        <li class="block relative">
            <a href="/" class="flex items-center cursor-pointer">
                <img src="{{ asset('images/Logo-delis.jpg') }}" alt="Logo" class="h-20 w-auto">
            </a>
        </li>
        <div class="flex flex-row text-xl font-normal text-gray-600">
            <li class="block relative" x-data="{showChildren:false}" @click.away="showChildren=false">
                <a href="" class="flex items-center h-16 leading-10 px-4 rounded cursor-pointer no-underline hover:no-underline transition-colors duration-100 mx-1 hover:bg-gray-100" @click.prevent="showChildren=!showChildren">
                    <span>Nos produits</span><i class="fa-solid fa-chevron-down pl-2"></i>
                </a>
                <div class="bg-white shadow-md rounded border border-gray-300 text-sm absolute top-auto left-0 min-w-full w-56 z-30 mt-1" x-show="showChildren" x-transition:enter="transition ease duration-300 transform" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease duration-300 transform" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-4" style="display: none;">
                    <span class="absolute top-0 left-0 w-3 h-3 bg-white border transform rotate-45 -mt-1 ml-6"></span>
                    <div class="bg-white rounded w-full relative z-10 py-1">
                        <ul class="list-reset font-normal text-base">
                            @foreach($categories as $category)
                            <li class="relative" x-data="{showChildren:false}" @mouseleave="showChildren=false" @mouseenter="showChildren=true">
                                <a href="{{ route('categories.show', $category->name) }}" class="px-4 py-4 flex w-full items-start hover:bg-gray-100 no-underline hover:no-underline transition-colors duration-100 cursor-pointer"> <span class="flex-1">{{ $category->name }}</span> </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </li>
            <li class="block relative">
                <a href="" class="flex items-center h-16 leading-10 px-4 rounded cursor-pointer no-underline hover:no-underline transition-colors duration-100 mx-1 hover:bg-gray-100">
                    Contactez-nous
                </a>
            </li>
        </div>

    </ul>

</div>