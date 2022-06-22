<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Inflable;
use App\Models\Category;

class ShowInflables extends Component
{
    public $filtro = 'todos';

    public function todos()
    {
        $this->filtro = 'todos';
    }

    public function niños()
    {
        $this->filtro = 'niños';
    }

    public function niñas()
    {
        $this->filtro = 'niñas';
    }

    public function toros()
    {
        $this->filtro = 'toros';
    }

    public function variedad()
    {
        $this->filtro = 'variedad';
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
