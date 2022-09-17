<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class DashboardController extends Controller
{

    public function index() 
    {
        // $response = Http::get('https://zenquotes.io/api/random');
        // $quote= $response->json();
    
        $quote = [];

        $user = auth()->user();

        //Check first the role of user
        if($user->hasAnyRole('administrator')){
            return view('dashboard', compact('quote'));
        }

        // Check if the user has permission to
        if($user->hasPermissionTo('view mi')){
            return redirect()->route('mi');
        } else if($user->hasPermissionTo('view mro')){
            return redirect()->route('mro');
        } else if($user->hasPermissionTo('view dm')){
            return redirect()->route('mro');
        } else if($user->hasPermissionTo('view fg')){
            return redirect()->route('mro');
        } else if($user->hasPermissionTo('view fa')){
            return redirect()->route('mro');
        } else if($user->hasPermissionTo('view ma')){
            return redirect()->route('mro');
        } else if($user->hasPermissionTo('view sc')){
            return redirect()->route('mro');
        } else if($user->hasPermissionTo('view rs')){
            return redirect()->route('mro');
        } else {
            return abort(503);
        }
    }
}
