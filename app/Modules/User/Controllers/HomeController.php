<?php
/**
 * Created by PhpStorm.
 * User: fedor
 * Date: 13.08.18
 * Time: 19:06
 */

namespace App\Modules\User\Controllers;


use App\Http\Controllers\Controller;
use App\Modules\User\Actions\CreateUserAction;
use App\Modules\User\Requests\CreateUserRequest;
use App\Modules\User\Tasks\ListAllUsersTask;
use App\Modules\User\UserTransformer;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function createUser(Request $request, CreateUserAction $action)
    {
        $action->run($request->name, $request->email, $request->password);

        return $this->response->created(null, [
           'User' => 'Created'
        ]);
    }

    public function getUsers(ListAllUsersTask $task)
    {
        $users = $task->run();

        return $this->response()->collection($users, new UserTransformer());
    }
}