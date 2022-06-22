@extends('layouts.interior')
@section('title')
    
@section('content')
<div class="top-divisor">

</div>

<div class="section bg-white nosotros">
  <div class="lg:px-28">
    <div class="grid grid-cols-2 gap-x-8">
      <div class="col relative">
        <h2>{{$brincolin->name}}</h2>
        <p>{{$brincolin->description}}</p>
        <a href="{{route('brincolines.index')}}" class="absolute bottom-0 informacion-button inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white rounded-lg">Regresar al listado</a>
      </div>
      <div class="col mx-auto">
        <img class="w-100 rounded-md shadow-md" src="{{$brincolin->image}}" alt="">
      </div>
    </div>
  </div>
</div> 
@endsection