<?php

namespace App\Policies;

use App\User;
use App\Job;
use Illuminate\Auth\Access\HandlesAuthorization;

class JobPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can update the job.
     *
     * @param  \App\User  $user
     * @param  \App\Job  $job
     * @return mixed
     */
    public function touch(User $user, Job $job)
    {
        return $job->creator_id == $user->id || $user->role == "admin";
    }

        /**
     * Determine whether the user can update the job.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    // public function creator(User $user)
    // {
    //     return $user->role == "provider" || $user->role == "admin";
    // }

    public function before($user, $ability)
    {
        if($user->role == "admin") 
            return true;
    }
}
