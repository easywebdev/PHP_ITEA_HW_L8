<?php

namespace App\Http\Controllers;

use App\Actions\CreateUserAction;
use App\Actions\GetUsersAction;
use App\Actions\UpdateUserAction;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;

class UserController extends Controller
{
//    protected $redirectTo = '/';

    /**
     * @param CreateUserRequest $request
     * @param CreateUserAction $action
     * @return array
     */
    public function createUser(CreateUserRequest $request, CreateUserAction $action)
    {
        $action->run(
            $request->name,
            $request->age
        );

        return [
            'message' => 'User created success'
        ];
    }

    public function getUsers(GetUsersAction $action)
    {
        return $action->run();
    }

    /**
     * @param UpdateUserRequest $requests
     * @param UpdateUserAction $action
     * @return array
     */
    public function updateUser(UpdateUserRequest $requests, UpdateUserAction $action)
    {
        $action->run(
            $requests->id,
            $requests->name,
            $requests->age
        );

        return [
            'message' => 'User Updated'
        ];
    }
}
