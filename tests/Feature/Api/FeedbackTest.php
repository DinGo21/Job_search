<?php

namespace Tests\Feature\Api;

use App\Models\Feedback;
use App\Models\Job;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FeedbackTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;

    public function test_FeedbackBelongsToJob(): void
    {
        Job::factory()->create();
        $feedback = Feedback::factory()->create([
            'job_id' => 1
        ]);

        $this->assertInstanceOf(Job::class, $feedback->job);
    }

    public function test_ReadOneComment(): void
    {
        Job::factory()->create();
        Feedback::factory(2)->create([
            'job_id' => 1,
            'comment' => 'testComment'
        ]);

        $response = $this->get('/api/jobs/1/comments/2');
        $response->assertStatus(200)
                ->assertJsonFragment(['job_id' => 1]);
    }

    public function test_ReadAllCommentsFromJob(): void
    {
        Job::factory()->create();
        Feedback::factory(2)->create([
            'job_id' => 1,
            'comment' => 'testComment'
        ]);

        $response = $this->get('/api/jobs/1/comments');
        $response->assertStatus(200)
                ->assertJsonCount(2);
    }

    public function test_DeleteOneComment(): void
    {
        Job::factory()->create();
        Feedback::factory(3)->create([
            'job_id' => 1,
            'comment' => 'testComment'
        ]);

        $this->delete('/api/jobs/1/comments/3');
        $this->assertDatabaseCount('feedback', 2);
    }

    public function test_CreateNewComment(): void
    {
        Job::factory()->create();
        $data = 
        [
            'job_id' => 1,
            'comment' => 'testing'
        ];

        $response = $this->post('/api/jobs/1/comments', $data);
        $response = $this->get('/api/jobs/1/comments/1');
        $response->assertStatus(200)
                ->assertJsonFragment($data);
    }

    public function test_UpdateOneComment(): void
    {
        Job::factory(2)->create();
        $data = 
        [
            'job_id' => 1,
            'comment' => 'testing'
        ];

        $response = $this->post('/api/jobs/1/comments', $data);
        $response = $this->get('/api/jobs/1/comments/1');
        $response->assertStatus(200)
                ->assertJsonFragment($data);

        $data = 
        [
            'job_id' => 2,
            'comment' => 'testing more tests'
        ];

        $response = $this->put('/api/jobs/1/comments/1', $data);
        $response = $this->get('/api/jobs/2/comments/1');
        $response->assertStatus(200)
                ->assertJsonFragment($data);
    }
}
