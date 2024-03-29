<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Access\AuthorizationException;

class CategoryPolicy
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
    public function view(User $user, Category $category): bool
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
    public function update(User $user, Category $category): bool
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
    public function delete(User $user, Category $category): bool
    {
        if (Auth::check()) {
            $isNull = Product::where('category_id', $category->id)->get();

            if($isNull->isEmpty()) {
                return false;
            } else {
                return false;
            }
        } else {
            return abort(403, 'Unauthorized action.');
        }
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Category $category): bool
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
    public function forceDelete(User $user, Category $category): bool
    {
        if (Auth::check()) {
            return true;
        } else {
            return abort(403, 'Unauthorized action.');
        }
    }
}
