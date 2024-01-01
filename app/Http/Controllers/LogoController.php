<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class LogoController extends Controller
{
    public function __invoke()
    {
        return Inertia::render('Logo');
    }
}