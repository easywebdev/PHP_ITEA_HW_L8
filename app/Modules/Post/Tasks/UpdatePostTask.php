<?php
/**
 * Created by PhpStorm.
 * User: fedor
 * Date: 14.08.18
 * Time: 19:03
 */

namespace App\Modules\Post\Tasks;


use App\Modules\Post\Contracts\PostRepositoryInterface;
use App\Platform\Task\Task;

/**
 * Class UpdatePostTask
 * @package App\Modules\Post\Tasks
 */
class UpdatePostTask extends Task
{
    /**
     * @var PostRepositoryInterface
     */
    private $postRepository;

    /**
     * UpdatePostTask constructor.
     * @param PostRepositoryInterface $postRepository
     */
    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    /**
     * @param string $name
     * @param string $post
     * @param int $id
     */
    public  function run(string $name, string $post, int $id)
    {
        $this->postRepository->update([
            'name' => $name,
            'post' => $post
        ], $id);
    }
}