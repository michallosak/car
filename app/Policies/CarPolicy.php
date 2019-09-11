<?php

namespace App\Policies;

use App\Model\Car\Car;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CarPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    public function update(User $user, Car $car){
        return $user->id === $car->user_id;
    }

    public function destroy(User $user, Car $car){
        return $user->id === $car->user_id;
    }
}
