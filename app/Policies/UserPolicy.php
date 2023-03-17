<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class UserPolicy
{
    use HandlesAuthorization;
    /**
     * Determine whether the user can view any user.
     *
     * @param \App\User $user
     * @return bool
     */
    public function viewAny(User $user): bool
    {
        // un-Authenticated Users cannot view any User model data
        if ($user === null) {
            return false;
        }
        // check if user has view incident index
        if ($user->can('view user index')) {
            return true;
        }

    }

    /**
     * Determine whether the user can view the user.
     *
     * @param \App\User|null $user, $model
     * @return bool
     */
    public function view(User $user, User $model): bool
    {
        // deny un-Authenticated Users
        if ($user === null) {
            return false;
        }

        // Authenticated Users can view their own User model data
        if ($user->can('show student')) {
            if ($user->id == $model->id){
                return true;
            } else if ($user->hasRole('admin')) {
                return true;
            }
        }
        if ($user->can('show instructor')) {
            if ($user->id == $model->id){
                return true;
            } else if ($user->hasRole('admin')) {
                return true;
            }
        }
        if ($user->can('show admin')) {
            if ($user->id == $model->id) {
                return true;
            }
        }

    }

    /**
     * Determine whether the user can create models.
     *
     * @param \App\User $user
     * @return bool
     */
    public function create(User $user): bool
    {
        // deny un-Authenticated Users
        if ($user === null) {
            return false;
        }

        // checks if user has create student permission
        if ($user->can('create student')) {
            return true;
        }
        if ($user->can('create instructor')) {
            return true;
        }
        if ($user->can('create admin')) {
            return true;
        }
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param \App\User $user, $model
     * @return bool
     */
    public function update(User $user, User $model): bool
    {
        // deny un-Authenticated Users
        if ($user === null) {
            return false;
        }

        // checks if user can update student users
        if ($user->can('update student')) {
            if ($user->id == $model->id){
                return true;
            } else if ($user->hasRole('admin')) {
                return true;
            }
        }
        // checks if user can update instructor users
        if ($user->can('update instructor')) {
            if ($user->id == $model->id){
                return true;
            } else if ($user->hasRole('admin')) {
                return true;
            }
        }
        // checks if user can update admin users
        if ($user->can('update admin')) {
            if ($user->id == $model->id){
                return true;
            }
        }

    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param \App\User $user, $model
     * @return bool
     */
    public function delete(User $user, User $model): bool
    {
        // deny un-Authenticated Users
        if ($user === null) {
            return false;
        }
        // checks if user can trash student users
        if ($user->can('trash student')) {
            if ($user->id == $model->id){
                return true;
            } else if ($user->hasRole('admin')) {
                return true;
            }
        }
        // checks if user can trash instructor users
        if ($user->can('trash instructor')) {
            if ($user->id == $model->id){
                return true;
            } else if ($user->hasRole('admin')) {
                return true;
            }
        }
        // checks if user can trash admin users
        if ($user->can('trash admin')) {
            if ($user->id == $model->id){
                return true;
            }
        }

    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param \App\User $user, $model
     * @return bool
     */
    public function restore(User $user, User $model): bool
    {
        // deny un-Authenticated Users
        if ($user === null) {
            return false;
        }
        // checks if user can restore users
        if ($user->can('restore user')) {
            return true;
        }
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param \App\User $user, $model
     * @return bool
     */
    public function forceDelete(User $user, User $model): bool
    {
        // deny un-Authenticated Users
        if ($user === null) {
            return false;
        }
        // checks if user can forceDelete users
        if ($user->can('forceDelete user')) {
            return true;
        }
    }
}
