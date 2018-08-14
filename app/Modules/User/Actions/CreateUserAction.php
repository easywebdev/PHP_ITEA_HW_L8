<?php
/**
 * Created by PhpStorm.
 * User: fedor
 * Date: 13.08.18
 * Time: 19:38
 */

namespace App\Modules\User\Actions;


use App\Modules\User\Tasks\CreateUserTasks;
use App\Platform\Action\Action;

class CreateUserAction extends Action
{
    private $createUserTask;

    public function __construct(CreateUserTasks $createUserTask)
    {
        $this->createUserTask = $createUserTask;
    }

    public function run(string $name, string $email, string $password)
    {
        $this->createUserTask->run($name, $email, $password);
    }
}