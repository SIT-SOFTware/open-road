<?php

namespace App\Policies;

use App\Models\Incident;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class IncidentPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        // deny un-Authenticated Users
        if ($user === null) {
            return false;
        }
        // check if user has view incident index
        if ($user->can('view incident index')) {
            return true;
        }
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Incident $incident): bool
    {
        // deny un-Authenticated Users
        if ($user === null) {
            return false;
        }
        // check if user has view incident index
        if ($user->can('show incident')) {
        return true;
        }
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        // deny un-Authenticated Users
        if ($user === null) {
            return false;
        }
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Incident $incident): bool
    {
        // deny un-Authenticated Users
        if ($user === null) {
            return false;
        }
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Incident $incident): bool
    {
        // deny un-Authenticated Users
        if ($user === null) {
            return false;
        }
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Incident $incident): bool
    {
        // deny un-Authenticated Users
        if ($user === null) {
            return false;
        }
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Incident $incident): bool
    {
        // deny un-Authenticated Users
        if ($user === null) {
            return false;
        }
    }
}
