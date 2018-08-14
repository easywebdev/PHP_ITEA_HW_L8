<?php
/**
 * Created by PhpStorm.
 * User: fedor
 * Date: 13.08.18
 * Time: 19:26
 */

namespace App\Modules\User\Repository;


use App\Modules\User\Contracts\UserRepoitoryInterface;
use App\Modules\User\Model\User;
use Prettus\Repository\Eloquent\BaseRepository;

class UserRepository extends BaseRepository implements UserRepoitoryInterface
{
    public function model()
    {
        return User::class;
    }
}