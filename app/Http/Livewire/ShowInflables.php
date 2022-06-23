<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Inflable;
use App\Models\Category;

class ShowInflables extends Component
{
    public $filtro = 'todos';
    public $active_button = '';

    public function todos()
    {
        $this->filtro = 'todos';
        $this->active_button = 'todos';
    }

    public function niños()
    {
        $this->filtro = 'niños';
        $this->active_button = 'niños';
    }

    public function niñas()
    {
        $this->filtro = 'niñas';
        $this->active_button = 'niñas';
    }

    public function toros()
    {
        $this->filtro = 'toros';
        $this->active_button = 'toros';
    }

    public function variedad()
    {
        $this->filtro = 'variedad';
        $this->active_button = 'variedad';
    }

    public function render()
    {
        switch ($this->filtro) {
            case 'todos':
                $brincolines = Inflable::all();
                break;

            case 'niños':
                $brincolines = Category::where('name', 'niños')->first()->inflables;
                break;

            case 'niñas':
                $brincolines = Category::where('name', 'niñas')->first()->inflables;
                break;

            case 'toros':
                $brincolines = Category::where('name', 'toros mecánicos')->first()->inflables;
                break;

            case 'variedad':
                $brincolines = Category::where('name', 'variedad')->first()->inflables;
                break;
        }

        return view('livewire.show-inflables', compact('brincolines'));
    }
}
