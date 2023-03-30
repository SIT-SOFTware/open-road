<?php

namespace App\Policies;

use App\Models\User;

class FilePolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Determines whether a user can view file index
     *
     * @param \App\Models\User $user
     * @return bool
     */
    public function viewAny(User $user): bool
    {
        if($user === null) {
            return false;
        }

        // checks if user has the view file index permission
        if($user->can('view file index')) {
            return true;
        }
    }

    /**
     * Determines whether a user can preview a file
     *
     * @param \App\Models\User $user
     * @return bool
     */
    public function show(User $user): bool
    {
        if($user === null) {
            return false;
        }

        // checks if user has the preview file permission
        if($user->can('preview file')) {
            return true;
        }
    }

    /**
     * Determines whether a user can upload a file
     *
     * @param \App\Models\User $user
     * @return bool
     */
    public function upload(User $user): bool
    {
        if($user === null) {
            return false;
        }

        // checks if user has upload file permission
        if($user->can('upload file')) {
            return true;
        }
    }

    /**
     * Determines whether a user can download a file
     *
     * @param \App\Models\User $user
     * @return bool
     */
    public function download(User $user): bool
    {
        if($user === null) {
            return false;
        }

        // checks if user can download files
        if($user->can('download file')) {
            return true;
        }
    }

    /**
     * Determines whether a user can delete a file
     *
     * @param \App\Models\User $user
     * @return bool
     */
    public function delete(User $user): bool
    {
        if($user === null) {
            return false;
        }

        // checks if user has the delete file permission
        if($user->can('delete file')) {
            return true;
        }
    }

    /**
     * Determines whether a user can move a file
     *
     * @param \App\Models\User $user
     * @return bool
     */
    public function move(User $user): bool
    {
        if($user === null) {
            return false;
        }

        // checks if user has move file permission
        if($user->can('move file')) {
            return true;
        }
    }
}
