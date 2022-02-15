<?php

namespace App\ServicesInterface;

interface UserServiceInterface
{
    public function createUser($userInputData);

    /**
     * @param $request
     * @return mixed
     */
    public function getUser($request): mixed;


}
