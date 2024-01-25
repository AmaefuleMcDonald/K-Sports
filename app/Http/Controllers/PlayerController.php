<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;

class PlayerController extends Controller
{
    public function search(Request $request)
    {
        // Retrieve search query from request
        $query = $request->input('name');

        // Search in the players table
        $players = Player::where('name', 'like', '%' . $query . '%')->get();

        // Return view with search results (you need to create this view)
        return view('players.search', compact('players'));
    }
}
