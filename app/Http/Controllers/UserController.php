<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Http\Request;


class UserController extends Controller
{

    protected UserService $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function createUser(Request $request)
    {
        $this->userService->createUser($request);
    }

    public function getUser(Request $request)
    {
        return $this->userService->getUser($request);
    }
    //
}
