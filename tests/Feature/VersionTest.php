<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class VersionTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testAppVersion()
    {
        $response = $this->getJson('/api/version');

        $response->assertStatus(200)->assertJson(['version' => true]);
    }
}
