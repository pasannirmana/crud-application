<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Http\Request;


class UserController extends Controller
{
    /**
     * @var UserService
     */
    protected UserService $userService;

    /**
     * @param UserService $userService
     */
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    /**
     * @param Request $request
     * @return void
     */
    public function createUser(Request $request)
    {
        $this->userService->createUser($request);
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function getUser(Request $request): mixed
    {
        return $this->userService->getUser($request);
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function getUserById(Request $request): mixed
    {
        return $this->userService->getUserById($request);
    }

    public function updateUser(Request $request) :mixed
    {
      return $this->userService->updateUser($request);
    }
    //
}
