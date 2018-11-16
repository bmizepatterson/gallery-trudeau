<?php

namespace App\Http\Controllers;

use App\Exhibit;
use Carbon\Carbon;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome(Request $request) {
        // Gather exhibits created/updated today
        $exhibits = Exhibit::where('updated_at', '>=', Carbon::today())
            ->orderBy('updated_at', 'desc')
            ->get();
        return view('welcome', compact('exhibits'));
    }
}
