<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DidYouKnowFactsTest extends TestCase
{
    /**
     * Test if the Did You Know facts are visible on the homepage.
     */
    public function testDidYouKnowFactsVisible(): void
    {
        $response = $this->get('/');

        // Check if the page loads successfully
        $response->assertStatus(200);

        // Check for the presence of the Did You Know wrapper
        $response->assertSee('did-you-know');

        // Assuming you have known text for the facts, check for one of them
        $response->assertSee(__('messages.Zlatan'));
    }




}
