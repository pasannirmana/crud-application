<?php

namespace App\Repositories;

use App\Models\User;
use App\ServicesInterface\UserServiceInterface;

class UserRepository implements UserServiceInterface
{


    public function createUser($userInputData)
    {
        $newUser = new User();
        $newUser->fill($userInputData);
        $newUser->save();
    }

    public function getUser($request): array
    {
        return User::all('email','password','name','joined_date')->toArray();
    }
}
