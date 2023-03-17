<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Stuff;
use App\Models\Invoice;
use Illuminate\Auth\Access\Response;

class InvoicePolicy
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
        // check if user has view invoice index permission
        if ($user->can('view invoice index')) {
            return true;
        }
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Invoice $invoice
     * @return bool
     */
    public function view(User $user, Invoice $invoice): bool
    {
        // deny un-Authenticated Users
        if ($user === null) {
            return false;
        }
        // check if user has show invoice permission
        if ($user->can('show invoice')) {
            // get Stuff related to current user
            $stuff = Stuff::where('user_id', $user->id);
            if ($invoice->invoice_id == $stuff->invoice_id) {
                return true;
            } else if ($user->hasRole('admin')) {
                return true;
            }
        }
    }

    /**
     * Determine whether the user can create models.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Invoice $invoice
     * @return bool
     */
    public function create(User $user): bool
    {
        // deny un-Authenticated Users
        if ($user === null) {
            return false;
        }
        // check if user has create invoice permission
        if ($user->can('create invoice')) {
            return true;
        }
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Invoice $invoice
     * @return bool
     */
    public function update(User $user, Invoice $invoice): bool
    {
        // deny un-Authenticated Users
        if ($user === null) {
            return false;
        }
        // check if user has update invoice permission
        if ($user->can('update invoice')) {
            return true;
        }
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Invoice $invoice
     * @return bool
     */
    public function delete(User $user, Invoice $invoice): bool
    {
        // deny un-Authenticated Users
        if ($user === null) {
            return false;
        }
        // check if user has trash invoice permission
        if ($user->can('trash invoice')) {
            return true;
        }
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Invoice $invoice
     * @return bool
     */
    public function restore(User $user, Invoice $invoice): bool
    {
        // deny un-Authenticated Users
        if ($user === null) {
            return false;
        }
        // check if user has restore invoice permission
        if ($user->can('restore invoice')) {
            return true;
        }
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Invoice $invoice
     * @return bool
     */
    public function forceDelete(User $user, Invoice $invoice): bool
    {
        // deny un-Authenticated Users
        if ($user === null) {
            return false;
        }
        // check if user has forceDelete invoice permission
        if ($user->can('forceDelete invoice')) {
            return true;
        }
    }
}
