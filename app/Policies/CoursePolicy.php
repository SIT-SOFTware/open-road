<?php

namespace App\Policies;

use App\Models\Course;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class CoursePolicy
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
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Course $course
     * @return bool
     */
    public function view(User $user, Course $course): bool
    {
        // deny un-Authenticated Users
        if ($user === null) {
            return false;
        }
        // check if user has show course permission
        if ($user->can('show course')) {
            return true;
        }
    }

    /**
     * Determine whether the user can create models.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Course $course
     * @return bool
     */
    public function create(User $user): bool
    {
        // deny un-Authenticated Users
        if ($user === null) {
            return false;
        }
        // check if user has create course permission
        if ($user->can('create course')) {
            return true;
        }
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Course $course
     * @return bool
     */
    public function update(User $user, Course $course): bool
    {
        // deny un-Authenticated Users
        if ($user === null) {
            return false;
        }
        // check if user has update course permission
        if ($user->can('update course')) {
            return true;
        }
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Course $course
     * @return bool
     */
    public function delete(User $user, Course $course): bool
    {
        // deny un-Authenticated Users
        if ($user === null) {
            return false;
        }
        // check if user has trash course permission
        if ($user->can('trash course')) {
            return true;
        }
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Course $course
     * @return bool
     */
    public function restore(User $user, Course $course): bool
    {
        // deny un-Authenticated Users
        if ($user === null) {
            return false;
        }
        // check if user has restore course permission
        if ($user->can('restore course')) {
            return true;
        }
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Course $course
     * @return bool
     */
    public function forceDelete(User $user, Course $course): bool
    {
        // deny un-Authenticated Users
        if ($user === null) {
            return false;
        }
        // check if user has forceDelete course permission
        if ($user->can('forceDelete course')) {
            return true;
        }
    }
}
