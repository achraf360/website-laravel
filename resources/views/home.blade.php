@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section class="flex flex-col relative bg-cover bg-center h-fit w-screen overflow-hidden py-20 bg-white" style="background-image: url('/images/home-top-bg.jpg');">
  <!-- <div class="absolute inset-0 bg-black opacity-50"></div> -->
  <div class="relative z-10 flex flex-col items-start justify-center h-full text-start w-1/2 pl-4">
    <h1 class="text-5xl font-bold mb-4">L’Excellence de la <span class="text-indigo-800">Boulangerie</span> et <span class="text-green-800">Viennoiserie</span> industrielles</h1>
    <p class="text-base text-slate-500 mb-8">Chez DELI’S, nous allions innovation et qualité pour offrir une large gamme de produits en boulangerie, pâtisserie, viennoiserie et snacking. Partenaire privilégié des professionnels CHR à travers tout le Maroc, nous nous engageons à fournir des produits performants et un service irréprochable.</p>

    <a href="categories/boulangerie"
      class="inline-block py-2 px-6 rounded-l-xl rounded-t-xl bg-indigo-800 hover:bg-[#6FB72B] focus:bg-gray-200 text-gray-50 font-bold leading-loose transition duration-200">
      Découvrir nos produits
    </a>
  </div>
  <div class="flex flex-row px-10 py-10 gap-8">
    <div class="flex flex-col">
      <span class="text-2xl font-bold">
        +15 Années
      </span>
      <span class="text-gray-600">
        Expérience
      </span>
    </div>
    <div class="flex flex-col">
      <span class="text-2xl font-bold">
        +200
      </span>
      <span class="text-gray-600">
        Produits
      </span>
    </div>
    <div class="flex flex-col">
      <span class="text-2xl font-bold">
        99.8%
      </span>
      <span class="text-gray-600">
        Satisfaction
      </span>
    </div>
  </div>
</section>


<section
  class="w-full flex flex-col gap-8 bg-slate-100">
  <div class="flex flex-col md:flex-row gap-4 px-4 pt-10 lg:pt-20">
    <div class="flex md:flex-row-reverse items-start justify-center md:w-1/2">
      <img
        src="/images/Viennoiseries-Cat.jpg"
        alt="Viennoiserie"
        class="object-contain rounded-xl shadow-2xl shadow-gray-500/50 h-4/5" />
    </div>
    <div class="flex flex-col md:w-1/2 md:pr-10 lg:pr-40">
      <h1
        class="text-2xl md:text-2xl font-yellowtail text-chopain-red opacity-75">
        à propos de nous
      </h1>
      <h1
        class=" decoration-chopain-orange text-2xl lg:text-4xl font-black text-black mb-6">
        Solution Complète Adaptée à Vos Besoins
      </h1>
      <p class="font-light text-xl md:text-base w-full">
        On propose une solution clé en main qui combine une gamme diversifiée de produits et un service professionnel. Avec plus de 200 références en boulangerie, viennoiserie, pâtisserie et snacking, nous vous offrons des produits performants, prêts à satisfaire les attentes de vos clients tout en s’intégrant parfaitement à votre activité.
        <br />
        <br />
        Nos produits sont soigneusement stockés dans des conditions optimales et prêts à être préparés rapidement, garantissant une fraîcheur et une qualité constantes.
      </p>
      <div class="flex mt-10 gap-6 text-orange-800 mb-10">
        <a
          href="#"
          class="flex items-center justify-between pointer-events-none">
          <i class="fa-regular fa-star text-3xl items-center"></i>
          <span class="flex-shrink px-4 font-semibold">
            Qualité <br />
            Constante
          </span>
        </a>
        <a
          href="#"
          class="flex items-center justify-between pointer-events-none">
          <i class="fa-solid fa-wand-magic-sparkles text-3xl items-center"></i>
          <span class="flex-shrink px-4 font-semibold">
            Fraîcheur <br />
            Garanties
          </span>
        </a>
        <a
          href="#"
          class="flex items-center justify-between pointer-events-none">
          <i class="fa-regular fa-circle-check text-3xl items-center"></i>
          <span class="flex-shrink px-4 font-semibold">
            Service <br />
            Réactif
          </span>
        </a>
      </div>
      <div class="flex">
        <a href="/contact-us"
          class="inline-block py-2 px-6 rounded-l-xl rounded-t-xl bg-indigo-800 hover:bg-[#6FB72B] focus:bg-gray-200 text-gray-50 font-bold leading-loose transition duration-200">
          Contactez-Nous
        </a>
      </div>
    </div>
  </div>
</section>


<section class="p-8 bg-white">
  <h1 class="text-5xl font-extrabold text-center text-gray-700 py-12">Nos Categories</h1>


  <ul class="list-disc pl-5 grid grid-flow-row grid-cols-3 place-items-center gap-4">
    @foreach($categories as $category)
    <!-- <a href="{{ route('categories.show', $category->id) }}"> -->
    <a href="{{ route('categories.show', $category->slug) }}"
      class="flex items-center relative bg-cover bg-center overflow-hidden w-full h-80 rounded-3xl cursor-pointer text-2xl font-bold" style="background-image: url('{{ $category->image }}');">

      <div class="z-10 absolute w-full h-full peer"></div>
      <div
        class="absolute peer-hover:-top-20 peer-hover:-left-16 peer-hover:w-[140%] peer-hover:h-[140%] -top-32 -left-16 w-32 h-44 rounded-full bg-blue-900 transition-all duration-500"></div>
      <div
        class="absolute flex text-xl text-center items-end justify-end peer-hover:right-0 peer-hover:rounded-b-none peer-hover:bottom-0 peer-hover:items-center peer-hover:justify-center peer-hover:w-full peer-hover:h-full -bottom-32 -right-16 w-36 h-44 rounded-full bg-blue-900 transition-all duration-500 text-white uppercase font-extrabold">
        {{$category->name}}
      </div>
      <!-- <div class="w-full h-full items-center justify-center flex uppercase">
        hover me
      </div> -->

    </a>

    @endforeach
  </ul>
</section>
@endsection