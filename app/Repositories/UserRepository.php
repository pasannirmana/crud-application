<?php

namespace App\Repositories;

use App\Models\User;
use App\ServicesInterface\UserServiceInterface;

class UserRepository implements UserServiceInterface
{
    /**
     * @param $userInputData
     * @return mixed
     */

    public function createUser($userInputData): mixed
    {
        $newUser = new User();
        $newUser->fill($userInputData);
        $newUser->save();
        return null;
    }

    /**
     * @param $request
     * @return array
     */

    public function getUser($request): array
    {
        return User::all('email','password','name','joined_date')->toArray();
    }

    /**
     * @param $userId
     * @return mixed
     */

    public function getUserById($userId): mixed
    {
        return User::where('id', $userId)->first()->toArray();
    }
}
