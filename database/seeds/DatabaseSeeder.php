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
        factory(App\Publisher::class, 5)->create();
        $jobs = factory(App\Book::class, 20)->create();


        $jobs->each(function(App\Job $job) use ($users){
            $job->applicant()->attach(
                $users->random(random_int(1,3))
                );
            });
    }
    
}
