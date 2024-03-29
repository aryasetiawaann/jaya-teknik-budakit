<?php

namespace App\Policies;

use App\Models\User;
use App\Models\PhoneNumber;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Auth;

class PhoneNumberPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        if (Auth::check()) {
            return true;
        } else {
            return abort(403, 'Unauthorized action.');
        }
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, PhoneNumber $phoneNumber): bool
    {
        if (Auth::check()) {
            return true;
        } else {
            return abort(403, 'Unauthorized action.');
        }
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        if (Auth::check()) {
            $phone = PhoneNumber::get()->first();

            if ($phone->number) {
                return true;
            } else {
                return false;
            }
        } else {
            return abort(403, 'Unauthorized action.');
        }
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, PhoneNumber $phoneNumber): bool
    {
        if (Auth::check()) {
            return true;
        } else {
            return abort(403, 'Unauthorized action.');
        }
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, PhoneNumber $phoneNumber): bool
    {
        if (Auth::check()) {
            return true;
        } else {
            return abort(403, 'Unauthorized action.');
        }
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, PhoneNumber $phoneNumber): bool
    {
        if (Auth::check()) {
            return true;
        } else {
            return abort(403, 'Unauthorized action.');
        }
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, PhoneNumber $phoneNumber): bool
    {
        if (Auth::check()) {
            return true;
        } else {
            return abort(403, 'Unauthorized action.');
        }
    }
}
