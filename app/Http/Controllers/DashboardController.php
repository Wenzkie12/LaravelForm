<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth; // Import the Auth facade

class DashboardController extends Controller
{
    public function index()
    {
        // Add any logic you want to execute before rendering the dashboard view
        return view('dashboard');
    }

    public function logout()
    {
        Auth::logout(); // This will clear the authenticated user's session

        return redirect()->route('login'); // Redirect to the login page after logout
    }
}
