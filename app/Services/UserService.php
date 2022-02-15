<?php

namespace App\Services;


use App\ServicesInterface\UserServiceInterface;
use Carbon\Carbon;

class UserService
{
    protected UserServiceInterface $userServiceInterface;

    public function __construct(UserServiceInterface $userServiceInterface)
    {
        $this -> userServiceInterface = $userServiceInterface;
    }

    public function createUser($request)
    {
        $joinedDate = Carbon::now('UTC')->unix();

        $userInputData = [
            'email' => $request['email'],
            'password' => $request['password'],
            'name' => $request['name'],
            'joined_date' => $joinedDate,
        ];


        $this -> userServiceInterface -> createUser($userInputData);

    }

    public function getUser($request)
    {
        return $this -> userServiceInterface -> getUser($request);
    }

}
