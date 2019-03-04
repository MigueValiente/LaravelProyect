<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $users = factory(App\User::class, 10)->create();
        $admin = factory(App\User::class)->create([
            'name' => 'admin',
            'email' => 'admin@example.org',
            'role'    => 'admin',
       ]);
        factory(App\Company::class, 5)->create();
        $jobs = factory(App\Job::class, 20)->create();


        $jobs->each(function(App\Job $job) use ($users){
            $job->applicant()->attach(
                $users->random(random_int(1,3))
                );
            });
    }
    
}
