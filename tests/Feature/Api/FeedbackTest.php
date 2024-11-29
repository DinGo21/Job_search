<?php

namespace Tests\Feature\Api;

use App\Models\Feedback;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FeedbackTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;

    public function test_ReadOneElement()
    {
        Feedback::factory(2)->create();
        $response = $this->get(route('apishowComments', 2));
        $response->assertStatus(200)
                ->assertJsonFragment(['id' => 2]);
    }

    public function test_DeleteOneComment()
    {
        Feedback::factory(3)->create();
        $this->delete(route('apidestroyComments', 3));
        $this->assertDatabaseCount('feedback', 2);
    }

    public function test_CreateNewComment()
    {
        $data = 
        [
            'job_id' => 4,
            'comment' => 'testing'
        ];

        $response = $this->post(route('apistoreComments'), $data);
        $response = $this->get(route('apishowComments', 1));
        $response->assertStatus(200)
                ->assertJsonFragment($data);
    }

    public function test_UpdateOneComment()
    {
        $data = 
        [
            'job_id' => 4,
            'comment' => 'testing'
        ];
        $response = $this->post(route('apistoreComments'), $data);
        $response = $this->get(route('apishowComments', 1));
        $response->assertStatus(200)
                ->assertJsonFragment($data);

        $data = 
        [
            'job_id' => 2,
            'comment' => 'testing more tests'
        ];
        $response = $this->put(route('apiupdateComments', 1), $data);
        $response = $this->get(route('apishowComments', 1));
        $response->assertStatus(200)
                ->assertJsonFragment($data);
    }
}
