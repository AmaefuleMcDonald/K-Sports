<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LoginControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test the showLoginForm method.
     *
     * @return void
     */
    public function testShowLoginForm()
    {
        // Create a user for the sake of consistency with the other test
        // Not strictly necessary for testing a login form view, but it's here for structural consistency
        $user = User::factory()->create();

        // Though not required for simply viewing the login form, acting as a user can be relevant for consistency
        // If the login page behavior changes based on authentication state, consider adjusting or removing the actingAs part
        $response = $this->actingAs($user)->get('/login');

        // Assert that the response status is successful (i.e., a 200 status code)
        $response->assertStatus(200);

        // Assert that the correct view is being returned
        $response->assertViewIs('auth.login');

        // Optionally, assert that certain text exists within the view
        // This ensures that key elements of the login form are present
        $response->assertSee('Login');
        $response->assertSee('Password');
    }
}
