<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Player;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class FavoritePlayerTest extends TestCase
{
    use RefreshDatabase;

    public function testUserCanViewFavorites()
    {
        $user = User::factory()->create();

        $this->actingAs($user)->get(route('favorites.index'))
             ->assertOk()
             ->assertViewIs('favorites.index'); 
       
    }
}
