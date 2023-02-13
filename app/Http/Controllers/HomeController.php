<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class HomeController extends Controller
{
    /**
     * Returns the marketing page
     *
     * @return Response
     */
    public function welcome(): Response
    {
        return Inertia::render('Welcome');
    }
}
