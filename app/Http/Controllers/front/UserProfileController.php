<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User; // Assuming you have a User model
use App\Models\Player; // Assuming you have a Player model

class UserProfileController extends Controller
{
public function show($userId)
{
    $user = User::with('favoritePlayers')->find($userId);
    $favoritePlayers = $user->favoritePlayers;

    return view('user.profile', ['favoritePlayers' => $favoritePlayers]);
}

}