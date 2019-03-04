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
        return $job->creator_id == $user->id || $user->id == 13;
    }

    public function before($user, $ability)
    {
        if($user->id == 13) 
            return true;
    }
}