<div>
    <div class="mobile-menu bg-white w-36 mx-auto relative text-center md:hidden rounded-md">
        <!-- Mobile menu button-->
        <button wire:click.defer="toggle_menu_button" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-blue-500 hover:text-green-600 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
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
        <div class="absolute w-36 text-center bg-white top-9 rounded-b-xl z-50 {{($toggle_menu == false) ? 'hidden' : 'block'}}">
            <ul class="px-4 text-blue-500">
            <li class="border-t border-b py-1 px-2"><a href="/">Inicio</a></li>
            <li class="border-t border-b py-1 px-2"><a href="/brincolines">Brincolines</a></li>
            <li class="border-t border-b py-1 px-2"><a href="/nosotros">Nosotros</a></li>
            <li class="border-t border-b py-1 px-2"><a href="/contacto">Contacto</a></li>
          </ul>
        </div>
      </div>
</div>
