<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        // You can return a view with dashboard-related data
        return view('dashboard'); // Make sure a dashboard.blade.php file exists in resources/views
    }

    public function index()
    {
        // Check if the user is authenticated
        if (auth()->check()) {
            // Retrieve properties for the authenticated user
            $properties = auth()->user()->properties;

            // Pass the properties to the view
            return view('properties.users-index', compact('properties'));
        }

        // If the user is not authenticated, redirect them to the login page
        return redirect()->route('login')->with('error', 'You must be logged in to view your properties.');
    }
}
