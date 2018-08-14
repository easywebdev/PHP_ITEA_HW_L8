<?php
/**
 * Created by PhpStorm.
 * User: fedor
 * Date: 14.08.18
 * Time: 16:31
 */

namespace App\Modules\User\Tasks;


use App\Modules\User\Contracts\UserRepoitoryInterface;

class ListAllUsersTask
{
    private $userRepository;

    public function __construct(UserRepoitoryInterface $userRepoitory)
    {
        $this->userRepository = $userRepoitory;
    }

    public function run()
    {
        return $this->userRepository->all();
    }
}