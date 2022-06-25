@extends('layouts.interior')
@section('title', 'Contacto')
    
@section('content')
<div class="section bg-white nosotros px-4 min-h-screen">
  <div class="lg:px-28">
    <div class="grid lg:grid-cols-2 gap-8">
      <div class="col">
        <h2 class="text-2xl lg:text-3xl text-center lg:text-left lg:mb-4">Contáctanos</h2>
        <p class="text-center lg:text-left">Envíanos un mensaje y cuéntanos que brincolines te interesan.</p>
        @isset($mensaje_enviado)
        <div class="mt-8 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
          <strong class="font-bold">¡Mensaje enviado!</strong>
          <span class="block sm:inline">Nos pondremos en contacto a la brevedad.</span>
        </div>
        @endisset
        <form action="{{route('contacto')}}" method="POST" class="mt-4" {{!empty($mensaje_enviado) ? 'hidden' : ''}}>
          @csrf
          <div class="mb-4">
            <label for="nombre" class="block mb-1 text-sm font-medium text-gray-500">Nombre</label>
            <input type="text" name="nombre" class="border border-slate-400 rounded-md w-full h-8" required>
          </div>
          <div class="mb-4">
            <label for="telefono" class="block mb-1 text-sm font-medium text-gray-500">Teléfono</label>
            <input type="tel" name="telefono" class="border border-slate-400 rounded-md w-full h-8" required>
          </div>
          <div class="mb-4">
            <label for="email" class="block mb-1 text-sm font-medium text-gray-500">Email</label>
            <input type="email" name="email" class="border border-slate-400 rounded-md w-full h-8" required>
          </div>
          <div class="mb-4">
            <label for="email" class="block mb-1 text-sm font-medium text-gray-500">Tipos de brincolines</label>
            <input  type="checkbox" name="nino" value="requiero" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Niño
            <input  type="checkbox" name="nina" value="requiero" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Niña
            <input  type="checkbox" name="toro" value="requiero" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Toro mecánico
            <input  type="checkbox" name="variedades" value="requiero" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Variedades
          </div>
          <div class="mb-4">
            <label for="email" class="block mb-1 text-sm font-medium text-gray-500">Email</label>
            <textarea type="text" name="mensaje" class="border border-slate-400 rounded-md w-full h-52"></textarea>
          </div>
          <div class="mb-4">
            <input class="cursor-pointer informacion-button text-white rounded-md py-2 px-3 w-full" type="submit" class="border border-slate-400 rounded-md w-full h-8" value="Enviar mensaje">
          </div>
        </form>
      </div>
      <div class="col mx-auto">
        <h5 class="subtitulo mt-4 text-center lg:text-left">Medios de contacto</h5>
        <div class="telefono-email mt-4">
          <div class="telefono flex items-center subtitulo justify-center lg:justify-start">
            <img src="/images/telefono.png" alt="" class="w-10">
            <span>(347) 208-1275</span>
          </div>
          <div class="email flex items-center mt-2 subtitulo">
            <img src="/images/email.png" alt="" class="w-10">
            <span class="ml-1">info@sanchezplayland.com</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> 
@endsection