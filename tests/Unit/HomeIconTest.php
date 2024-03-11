<?php

namespace Tests\Unit;

use Tests\TestCase;

class HomeIconTest extends TestCase
{
    /**
     * Test to ensure the home page can be accessed.
     */
    public function testHomePageIsAccessible()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('fas fa-home'); // Assuming your home icon has a unique class or ID associated with it.
    }
}
