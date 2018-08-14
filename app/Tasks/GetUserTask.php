<?php

namespace App\Tasks;

use App\User;
use Illuminate\Support\Collection;

/**
 * Class GetUserTask
 * @package App\Tasks
 */
class GetUserTask extends Tasks
{
    /**
     * @var User
     */
    private $user;

    /**
     * GetUserTask constructor.
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function run(): Collection
    {
        return $this->user->all();
    }
}
