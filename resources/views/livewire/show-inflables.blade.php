<div class="lg:px-28 seccion text-center section">
    <h2 class="text-3xl">Lista de brincolines</h2>
    <div class="filtro my-8">
        <button wire:click="todos" class="filter-button inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white rounded-lg {{($active_button === 'todos') ? 'active-button' : ''}}">Todos</button>
        <button wire:click="niños" class="filter-button inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white rounded-lg {{($active_button === 'niños') ? 'active-button' : ''}}">Niños</button>
        <button wire:click="niñas" class="filter-button inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white rounded-lg {{($active_button === 'niñas') ? 'active-button' : ''}}">Niñas</button>
        <button wire:click="toros" class="filter-button inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white rounded-lg {{($active_button === 'toros') ? 'active-button' : ''}}">Toro mecánico</button>
        <button wire:click="variedad" class="filter-button inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white rounded-lg {{($active_button === 'variedad') ? 'active-button' : ''}}">Variedad</button>
    </div>
    <div class="grid lg:grid-cols-4 gap-x-2 gap-y-8">
        @foreach ($brincolines as $brincolin)
        <div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md mx-auto">
            
            <img class="rounded-t-lg" src="{{$brincolin->image}}" alt="" />
            
            <div class="p-5">
                
                <h5 class="subtitulo mb-2 text-2xl font-bold tracking-tight text-gray-900">{{$brincolin->name}}</h5>
                
                <a href="{{route('brincolines.show', $brincolin->slug)}}" class="informacion-button inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white rounded-lg">
                    Más información
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>
