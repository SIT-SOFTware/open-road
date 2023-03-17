<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Stuff;
use App\Models\Registration;
use Illuminate\Auth\Access\Response;
use Illuminate\Auth\Access\HandlesAuthorization;

class RegistrationPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        // deny un-Authenticated user
        if ($user === null) {
            return false;
        }
        // check if user has view registration index permission
        if ($user->can('view registration index')) {
            return true;
        } else if ($user->can('view class list')) {
            return true;
        }
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Registration $registration): bool
    {
        // deny un-Authenticated user
        if ($user === null) {
            return false;
        }
        // check if User has show registration permission
        if ($user->can('show registration')) {
             // get Stuff data related to current user
            $stuff = Stuff::where('user_id', $user->id);
            // check User id against Stuff
            if($user->id == $stuff->user_id) {
                // check Registration against Stuff
                if ($registration->stuff_id == $stuff->id) {
                    return true;
                }
            } else if ($user->hasRole('admin')) {
                return true;
            }
        }
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        // deny un-Authenticated user
        if ($user === null) {
            return false;
        }
        // check if user has create registration permission
        if ($user->can('create registration')) {
            return true;
        }

    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Registration $registration): bool
    {
        // deny un-Authenticated user
        if ($user === null) {
            return false;
        }
        // check if User has update registration permission
        if ($user->can('update registration')) {
            // get Stuff data realted to current user
            $stuff = Stuff::where('user_id', $user->id);
            // check User id against Stuff
            if($user->id == $stuff->user_id) {
                // check Registration against Stuff
                if ($registration->stuff_id == $stuff->id) {
                    return true;
                }
            } else if ($user->hasRole('admin')) {
                return true;
            }
        }

    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Registration $registration): bool
    {
        // deny un-Authenticated user
        if ($user === null) {
            return false;
        }
        // check if User has update registration permission
        if ($user->can('trash registration')) {
            // get Stuff data realted to current user
            $stuff = Stuff::where('user_id', $user->id);
            // check User id against Stuff
            if($user->id == $stuff->user_id) {
                // check Registration against Stuff
                if ($registration->stuff_id == $stuff->id) {
                    return true;
                }
            } else if ($user->hasRole('admin')) {
                return true;
            }
        }
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Registration $registration): bool
    {
        // deny un-Authenticated user
        if ($user === null) {
            return false;
        }
        if ($user->can('restore registration')) {
            return true;
        }
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Registration $registration): bool
    {
        // deny un-Authenticated user
        if ($user === null) {
            return false;
        }
        if ($user->can('forceDelete registration')) {
            return true;
        }
    }
}
