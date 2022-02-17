<?php

namespace App\ServicesInterface;

interface UserServiceInterface
{
    /**
     * @param $userInputData
     * @return mixed
     */
    public function createUser($userInputData): mixed;

    /**
     * @param $request
     * @return mixed
     */
    public function getUser($request): mixed;

    /**
     * @param $userId
     * @return mixed
     */
    public function getUserById($userId): mixed;


}
