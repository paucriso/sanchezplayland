@extends('layouts.default')
@section('title', 'Home Page')
    

@section('content')
  @include('partials.slider')
 
  <div class="section second-content">
    <div class="lg:px-28">
      <div class="grid lg:grid-cols-4 mt-8">
        <div class="col mx-auto">
          <img class="inline-block" src="/images/calidad.png" alt="">
          <h3 class="mb-8">Calidad garantizada</h3>
        </div>
        <div class="col mx-auto">
          <img class="inline-block" src="/images/limpieza.png" alt="">
          <h3 class="mb-8">Limpieza inmejorable</h3>
        </div>
        <div class="col mx-auto">
          <img class="inline-block" src="/images/respuesta.png" alt="">
          <h3 class="mb-8">Entrega inmediata</h3>
        </div>
        <div class="col mx-auto">
          <img class="inline-block" src="/images/diversion.png" alt="">
          <h3>Diversión inolvidable</h3>
        </div>
      </div>
    </div>
  </div>
  
  <div class="divider mx-auto"></div>
  
  <div class="section last-section">
    <div class="lg:px-28 text-center">
      <h2 class="mb-12 text-3xl">¡Solicita tus brincolines!</h2>
      <div class="telefono-email flex flex-col lg:flex-row justify-around mb-16">
        <div class="telefono flex items-center mx-auto">
          <img src="/images/telefono.png" alt="">
          <span>(347) 208-1275</span>
        </div>
        <div class="email flex items-center mx-auto">
          <img src="/images/email.png" alt="">
          <span class="ml-1">info@sanchezplayland.com</span>
        </div>
      </div>
      <a href="/contacto" class="boton-reservar">Realizar reserva</a>
    </div>
  </div>
@endsection