<?php
/**
 * Created by PhpStorm.
 * User: fedor
 * Date: 14.08.18
 * Time: 15:32
 */

namespace App\Modules\Post\Tasks;


use App\Modules\Post\Contracts\PostRepositoryInterface;

/**
 * Class ListAllPostsTask
 * @package App\Modules\Post\Tasks
 */
class ListAllPostsTask
{
    /**
     * @var PostRepositoryInterface
     */
    private $postRepository;

    /**
     * ListAllPostsTask constructor.
     * @param PostRepositoryInterface $postRepository
     */
    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    /**
     * @return mixed
     */
    public function run()
    {
        return $this->postRepository->all();
    }
}