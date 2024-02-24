<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{

    public function dashboard()
    {
        // Your logic here. For example, return a view:
        return view('admin.dashboard');
    }
    
    public function editPlayer(Player $player)
    {
        // Check if the player is Andrew Bruce and if the authenticated user is an admin
        if ($player->name == "Andrew Bruce" && auth()->user()->is_admin) {
            return view('admin.players.edit', compact('player'));
        }
    
        // Redirect back if the player is not Andrew Bruce or if the user is not an admin
        return back()->with('error', 'Unauthorized access.');
    }
    
    public function updatePlayer(Request $request, Player $player)
    {
        // Similar authorization check as in editPlayer
        if ($player->name == "Andrew Bruce" && auth()->user()->is_admin) {
            // Validate request data and update player
            $player->update($request->all());
    
            return redirect()->route('admin.players.list')->with('success', 'Player updated successfully.');
        }
    
        return back()->with('error', 'Unauthorized access.');
    }
    

    public function createPlayer()
    {
        $this->authorize('create', Player::class); // Ensure this line is present to enforce the policy
        return view('admin.players.create');
    }
    
    
    public function storePlayer(Request $request)
    {
        
        $validatedData = $request->validate([
            'Name' => 'required|string|max:255',
            'Ratings' => 'required|integer|min:0|max:100',
            'Position' => 'required|string|max:255',
            'Version' => 'required|string|max:255',
            'PS' => 'nullable|string|max:255',
            'SKI' => 'required|integer|min:0|max:5',
            'WF' => 'required|integer|min:0|max:5',
            'WR' => 'required|string|max:255',
            'PAC' => 'required|integer|min:0|max:100',
            'SHO' => 'required|integer|min:0|max:100',
            'PAS' => 'required|integer|min:0|max:100',
            'DRI' => 'required|integer|min:0|max:100',
            'DEF' => 'required|integer|min:0|max:100',
            'PHY' => 'required|integer|min:0|max:100',
            'Body' => 'required|string|max:255',
            'Popularity' => 'required|integer',
            'BS' => 'required|integer',
            'IGS' => 'required|integer',
            'Club' => 'required|string|max:255',
            'League' => 'required|string|max:255',
            'Country' => 'required|string|max:255',
        ]);

        Player::create($validatedData);

        return redirect()->route('admin.players.list')->with('success', 'Player created successfully!');
    }

    // Other methods...
}
