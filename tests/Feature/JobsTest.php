<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use App\Job;

class JobsTest extends TestCase
{
    /**
     * A basic root test example that checks if the root route loads propertly.
     *
     * @test
     */
    public function check_if_root_route_loads()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

       /**
     * A basic test that check if the jobs list route load correctly. 
     *
     * @test
     */
    public function check_if_jobs_list_loads()
    {
        $response = $this->get('/jobs');

        $response->assertOk();

        $response->assertSeeText('More Info');
    }

   /**
     * A basic test that create a job and check if the info is loaded correctly
     *
     * @test
     */
    public function check_if_job_info_loads()
    {

        $job = factory('App\Job')->create();

        $response = $this->get('/jobs/'.$job->slug);

        $response->assertSee($job->description);

    }

            /**
     * A basic test that takes a random job and check if the info page loads propertly
     *
     * @test
     */
    public function check_if_job_info_that_exist_loads()
    {

        $job = Job::inRandomOrder()->first();

        $response = $this->get('/jobs/'.$job->slug);

        $response->assertSee($job->job_name);
    }


    /**
     * A basic test that probes if a guest can create a job
     *
     * @test
     */
    public function check_if_a_guest_user_creates_a_job()
    {
        $response = $this->get('/jobs/create');

        $response->assertRedirect('/login');

    }

    /**
     * A basic test that probes if a provider(makes jobs) can create a job
     *
     * @test
     */
    public function check_if_a_logged_provider_user_creates_a_job()
    {
        $this->actingAs(factory('App\User')->create([
            'role' => 'provider',
        ]));

        $this->get('/jobs/create')
                    ->assertOk()
                    ->assertSee('Nombre del Trabajo')
                    ->assertSee('Company')
                    ->assertSee('Descripcion')
                    ->assertSee('Provincia')
                    ->assertSee('Sueldo')
                    ->assertSee('Categoria');
    }


              /**
     * A basic test example.
     *
     * @test
     */
    public function check_if_a_logged_user_save_a_job()
    {
        $this->actingAs(factory('App\User')->create());
        $job = factory('App\Job')->create();

        $this->post('/jobs', $job->toArray());

        $this->assertDatabaseHas('jobs', [
            'job_name' => $job->job_name,
            'slug' => $job->slug,
            'category' => $job->category,
            'province' => $job->province,
            'category' => $job->category,
            'description' => $job->description,
        ]);
    }

}

