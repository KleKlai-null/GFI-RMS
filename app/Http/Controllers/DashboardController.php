<?php

namespace App\Http\Controllers;
use App\Models\Form\FormStatistic;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{

    public function index() 
    {
        // $response = Http::get('https://zenquotes.io/api/random');
        // $quote= $response->json();
    
        $quote = [];

        $user = auth()->user();

        $formstatistic = cache()->remember('dashboard_form_statistic', 60*60*24, function() {
            return FormStatistic::select('id', 'total', 'open', 'closed', 'archived')->orderBy('id', 'asc')->get();
        });

        // $formstatistic = FormStatistic::select('id', 'total', 'open', 'closed', 'archived')->orderBy('id', 'asc')->get();

        $total = [];
        $open = [];
        $closed = [];
        $archived = [];

        foreach($formstatistic as $stat) {
            $total[] = $stat->total;
            $open[] = $stat->open;
            $closed[] = $stat->closed;
            $archived[] = $stat->archived;
        }

        //Check first the role of user
        if($user->hasPermissionTo('view dashboard')){
            return view('dashboard', compact('quote', 'total', 'open', 'closed', 'archived'));
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
