<?php

namespace App\Actions;

use App\Tasks\CalculateAgeTask;
use App\Tasks\CreateUserTask;

/**
 * Class CreateUserAction
 * @package App\Actions
 */
class CreateUserAction extends Actions
{
    /**
     * @var CreateUserTask
     */
    private $createUserTask;

    /**
     * @var CalculateAgeTask
     */
    private $calculateAgeTask;

    /**
     * CreateUserAction constructor.
     * @param CreateUserTask $createUserTask
     * @param CalculateAgeTask $calculateAgeTask
     */
    public function __construct(
        CreateUserTask $createUserTask,
        CalculateAgeTask $calculateAgeTask
    ) {
        $this->createUserTask = $createUserTask;
        $this->calculateAgeTask = $calculateAgeTask;
    }

    /**
     * @param string $name
     * @param int $age
     */
    public function run(string $name): void
    {
        $age = $this->calculateAgeTask->run();
        $this->createUserTask->run($name, $age);
    }
}
