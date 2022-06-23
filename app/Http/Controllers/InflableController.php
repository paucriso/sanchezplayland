<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inflable;

class InflableController extends Controller
{
    public function index()
    {
        return view('brincolines.index');
    }

    public function show($slug)
    {
        $brincolin = Inflable::where('slug', '=', $slug)->firstOrFail();

        return view('brincolines.show', compact('brincolin'));
    }
}
