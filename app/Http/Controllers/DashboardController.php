<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class DashboardController extends Controller
{

    public function index() 
    {
        $response = Http::get('https://zenquotes.io/api/random');
        $quote= $response->json();
    
        return view('dashboard', compact('quote'));
    }
}
