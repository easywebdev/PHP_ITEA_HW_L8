<?php

namespace App\Actions;

use App\Tasks\GetUserTask;
use Illuminate\Support\Collection;

/**
 * Class GetUsersAction
 * @package App\Actions
 */
class GetUsersAction extends Actions
{
    /**
     * @var GetUserTask
     */
    private $getUserTask;

    /**
     * GetUsersAction constructor.
     * @param GetUserTask $getUserTask
     */
    public function __construct(GetUserTask $getUserTask)
    {
        $this->getUserTask = $getUserTask;
    }

    /**
     * @return Collection
     */
    public function run(): Collection
    {
        return $this->getUserTask->run();
    }
}
