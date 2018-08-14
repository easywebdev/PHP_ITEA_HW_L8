<?php
/**
 * Created by PhpStorm.
 * User: fedor
 * Date: 14.08.18
 * Time: 17:05
 */

namespace App\Modules\Post\Tasks;


use App\Modules\Post\Contracts\PostRepositoryInterface;
use App\Platform\Task\Task;

/**
 * Class CreatePostTask
 * @package App\Modules\Post\Tasks
 */
class CreatePostTask extends Task
{
    /**
     * @var PostRepositoryInterface
     */
    private $postRepository;

    /**
     * CreatePostTask constructor.
     * @param PostRepositoryInterface $postRepository
     */
    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    /**
     * @param string $name
     * @param string $post
     */
    public function run(string $name, string $post): void
    {
        $this->postRepository->create([
           'name' => $name,
           'post' => $post
        ]);
    }
}