<?php

namespace Tests\Feature\Api;

use App\Models\Job;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class JobTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;

    public function test_ReadAllElements(): void
    {
        Job::factory(3)->create();
        $response = $this->get(route('apiindex'));
        $response->assertStatus(200)
                ->assertJsonCount(3);
    }

    public function test_ReadOneElement(): void
    {
        Job::factory(2)->create();
        $response = $this->get(route('apishow', 1));
        $response->assertStatus(200)
                ->assertJsonFragment(['id' => 1]);
    }

    public function test_DeleteOneElement(): void
    {
        Job::factory(3)->create();
        $this->delete(route('apidestroy', 3));
        $this->assertDatabaseCount('jobs', 2);
    }

    public function test_CreateNewElement(): void
    {
        $data = 
        [
            'title' => 'testTitle',
            'description' => 'testDescription',
            'company' => 'testCompany',
            'company_image' => 'testCompanyImage',
            'status' => 0
        ];

        $response = $this->post(route('apistore'), $data);
        $response = $this->get(route('apiindex'));
        $response->assertStatus(200)
                ->assertJsonCount(1)
                ->assertJsonFragment($data);
    }

    public function test_UpdateOneElement(): void
    {
        $data = 
        [
            'title' => 'testTitle',
            'description' => 'testDescription',
            'company' => 'testCompany',
            'company_image' => 'testCompanyImage',
            'status' => 0
        ];
        $response = $this->post(route('apistore'), $data);
        $response = $this ->get(route('apiindex'));
        $response->assertStatus(200)
                ->assertJsonCount(1)
                ->assertJsonFragment($data);

        $data = 
        [
            'title' => 'newtestTitle',
            'description' => 'newtestDescription',
            'company' => 'newtestCompany',
            'company_image' => 'newtestCompanyImage',
            'status' => 1
        ];
        $response = $this->put(route('apiupdate', 1), $data);
        $response = $this->get(route('apiindex'));
        $response->assertStatus(200)
                ->assertJsonCount(1)
                ->assertJsonFragment($data);
    }
}
