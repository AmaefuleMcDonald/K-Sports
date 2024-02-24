<?php

namespace App\Policies;

use App\Models\Player;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class PlayerPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Player $player): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
  public function create(User $user)
{
    //return true; // Temporarily allow all users to create players
}


    public function isAdmin()
{
    // Example condition, adjust based on your application logic
    return $this->role === 'admin';
}


  /**
 * Determine whether the user can update the model.
 *
 * @param  \App\Models\User  $user
 * @param  \App\Models\Player  $player
 * @return bool
 */
public function update(User $user, Player $player): bool
{
    // Check if the user is an admin
    // Assuming 'role' is a property of your User model that indicates the user's role
    return $user->role === 'admin';
}


    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Player $player): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Player $player): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Player $player): bool
    {
        //
    }
}
