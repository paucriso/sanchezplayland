@extends('layouts.interior')
@section('title')
    
@section('content')
<div class="section bg-white nosotros">
  <div class="lg:px-28">
    <div class="grid lg:grid-cols-2 gap-x-8">
      <div class="col text-center lg:text-left h-52 lg:h-full relative order-last lg:order-first px-4">
        <h2 class="text-2xl lg:text-3xl text-center lg:text-left">{{$brincolin->name}}</h2>
        <p>{{$brincolin->description}}</p>
        <a href="{{route('brincolines.index')}}" class="mt-8 lg:absolute lg:bottom-0 informacion-button inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white rounded-lg">Regresar al listado</a>
      </div>
      <div class="col mx-auto">
        <img class="w-4/5 mx-auto mb-8 lg:mb-0 lg:w-100 rounded-md shadow-md" src="{{$brincolin->image}}" alt="">
      </div>
    </div>
  </div>
</div> 
@endsection