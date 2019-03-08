<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class BooksTest extends TestCase
{
    use DatabaseMigrations;

    public function a_user_can_browse_books()
    {
        $response = $this->get('/books');

        $response->assertStatus(200);
    }
}

