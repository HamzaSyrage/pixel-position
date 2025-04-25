<?php

namespace App\Policies;

use App\Models\Job;
use App\Models\User;

class JobPolicy
{
    public function viewAny(?User $user): bool
    {
        return true; // Allow guests and users
    }

    public function view(?User $user, Job $job): bool
    {
        return true; // Public access to view jobs
    }

    public function create(User $user): bool
    {
        return true; // Any logged-in user can create (employer existence guaranteed)
    }

    public function update(User $user, Job $job): bool
    {
        return $user->employer->id === $job->employer_id;
    }

    public function delete(User $user, Job $job): bool
    {
        return $this->update($user, $job);
    }
    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Job $job): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Job $job): bool
    {
        return false;
    }
}
