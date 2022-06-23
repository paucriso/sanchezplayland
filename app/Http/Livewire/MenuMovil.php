<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MenuMovil extends Component
{
    public $toggle_menu = false;

    public function toggle_menu_button()
    {
        $this->toggle_menu = !$this->toggle_menu;
    }

    public function render()
    {
        return view('livewire.menu-movil');
    }
}
