<?php

namespace App\Policies;

use App\Models\Stuff;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class StuffPolicy
{
    /**
     * Determine whether the user can view any models.
     *
     * @param \App\Models\User $user
     * @return bool
     */
    public function viewAny(User $user): bool
    {
        // deny un-Authenticated user
        if ($user == null) {
            return false;
        }
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param \App\Models\User|null $user
     * @param \App\Models\Stuff $stuff
     * @return bool
     */
    public function view(User $user, Stuff $stuff): bool
    {
        // deny un-Authenticated user
        if ($user == null) {
            return false;
        }
        if ($user->can('show stuff')) {
            if ($stuff->user_id == $user->id) {
                return true;
            } else if ($user->hasRole('admin')) {
                return true;
            }
        }
    }

    /**
     * Determine whether the user can create models.
     *
     * @param \App\Models\User|null $user
     * @return bool
     */
    public function create(User $user): bool
    {
        // deny un-Authenticated user
        if ($user == null) {
            return false;
        }
        // check if user has create Stuff permission
        if ($user->can('create stuff')) {
            return true;
        }
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param \App\Models\User|null $user
     * @param \App\Models\Stuff $stuff
     * @return bool
     */
    public function update(User $user, Stuff $stuff): bool
    {
        // deny un-Authenticated user
        if ($user == null) {
            return false;
        }
        // check if user has update Stuff permission
        if ($user->can('update stuff')) {
            // check if user matches Stuff or has admin role
            if ($stuff->user_id == $user->id) {
                return true;
            } else if ($user->hasRole('admin')) {
                return true;
            }
        }
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Stuff $stuff
     * @return bool
     */
    public function delete(User $user, Stuff $stuff): bool
    {
        // deny un-Authenticated user
        if ($user == null) {
            return false;
        }
        // check if user has trash Stuff permission
        if ($user->can('trash stuff')) {
            // check if user matches Stuff or has admin role
            if ($stuff->user_id == $user->id) {
                return true;
            } else if ($user->hasRole('admin')) {
                return true;
            }
        }
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Stuff $stuff
     * @return bool
     */
    public function restore(User $user, Stuff $stuff): bool
    {
        // deny un-Authenticated user
        if ($user == null) {
            return false;
        }
        // check if user has trash Stuff permission
        if ($user->can('trash stuff')) {
            // check if user matches Stuff or has admin role
            if ($stuff->user_id == $user->id) {
                return true;
            } else if ($user->hasRole('admin')) {
                return true;
            }
        }
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param \App\Models\User  $user
     * @param \App\Models\Stuff $stuff
     * @return bool
     */
    public function forceDelete(User $user, Stuff $stuff): bool
    {
        // deny un-Authenticated user
        if ($user == null) {
            return false;
        }
        // check if user has forceDelete Stuff permission
        if ($user->can('forceDelete stuff')) {
            return true;
        }
    }
}
