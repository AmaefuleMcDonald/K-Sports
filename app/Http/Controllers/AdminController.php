<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Player;


class AdminController extends Controller
{
    /**
     * Show the admin dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard(): Response
    {
        return response()->view('admin.dashboard');
    }
    
    public function listPlayers()
    {
        $players = Player::all();
        return view('admin.players.index', compact('players'));
    }

    public function createPlayer()
    {
        return view('admin.players.create');
    }

    public function storePlayer(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
        'name' => 'required|string|max:255',          // Player's name
        'club' => 'required|string|max:255',          // Player's club
        'age' => 'required|integer|min:0|max:100',    // Player's age
        'position' => 'required|string|max:255',      // Player's playing position
        'nationality' => 'required|string|max:255',   // Player's nationality
        'height' => 'nullable|numeric',               // Player's height
        'weight' => 'nullable|numeric',               // Player's weight
        ]);

        // Create a new player using the validated data
        $player = Player::create($validatedData);

        // Flash a success message to the session
        session()->flash('success', 'Player has been created successfully.');

        // Redirect back to the player creation page or to another page as desired
        return redirect()->route('admin.players.create');
    }

    public function editPlayer(Player $player)
    {
        return view('admin.players.edit', compact('player'));
    }

    public function updatePlayer(Request $request, Player $player)
    {
        // Validate and update player
    }

    public function deletePlayer(Player $player)
    {
        $player->delete();
        return redirect()->route('admin.players.list');
    }
}
