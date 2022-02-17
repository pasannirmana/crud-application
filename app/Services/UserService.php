<?php

namespace App\Services;


use App\ServicesInterface\UserServiceInterface;
use Carbon\Carbon;

class UserService
{
    /**
     * @var UserServiceInterface
     */
    protected UserServiceInterface $userServiceInterface;

    /**
     * @param UserServiceInterface $userServiceInterface
     */
    public function __construct(UserServiceInterface $userServiceInterface)
    {
        $this -> userServiceInterface = $userServiceInterface;
    }

    /**
     * @param $request
     * @return void
     */
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

    /**
     * @param $request
     * @return mixed
     */
    public function getUser($request): mixed
    {
        return $this -> userServiceInterface -> getUser($request);
    }

    /**
     * @param $request
     * @return mixed
     */
    public function getUserById($request): mixed
    {
        $userId = $request['user_id'];
        return $this -> userServiceInterface -> getUserById($userId);
    }

}
