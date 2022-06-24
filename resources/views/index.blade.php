@extends('layouts.default')
@section('title', 'Home Page')
    

@section('content')
  @include('partials.slider')

  <div class="section first-content">
    <div class="lg:px-28">
      <div class="px-2 grid lg:grid-cols-2">
        <div class="col text-center lg:text-left">
          <h2 class="text-3xl lg:text-4xl">Lorem ipsum dolor sit</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Voluptate mollitia tenetur earum dolore, eveniet consequatur.</p>
            <img class="mt-12 w-4/5 mx-auto lg:ml-0 mb-8 lg:mb-0 text-center" src="/images/inflables.png" alt="">
        </div>
        <div class="col flex justify-center">
          <img src="/images/happy_kids.png" alt="" class="w-60 lg:w-fit">
        </div>
      </div>
    </div>
  </div>
  
  <div class="section second-content">
    <div class="lg:px-28">
      <h2 class="mb-12 text-3xl lg:text-4xl">Loprem ipsum dolor</h2>
      <div class="grid lg:grid-cols-4">
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
          <span>+1 (347) 208-1275</span>
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