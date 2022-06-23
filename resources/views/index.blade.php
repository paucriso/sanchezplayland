@extends('layouts.default')
@section('title', 'Home Page')
    

@section('content')
  @include('partials.slider')

  <div class="section first-content">
    <div class="lg:px-28">
      <div class="grid grid-cols-2">
        <div class="col">
          <h2>Lorem ipsum dolor sit</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Voluptate mollitia tenetur earum dolore, eveniet consequatur.</p>
            <img class="inflables mt-12" src="/images/inflables.png" alt="">
        </div>
        <div class="col flex justify-center">
          <img src="/images/happy_kids.png" alt="">
        </div>
      </div>
    </div>
  </div>
  
  <div class="section second-content">
    <div class="lg:px-28">
      <h2 class="mb-12">Loprem ipsum dolor</h2>
      <div class="grid grid-cols-4">
        <div class="col mx-auto">
          <img class="inline-block" src="/images/calidad.png" alt="">
          <h3>Calidad garantizada</h3>
        </div>
        <div class="col mx-auto">
          <img class="inline-block" src="/images/limpieza.png" alt="">
          <h3>Calidad garantizada</h3>
        </div>
        <div class="col mx-auto">
          <img class="inline-block" src="/images/respuesta.png" alt="">
          <h3>Calidad garantizada</h3>
        </div>
        <div class="col mx-auto">
          <img class="inline-block" src="/images/diversion.png" alt="">
          <h3>Calidad garantizada</h3>
        </div>
      </div>
    </div>
  </div>
  
  <div class="divider mx-auto"></div>
  
  <div class="section last-section">
    <div class="lg:px-28 text-center">
      <h2 class="mb-12 titulo-alt">¡Solicita tus brincolines!</h2>
      <div class="telefono-email flex justify-around mb-16">
        <div class="telefono flex items-center">
          <img src="/images/telefono.png" alt="">
          <span>+1 (347) 208-1275</span>
        </div>
        <div class="email flex items-center">
          <img src="/images/email.png" alt="">
          <span class="ml-1">info@sanchezplayland.com</span>
        </div>
      </div>
      <a href="/contacto" class="boton-reservar">Realizar reserva</a>
    </div>
  </div>
@endsection