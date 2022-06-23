<div class="header">
  <div class="container mx-auto">

    <div class="grid grid-cols-1 lg:grid-cols-3">

      <div class="logo w-auto mx-auto">
        <img src="/images/logo.png" alt="Sanchezplayland">
      </div>

      <div class="mobile-menu bg-white w-36 mx-auto relative text-center md:hidden rounded-md">
        <!-- Mobile menu button-->
        <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-blue-500 hover:text-green-600 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
          <span class="sr-only">Abrir menu</span>
          <!--
            Icon when menu is closed.

            Heroicon name: outline/menu

            Menu open: "hidden", Menu closed: "block"
          -->
          <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
          <span>Menú</span>
          <!--
            Icon when menu is open.

            Heroicon name: outline/x

            Menu open: "block", Menu closed: "hidden"
          -->
          <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
        <div class="absolute w-36 text-center bg-white top-9 rounded-b-xl z-50">
          <ul class="px-4 text-blue-500">
            <li class="border-t border-b py-1 px-2">Inicio</li>
            <li class="border-t border-b py-1 px-2">Brincolines</li>
            <li class="border-t border-b py-1 px-2">Nosotros</li>
            <li class="border-t border-b py-1 px-2">Contacto</li>
          </ul>
        </div>
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
</div>