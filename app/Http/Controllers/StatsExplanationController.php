<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatsExplanationController extends Controller
{
    public function index()
    {
        return view('stats_explanation');
    }
}