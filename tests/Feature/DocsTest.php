<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DocsTest extends TestCase
{
    use RefreshDatabase;
    
    public function test_docsIsWorking(): void
    {
        $this->withoutExceptionHandling();

        $response = $this->get(route('docs'));

        $response->assertStatus(200);
    }
}
