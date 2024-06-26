<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Portfolio;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Auth;

class PortfolioPolicy
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
    public function view(User $user, Portfolio $portfolio): bool
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
            return true;
        } else {
            return abort(403, 'Unauthorized action.');
        }
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Portfolio $portfolio): bool
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
    public function delete(User $user, Portfolio $portfolio): bool
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
    public function restore(User $user, Portfolio $portfolio): bool
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
    public function forceDelete(User $user, Portfolio $portfolio): bool
    {
        if (Auth::check()) {
            return true;
        } else {
            return abort(403, 'Unauthorized action.');
        }
    }
}
