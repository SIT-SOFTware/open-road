<?php

namespace App\Policies;

use App\Models\PRA_Class;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class PRA_ClassPolicy
{
    /**
     * Determine whether the user can view any models.
     *
     * @param \App\Models\User $user
     * @return bool
     */
    public function viewAny(User $user): bool
    {
        // deny un-Authenticated Users
        if ($user === null) {
            return false;
        }
        // check if user has view class index permission
        if ($user->can('view class index')) {
            return true;
        }
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\PRA_Class $pRAClass
     * @return bool
     */
    public function view(User $user, PRA_Class $pRAClass): bool
    {
        // deny un-Authenticated Users
        if ($user === null) {
            return false;
        }
        // check if user has show class permission
        if ($user->can('show class')) {
            return true;
        }
    }

    /**
     * Determine whether the user can create models.
     *
     * @param \App\Models\User $user
     * @param \App\Models\PRA_Class $pRAClass
     * @return bool
     */
    public function create(User $user): bool
    {
        // deny un-Authenticated Users
        if ($user === null) {
            return false;
        }
        // check if user has create class permission
        if ($user->can('create class')) {
            return true;
        }
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\PRA_Class $pRAClass
     * @return bool
     */
    public function update(User $user, PRA_Class $pRAClass): bool
    {
        // deny un-Authenticated Users
        if ($user === null) {
            return false;
        }
        // check if user has update class permission
        if ($user->can('update class')) {
            return true;
        }
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\PRA_Class $pRAClass
     * @return bool
     */
    public function delete(User $user, PRA_Class $pRAClass): bool
    {
        // deny un-Authenticated Users
        if ($user === null) {
            return false;
        }
        // check if user has trash class permission
        if ($user->can('trash class')) {
            return true;
        }
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\PRA_Class $pRAClass
     * @return bool
     */
    public function restore(User $user, PRA_Class $pRAClass): bool
    {
        // deny un-Authenticated Users
        if ($user === null) {
            return false;
        }
        // check if user has restore class permission
        if ($user->can('restore class')) {
            return true;
        }
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\PRA_Class $pRAClass
     * @return bool
     */
    public function forceDelete(User $user, PRA_Class $pRAClass): bool
    {
        // deny un-Authenticated Users
        if ($user === null) {
            return false;
        }
        // check if user has forceDelete class permission
        if ($user->can('forceDelete class')) {
            return true;
        }
    }
}
