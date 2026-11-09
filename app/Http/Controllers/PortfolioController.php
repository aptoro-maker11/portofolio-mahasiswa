<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolio = Portfolio::first();

        return view('home', compact('portfolio'));
    }

    public function about()
    {
        $portfolio = Portfolio::first();

        return view('about', compact('portfolio'));
    }

    public function skills()
    {
        return view('skills');
    }

    public function projects()
    {
        return view('projects');
    }

    public function contact()
    {
        return view('contact');
    }

    public function dashboard()
    {
        $portfolio = Portfolio::first();

        return view('dashboard', compact('portfolio'));
    }
}
