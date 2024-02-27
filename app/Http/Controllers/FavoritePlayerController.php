<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Player;

class FavoritePlayerController extends Controller
{
    public function showFavorites()
    {
        $user = auth()->user(); // Ensure you have user authentication in place
        $favorites = $user->favoritePlayers;
        return view('favorites.index', compact('favorites'));
    }
    
   

// To remove a favorite player
// In FavoritePlayerController.php
public function toggleFavorite(Player $player)
{
    $user = auth()->user(); // Ensure you have user authentication in place
    $user->favoritePlayers()->toggle($player->id);
    return back();
}


}
