<?php

namespace App\Policies;

use App\Models\Advertisement;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class AdvertisementPolicy
{
    /**
     * Determine whether the user can view any models.
     *
     * @param \App\Models\User $user
     * @return bool
     */
    public function viewAny(User $user)
    {
        // deny un-Authenticated Users
        if ($user === null) {
            return false;
        }
        // check if user has view ad index permission
        if ($user->can('view ad index')) {
            return true;
        }
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Advertisement $advertisement
     * @return bool
     */
    public function view(User $user, Advertisement $advertisement)
    {
        // deny un-Authenticated Users
        if ($user === null) {
            return false;
        }
        // check if user has show ad permission
        if ($user->can('show ad')) {
            return true;
        }
    }

    /**
     * Determine whether the user can create models.
     *
     * @param \App\Models\User $user
     * @return bool
     */
    public function create(User $user)
    {
        // deny un-Authenticated Users
        if ($user === null) {
            return false;
        }
        // check if user has create ad permission
        if ($user->can('create ad')) {
            return true;
        }
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Advertisement $advertisement
     * @return bool
     */
    public function update(User $user, Advertisement $advertisement)
    {
        // deny un-Authenticated Users
        if ($user === null) {
            return false;
        }
        // check if user has update ad permission
        if ($user->can('update ad')) {
            return true;
        }
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Advertisement $advertisement
     * @return bool
     */
    public function delete(User $user, Advertisement $advertisement)
    {
        // deny un-Authenticated Users
        if ($user === null) {
            return false;
        }
        // check if user has trash ad permission
        if ($user->can('trash ad')) {
            return true;
        }
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Advertisement $advertisement
     * @return bool
     */
    public function restore(User $user, Advertisement $advertisement)
    {
        // deny un-Authenticated Users
        if ($user === null) {
            return false;
        }
        // check if user has restore ad permission
        if ($user->can('restore ad')) {
            return true;
        }
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Advertisement $advertisement
     * @return bool
     */
    public function forceDelete(User $user, Advertisement $advertisement)
    {
        // deny un-Authenticated Users
        if ($user === null) {
            return false;
        }
        // check if user has forceDelete permission
        if ($user->can('forceDelete ad')) {
            return true;
        }
    }
}
