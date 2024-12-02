@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')



<section
  class=" bg-gray-200 dark:bg-slate-800"
  id="contact">
  <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8 lg:py-20">
    <div class="mb-4">

      <div class="mb-6 max-w-3xl text-center sm:text-center md:mx-auto md:mb-12">
        <h2 class=" mb-4 font-bold tracking-tight text-chopain-orange text-3xl sm:text-5xl">
          Contactez-Nous
        </h2>
        <p class="mx-auto mt-4 max-w-3xl text-xl font-normal text-gray-600 dark:text-slate-400">
          Des questions ou des remarques ? Envoyez-nous un message !
        </p>
      </div>
      @if (session('success'))
      <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
        <strong class="font-bold">Success!</strong>
        <span class="block sm:inline">{{ session('success') }}</span>
      </div>
      @endif
      <div class="flex flex-col-reverse lg:flex-row bg-white rounded-md text-white px-2 py-2">

        <div class="basis-2/5 bg-yellow-500 rounded-md pt-6 pl-10 overflow-hidden">
          <div class="titles pb-32">
            <h1 class="text-2xl sm:text-3xl font-semibold pb-2 text-black">
              Contact Informations
            </h1>
            <span class="font-normal text-gray-700">
              Vous trouverez nos coordonnées juste en dessous !
            </span>
          </div>
          <div class="flex flex-col gap-12 font-light text-base mb-28 text-black">
            <div class="flex items-center">
              <div class="basis-16">
                <i class="fa-solid fa-phone text-3xl"></i>
              </div>
              <div class="pt-1 font-medium">
                850-123-5021
              </div>
            </div>
            <div class="flex items-center">
              <div class="basis-16">
                <i class="fa-solid fa-envelope text-3xl"></i>
              </div>
              <div class="pt-1 font-medium">
                info@lorem.mail
              </div>
            </div>
            <div class="flex items-center">
              <div class="basis-16">
                <i class="fa-solid fa-location-dot text-3xl"></i>
              </div>
              <div class="basis-2/3 rounded-3xl font-medium">
                312 Lovely Street, NY
              </div>
            </div>
          </div>
          <div class="relative flex flex-row-reverse">
            <div class="w-32 h-32 bg-chopain-red rounded-full mr-12 opacity-30"></div>
            <div class="absolute w-48 h-48 bg-chopain-red rounded-full -right-10 -bottom-24 opacity-40"></div>
          </div>

          <div class="social-media flex flex-row gap-6 mb-4 mr-20">
            <button class="w-10 h-10 bg-black rounded-full flex items-center justify-center duration-300 hover:-translate-y-1">
              <i class="fa-brands fa-facebook text-2xl"></i>
            </button>
            <button class="w-10 h-10 bg-black rounded-full flex items-center justify-center duration-300 hover:-translate-y-1">
              <i class="fa-brands fa-instagram text-2xl"></i>
            </button>
            <button class="w-10 h-10 bg-black rounded-full flex items-center justify-center duration-300 hover:-translate-y-1">
              <i class="fa-brands fa-twitter text-2xl"></i>
            </button>
          </div>
        </div>

        <div class="basis-3/5 text-black pl-6 font-normal pr-10">
          <form action="{{ route('contact.send') }}" method="POST">
            @csrf
            <div class="grid sm:grid-cols-1 md:grid-cols-2 md:gap-6 mt-8">

              <div
                class="relative z-0 w-full mb-5 group">
                <input
                  type="text"
                  name="name"
                  id="name"
                  class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-950 focus:outline-none focus:ring-0 focus:border-gray-950 peer"
                  placeholder=" "
                  required />
                <label
                  for="name"
                  class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-gray-950 peer-focus:dark:text-gray-950 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                  Nom et Prénom
                </label>
              </div>
              <div
                class="relative z-0 w-full mb-5 group">
                <input
                  type="email"
                  name="email"
                  id="email"
                  class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-950 focus:outline-none focus:ring-0 focus:border-gray-950 peer"
                  placeholder=" "
                  required />
                <label
                  for="email"
                  class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-gray-950 peer-focus:dark:text-gray-950 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                  Email
                </label>
              </div>
              <div
                class="relative z-0 w-full mb-5 group">
                <input
                  type="number"
                  name="phone"
                  id="phone"
                  class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-950 focus:outline-none focus:ring-0 focus:border-gray-950 peer"
                  placeholder=" "
                  required />
                <label
                  for="phone"
                  class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-gray-950 peer-focus:dark:text-gray-950 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                  Téléphone
                </label>
              </div>
            </div>

            <div class="grid md:grid-cols-1 md:gap-6 mt-8">
              <div class="relative z-0 w-full mb-5 group">
                <textarea
                  name="message"
                  id="message"
                  class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-950 focus:outline-none focus:ring-0 focus:border-gray-950 peer"
                  placeholder=" "
                  rows="4"
                  required></textarea>
                <label
                  for="message"
                  class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-gray-950 peer-focus:dark:text-gray-950 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                  Message
                </label>
              </div>
            </div>
            <div class="flex justify-end mt-10 mb-10">
              <button type="submit" class="inline-block py-2 px-6 rounded-l-xl rounded-t-xl bg-indigo-800 hover:bg-[#6FB72B] focus:bg-gray-200 text-gray-50 font-bold leading-loose transition duration-200">
                Envoyer
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>


@endsection