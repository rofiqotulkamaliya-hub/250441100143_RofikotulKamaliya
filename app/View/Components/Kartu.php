<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Kartu extends Component
{
    public $judul;

    public function __construct($judul = null)
    {
        $this->judul = $judul;
    }

    public function render(): View|Closure|string
    {
        return view('components.kartu');
    }
}