<div class="header-2 relative">
  <div class="container mx-auto">

    <div class="grid grid-cols-1 lg:grid-cols-3">

      <div class="logo w-auto mx-auto">
        <img src="/images/logo.png" alt="Sanchezplayland">
      </div>

      <div class="md:hidden">
        @livewire('menu-movil')
      </div>

      <div class="hidden md:block navbar mx-auto lg:col-span-2 lg:mt-8">
        <div class="top-nav">
          <img src="/images/nubes_t_570x38.png" alt="">
        </div>
        <div class="middle-nav">
          <ul class="navbar flex justify-between px-12 text-xl">
            <li><a href="/" class="{{(request()->is('/')) ? 'active' : ''}}">Inicio</a></li>
            <li><a href="/brincolines" class="{{(request()->is('brincolines*')) ? 'active' : ''}}">Brincolines</a></li>
            <li><a href="/nosotros" class="{{(request()->is('nosotros')) ? 'active' : ''}}">Nosotros</a></li>
            <li><a href="/contacto" class="{{(request()->is('contacto')) ? 'active' : ''}}">Contacto</a></li>
          </ul>
        </div>
        <div class="bottom-nav">
          <img src="/images/nubes_b_570x26.png" alt="">
        </div>
      </div>
    </div>
  </div>
  <div class="adorno-ninos-1 absolute w-60 bottom-0 left-2/4 -translate-x-2/4 md:hidden lg:block lg:left-1/4">
    <img src="/images/adorno-ninos-1.png" alt="">
  </div>
  <div class="adorno-ninos-2 absolute right-1/4 bottom-0 w-60 hidden lg:block">
    <img src="/images/adorno-ninos-2.png" alt="">
  </div>
  <div class="top-divisor">

  </div>
</div>