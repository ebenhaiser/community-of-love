<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class dashboardController extends Controller
{
    public function dashboard(): View
    {
        return view('dashboard');
    }
}
