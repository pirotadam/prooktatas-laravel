<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RouteTest extends TestCase
{
    // 10. Feladat
    public function test_example(): void
    {
        $response = $this->get('/users');

        $response->assertStatus(200);
    }
}
