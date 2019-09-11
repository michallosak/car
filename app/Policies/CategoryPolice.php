<?php

namespace App\Policies;

use App\Model\Category;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CategoryPolice
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function update(User $user, Category $category){
        return $user->id === $category->user_id;
    }

    public function destroy(User $user, Category $category){
        return $user->id === $category->user_id;
    }
}
