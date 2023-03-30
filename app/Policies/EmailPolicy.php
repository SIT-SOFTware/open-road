<?php

namespace App\Policies;

use App\Models\User;

class EmailPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine whether a user can view email index
     *
     * @param \App\Models\User $user
     * @return bool
     */
    public function viewAny(User $user): bool
    {
        if ($user === null) {
            return false;
        }

        // checks if user has view email index permission
        if ($user->can('view email index')) {
            return true;
        }
    }

    /**
     * Determine whether a user can create an email instance
     *
     * @param \App\Models\User $user
     * @return bool
     */
    public function create(User $user): bool
    {
        if($user === null) {
            return false;
        }

        // checks if user has create email permission
        if ($user->can('create email')) {
            return true;
        }
    }

    /**
     * Determine whether a user can delete an email instance
     *
     * @param \App\Models\User $user
     * @return bool
     */
    public function delete(User $user): bool
    {
        if($user === null) {
            return false;
        }

        // checks if user has trash email permission
        if($user->can('trash email')) {
            return true;
        }
    }

    public function send(User $user): bool
    {
        if($user === null) {
            return false;
        }

        // checks if user has send email permission
        if($user->can('send email')) {
            return true;
        }
    }
}
