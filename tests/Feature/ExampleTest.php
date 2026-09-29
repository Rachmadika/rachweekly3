<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Welcome to the Home Page');
        $response->assertSee(url('/profil'));
    }

    public function test_the_profile_page_returns_a_successful_response(): void
    {
        $response = $this->get('/profil');

        $response->assertStatus(200);
        $response->assertSee('User Profile');
        $response->assertSee(url('/'));
    }
}
