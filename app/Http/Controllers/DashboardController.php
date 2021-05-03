<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return Inertia::render('Dashboard');
    }

    public function me()
    {
        $user = auth()->user();

        return Inertia::render('Me', [
            'registeredAtHuman' => $user->created_at->diffForHumans(),
        ]);
    }
}
