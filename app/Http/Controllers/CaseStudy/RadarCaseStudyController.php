<?php

namespace App\Http\Controllers\CaseStudy;

use App\Http\Controllers\Controller;
use Inertia\Inertia;

class RadarCaseStudyController extends Controller
{
    public function __invoke()
    {
        return Inertia::render('CaseStudy/Radar');
    }
}
