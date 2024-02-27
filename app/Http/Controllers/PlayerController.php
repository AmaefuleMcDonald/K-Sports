<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;

class PlayerController extends Controller
{
    public function showFreeAgents()
    {
        $freeAgents = Player::where('is_free_agent', true)->get(); // Adjust the condition based on your database schema
    
        return view('admin.players.free_agents', compact('freeAgents'));
    }

    public function editAndrewBruce($id)
    {
        $player = Player::findOrFail($id); // Fetch the player by ID
        return view('admin.edit-andrew-bruce', compact('player')); // Pass player to view
    }
    

/**
     * Display a listing of the players.
     *
     * @return \Illuminate\Http\Response
     */
    public function listPlayers()
    {
        $players = Player::all(); // Fetch all players from the database

        // Return the admin view that lists the players.
        // Ensure you have a view file at resources/views/admin/players/index.blade.php
        return view('admin.players.index', compact('players'));
    }

    public function updateAndrewBruce(Request $request, Player $player)
    {
         // Authorize the update action
    $this->authorize('update', $player);
        // Validation rules for updating Andrew Bruce
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
             'ratings' => 'required|integer|min:0|max:100',     
            'position' => 'required|string|max:255',
            'version' => 'required|string|max:255',
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
            'body' => 'required|string|max:255',
            'popularity' => 'required|integer',
            'BS' => 'required|integer',
            'IGS' => 'required|integer',
            'club' => 'required|string|max:255',
            'league' => 'required|string|max:255',
            'country' => 'required|string|max:255',
        ]); 
       
   //return "Hello world";
  // $player->update($validatedData);
   return "Hello world";
   //return redirect()->route('admin.free.agents.show')->with('success', "Andrew Bruce's stats updated successfully.");
    }



    
    public function search(Request $request)
    {
        $query = Player::query();

       

        if ($request->filled('name')) {
            $query->where('name', 'LIKE', '%' . $request->name . '%');
            
        }
        if ($request->filled('position')) {
            $query->where('position', $request->position);
        }
        if ($request->filled('sho')) {
            $query->where('sho', '>=', $request->sho);
        }
        if ($request->filled('ratings')) {
            $query->where('ratings', '>=', $request->ratings);
        }
        if ($request->filled('country')) {
            $query->where('country', 'LIKE', '%' . $request->country . '%');
            
        }
        if ($request->filled('club')) {
            $query->where('club', 'LIKE', '%' . $request->club . '%');
        }
        if ($request->filled('dri')) {
            $query->where('dri', '>=', $request->dri);
        }
        if ($request->filled('pac')) {
            $query->where('pac', '>=', $request->pac);
        }
        if ($request->filled('phy')) {
            $query->where('phy', '>=', $request->phy);
        }
        if ($request->filled('league')) {
            $query->where('league', 'LIKE', '%' . $request->league . '%');
        }
 // Special condition for Andrew Bruce for authenticated users.
 if (!auth()->check()) {
    // If the user is not logged in, exclude "Andrew Bruce" from the results.
    $query->where('name', '!=', 'Andrew Bruce');
}
        $players = $query->get();
        // Return view with search results (you need to create this view)
        return view('players.search', compact('players'));
    }
    

}
