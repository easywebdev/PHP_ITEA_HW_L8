<?php
/**
 * Created by PhpStorm.
 * User: fedor
 * Date: 14.08.18
 * Time: 12:16
 */

namespace App\Modules\Post\Repository;


use App\Modules\Post\Contracts\PostRepositoryInterface;
use App\Modules\Post\Models\Posts;
use Prettus\Repository\Eloquent\BaseRepository;

/**
 * Class PostRepository
 * @package App\Modules\Post\Repository
 */
class PostRepository extends BaseRepository implements PostRepositoryInterface
{
    /**
     * @return string
     */
    public function model()
    {
        return Posts::class;
    }
}