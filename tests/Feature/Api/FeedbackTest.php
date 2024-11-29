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

    public function test_ReadOneElement()
    {
        Job::factory(2)->create([
            'title' => 'testTitle',
            'description' => 'testDescription',
            'company' => 'testCompany',
            'company_image' => 'testCompanyImage',
            'status' => 0
        ]);
        Feedback::factory(2)->create([
            'job_id' => 1,
            'comment' => 'testComment'
        ]);

        $response = $this->get(route('apishowComments', 2));
        $response->assertStatus(200)
                ->assertJsonFragment(['id' => 2]);
    }

    public function test_DeleteOneComment()
    {
        Job::factory(3)->create([
            'title' => 'testTitle',
            'description' => 'testDescription',
            'company' => 'testCompany',
            'company_image' => 'testCompanyImage',
            'status' => 0
        ]);
        Feedback::factory(3)->create([
            'job_id' => 1,
            'comment' => 'testComment'
        ]);

        $this->delete(route('apidestroyComments', 3));
        $this->assertDatabaseCount('feedback', 2);
    }

    public function test_CreateNewComment()
    {
        Job::factory(4)->create([
            'title' => 'testTitle',
            'description' => 'testDescription',
            'company' => 'testCompany',
            'company_image' => 'testCompanyImage',
            'status' => 0
        ]);
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
        Job::factory(4)->create([
            'title' => 'testTitle',
            'description' => 'testDescription',
            'company' => 'testCompany',
            'company_image' => 'testCompanyImage',
            'status' => 0
        ]);
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
