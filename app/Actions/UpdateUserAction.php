<?php

namespace App\Actions;

use App\Tasks\UpdateUserTask;

/**
 * Class UpdateUserAction
 * @package App\Actions
 */
class UpdateUserAction extends Actions
{
    /**
     * @var UpdateUserTask
     */
    private $updateUserTask;

    /**
     * UpdateUserAction constructor.
     * @param UpdateUserTask $updateUserTask
     */
    public function __construct(UpdateUserTask $updateUserTask)
    {
        $this->updateUserTask = $updateUserTask;
    }

    /**
     * @param int $id
     * @param null|string $name
     * @param $age
     */
    public function run(
        int $id,
        ?string $name,
        ?int $age
    ) {
        $this->updateUserTask->run($id, $name, $age);
    }
}
