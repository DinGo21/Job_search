<?php

namespace Tests\Feature;

use App\Models\Job;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class JobTest extends TestCase
{
    use RefreshDatabase;

    public function test_IndexIsWorking()
    {
        $this->withoutExceptionHandling();

        $response = $this->get(route('index'));
        $response->assertStatus(200)
                ->assertViewIs('index');
    }

    public function test_PauseOneElementStatusFromIndex()
    {
        $this->withoutExceptionHandling();

        $job = Job::factory(1)->create(['status' => 1]);
        $this->assertDatabaseCount('jobs', 1);
        $response = $this->get(route('index') . '?action=pause&id=1');
        $response->assertStatus(302);
        $job = Job::find('1');
        $this->assertEquals($job->status, 0);
    }

    public function test_ResumeOneElementStatusFromIndex()
    {
        $this->withoutExceptionHandling();

        $job = Job::factory(1)->create(['status' => 0]);
        $this->assertDatabaseCount('jobs', 1);
        $response = $this->get(route('index') . '?action=resume&id=1');
        $response->assertStatus(302);
        $job = Job::find('1');
        $this->assertEquals($job->status, 1);
    }

    public function test_DeleteOneElementFromIndex()
    {
        $this->withoutExceptionHandling();

        Job::factory(1)->create();
        $this->assertDatabaseCount('jobs', 1);
        $response = $this->get(route('index') . '?action=delete&id=1');
        $this->assertDatabaseCount('jobs', 0);
        $response->assertStatus(302);
    }

    public function test_ShowIsWorking()
    {
        $this->withoutExceptionHandling();

        Job::factory(1)->create();
        $this->assertDatabaseCount('jobs', 1);
        $response = $this->get(route('show', 1));
        $response->assertStatus(200)
                ->assertViewIs('show');
    }
}
