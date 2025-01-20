<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductivityController extends Controller
{
    public function loadProductivity()
    {
        
        return Inertia::render('Productivity/ProductivityDashboard');
    }
}
